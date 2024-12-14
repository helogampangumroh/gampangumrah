<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateJamaahRequest;
use App\Http\Requests\UpdateJamaahRequest;
use App\Repositories\JamaahRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Jamaah;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JamaahController extends InfyOmBaseController
{
    /** @var  JamaahRepository */
    private $jamaahRepository;

    public function __construct(JamaahRepository $jamaahRepo)
    {
        $this->jamaahRepository = $jamaahRepo;
    }

    /**
     * Display a listing of the Jamaah.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->jamaahRepository->pushCriteria(new RequestCriteria($request));
        $jamaahs = $this->jamaahRepository->all();
        return view('admin.jamaahs.index')
            ->with('jamaahs', $jamaahs);
    }

    /**
     * Show the form for creating a new Jamaah.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.jamaahs.create');
    }

    /**
     * Store a newly created Jamaah in storage.
     *
     * @param CreateJamaahRequest $request
     *
     * @return Response
     */
    public function store(CreateJamaahRequest $request)
    {
        $input = $request->all();

        $jamaah = $this->jamaahRepository->create($input);

        Flash::success('Jamaah saved successfully.');

        return redirect(route('admin.jamaahs.index'));
    }

    /**
     * Display the specified Jamaah.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jamaah = $this->jamaahRepository->findWithoutFail($id);

        if (empty($jamaah)) {
            Flash::error('Jamaah not found');

            return redirect(route('jamaahs.index'));
        }

        return view('admin.jamaahs.show')->with('jamaah', $jamaah);
    }

    /**
     * Show the form for editing the specified Jamaah.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jamaah = $this->jamaahRepository->findWithoutFail($id);

        if (empty($jamaah)) {
            Flash::error('Jamaah not found');

            return redirect(route('jamaahs.index'));
        }

        return view('admin.jamaahs.edit')->with('jamaah', $jamaah);
    }

    /**
     * Update the specified Jamaah in storage.
     *
     * @param  int              $id
     * @param UpdateJamaahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJamaahRequest $request)
    {
        $jamaah = $this->jamaahRepository->findWithoutFail($id);

        

        if (empty($jamaah)) {
            Flash::error('Jamaah not found');

            return redirect(route('jamaahs.index'));
        }

        $jamaah = $this->jamaahRepository->update($request->all(), $id);

        Flash::success('Jamaah updated successfully.');

        return redirect(route('admin.jamaahs.index'));
    }

    /**
     * Remove the specified Jamaah from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.jamaahs.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Jamaah::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.jamaahs.index'))->with('success', Lang::get('message.success.delete'));

       }

}
