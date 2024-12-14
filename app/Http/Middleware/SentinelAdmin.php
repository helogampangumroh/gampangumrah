<?php

namespace App\Http\Middleware;

use App\Models\Task;
use App\Models\Email;
use App\Models\User;
use Closure;
use Sentinel;
use Illuminate\Support\Facades\View;

class SentinelAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Sentinel::check()) {
            return redirect('admin/signin')->with('info', 'You must be logged in!');
        }
        if (! Sentinel::inRole('admin')) {
            return redirect('my-account');
        }

        $tasks_count = Task::where('user_id', Sentinel::getUser()->id)->count();
        $request->attributes->add(['tasks_count' => $tasks_count]);

        // Using Closure based composers...
        View::composer(
            ['admin.layouts.default','admin.layouts.horizontal','admin.minisidebar','admin.emails.*','layouts.default','user_emails.*'],
            function ($view) {
                if (Sentinel::check()) {
                    $inbox_emails = Email::where('status', 1)->where('email_id', Sentinel::getUser()->email)->get();
                    $ids = [];
                    foreach ($inbox_emails as $email) {
                        if (User::where('id', $email->user_id)->exists()) {
                            $ids[] = $email->id;
                        }
                    }
                    $notifications = Email::whereIn('id', $ids)->latest()->get();
                    view()->share(['unread_mails_count' => $notifications->count()]);
                    $view->with('notifications', $notifications);
                } else {
                    view()->share(['unread_mails_count' => 0]);
                }
            }
        );

        return $next($request);
    }
}
