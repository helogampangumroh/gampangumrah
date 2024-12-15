<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateKeberangkatanRequest;
use App\Http\Requests\UpdateKeberangkatanRequest;
use App\Repositories\KeberangkatanRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use App\Models\Keberangkatan;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KeberangkatanController extends InfyOmBaseController
{
    /** @var  KeberangkatanRepository */
    private $keberangkatanRepository;

    public function __construct(KeberangkatanRepository $keberangkatanRepo)
    {
        $this->keberangkatanRepository = $keberangkatanRepo;
    }

    /**
     * Display a listing of the Keberangkatan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->keberangkatanRepository->pushCriteria(new RequestCriteria($request));
        $keberangkatans = $this->keberangkatanRepository->all();
        return view('admin.keberangkatans.index')
            ->with('keberangkatans', $keberangkatans);
    }

    /**
     * Show the form for creating a new Keberangkatan.
     *
     * @return Response
     */
    public function create()
    {
        $getuser = DB::table('users')->get();
        $getlayanan = DB::table('layanans')->get();
        $gethotel = DB::table('hotels')->get();

        return view('admin.keberangkatans.create', compact('getuser', 'getlayanan', 'gethotel'));
    }

    /**
     * Store a newly created Keberangkatan in storage.
     *
     * @param CreateKeberangkatanRequest $request
     *
     * @return Response
     */
    public function store(CreateKeberangkatanRequest $request)
    {
        $input = $request->all();

        $keberangkatan = $this->keberangkatanRepository->create($input);

        Flash::success('Keberangkatan saved successfully.');

        return redirect(route('admin.keberangkatans.index'));
    }

    /**
     * Display the specified Keberangkatan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $keberangkatan = $this->keberangkatanRepository->findWithoutFail($id);

        if (empty($keberangkatan)) {
            Flash::error('Keberangkatan not found');

            return redirect(route('keberangkatans.index'));
        }

        return view('admin.keberangkatans.show')->with('keberangkatan', $keberangkatan);
    }

    /**
     * Show the form for editing the specified Keberangkatan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $keberangkatan = $this->keberangkatanRepository->findWithoutFail($id);

        if (empty($keberangkatan)) {
            Flash::error('Keberangkatan not found');

            return redirect(route('keberangkatans.index'));
        }

        return view('admin.keberangkatans.edit')->with('keberangkatan', $keberangkatan);
    }

    /**
     * Update the specified Keberangkatan in storage.
     *
     * @param  int              $id
     * @param UpdateKeberangkatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKeberangkatanRequest $request)
    {
        $keberangkatan = $this->keberangkatanRepository->findWithoutFail($id);



        if (empty($keberangkatan)) {
            Flash::error('Keberangkatan not found');

            return redirect(route('keberangkatans.index'));
        }

        $keberangkatan = $this->keberangkatanRepository->update($request->all(), $id);

        Flash::success('Keberangkatan updated successfully.');

        return redirect(route('admin.keberangkatans.index'));
    }

    /**
     * Remove the specified Keberangkatan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.keberangkatans.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Keberangkatan::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.keberangkatans.index'))->with('success', Lang::get('message.success.delete'));

       }

}
