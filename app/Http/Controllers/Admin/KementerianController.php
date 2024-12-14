<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateKementerianRequest;
use App\Http\Requests\UpdateKementerianRequest;
use App\Repositories\KementerianRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Kementerian;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KementerianController extends InfyOmBaseController
{
    /** @var  KementerianRepository */
    private $kementerianRepository;

    public function __construct(KementerianRepository $kementerianRepo)
    {
        $this->kementerianRepository = $kementerianRepo;
    }

    /**
     * Display a listing of the Kementerian.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->kementerianRepository->pushCriteria(new RequestCriteria($request));
        $kementerians = $this->kementerianRepository->all();
        return view('admin.kementerians.index')
            ->with('kementerians', $kementerians);
    }

    /**
     * Show the form for creating a new Kementerian.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.kementerians.create');
    }

    /**
     * Store a newly created Kementerian in storage.
     *
     * @param CreateKementerianRequest $request
     *
     * @return Response
     */
    public function store(CreateKementerianRequest $request)
    {
        $input = $request->all();

        $kementerian = $this->kementerianRepository->create($input);

        Flash::success('Kementerian saved successfully.');

        return redirect(route('admin.kementerians.index'));
    }

    /**
     * Display the specified Kementerian.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kementerian = $this->kementerianRepository->findWithoutFail($id);

        if (empty($kementerian)) {
            Flash::error('Kementerian not found');

            return redirect(route('kementerians.index'));
        }

        return view('admin.kementerians.show')->with('kementerian', $kementerian);
    }

    /**
     * Show the form for editing the specified Kementerian.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kementerian = $this->kementerianRepository->findWithoutFail($id);

        if (empty($kementerian)) {
            Flash::error('Kementerian not found');

            return redirect(route('kementerians.index'));
        }

        return view('admin.kementerians.edit')->with('kementerian', $kementerian);
    }

    /**
     * Update the specified Kementerian in storage.
     *
     * @param  int              $id
     * @param UpdateKementerianRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKementerianRequest $request)
    {
        $kementerian = $this->kementerianRepository->findWithoutFail($id);

        

        if (empty($kementerian)) {
            Flash::error('Kementerian not found');

            return redirect(route('kementerians.index'));
        }

        $kementerian = $this->kementerianRepository->update($request->all(), $id);

        Flash::success('Kementerian updated successfully.');

        return redirect(route('admin.kementerians.index'));
    }

    /**
     * Remove the specified Kementerian from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.kementerians.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Kementerian::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.kementerians.index'))->with('success', Lang::get('message.success.delete'));

       }

}
