<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateProvinsiRequest;
use App\Http\Requests\UpdateProvinsiRequest;
use App\Repositories\ProvinsiRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Provinsi;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProvinsiController extends InfyOmBaseController
{
    /** @var  ProvinsiRepository */
    private $provinsiRepository;

    public function __construct(ProvinsiRepository $provinsiRepo)
    {
        $this->provinsiRepository = $provinsiRepo;
    }

    /**
     * Display a listing of the Provinsi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->provinsiRepository->pushCriteria(new RequestCriteria($request));
        $provinsis = $this->provinsiRepository->all();
        return view('admin.provinsis.index')
            ->with('provinsis', $provinsis);
    }

    /**
     * Show the form for creating a new Provinsi.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.provinsis.create');
    }

    /**
     * Store a newly created Provinsi in storage.
     *
     * @param CreateProvinsiRequest $request
     *
     * @return Response
     */
    public function store(CreateProvinsiRequest $request)
    {
        $input = $request->all();

        $provinsi = $this->provinsiRepository->create($input);

        Flash::success('Provinsi saved successfully.');

        return redirect(route('admin.provinsis.index'));
    }

    /**
     * Display the specified Provinsi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $provinsi = $this->provinsiRepository->findWithoutFail($id);

        if (empty($provinsi)) {
            Flash::error('Provinsi not found');

            return redirect(route('provinsis.index'));
        }

        return view('admin.provinsis.show')->with('provinsi', $provinsi);
    }

    /**
     * Show the form for editing the specified Provinsi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $provinsi = $this->provinsiRepository->findWithoutFail($id);

        if (empty($provinsi)) {
            Flash::error('Provinsi not found');

            return redirect(route('provinsis.index'));
        }

        return view('admin.provinsis.edit')->with('provinsi', $provinsi);
    }

    /**
     * Update the specified Provinsi in storage.
     *
     * @param  int              $id
     * @param UpdateProvinsiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProvinsiRequest $request)
    {
        $provinsi = $this->provinsiRepository->findWithoutFail($id);

        

        if (empty($provinsi)) {
            Flash::error('Provinsi not found');

            return redirect(route('provinsis.index'));
        }

        $provinsi = $this->provinsiRepository->update($request->all(), $id);

        Flash::success('Provinsi updated successfully.');

        return redirect(route('admin.provinsis.index'));
    }

    /**
     * Remove the specified Provinsi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.provinsis.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Provinsi::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.provinsis.index'))->with('success', Lang::get('message.success.delete'));

       }

}
