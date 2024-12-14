<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateKecamatanRequest;
use App\Http\Requests\UpdateKecamatanRequest;
use App\Repositories\KecamatanRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Kecamatan;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KecamatanController extends InfyOmBaseController
{
    /** @var  KecamatanRepository */
    private $kecamatanRepository;

    public function __construct(KecamatanRepository $kecamatanRepo)
    {
        $this->kecamatanRepository = $kecamatanRepo;
    }

    /**
     * Display a listing of the Kecamatan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->kecamatanRepository->pushCriteria(new RequestCriteria($request));
        $kecamatans = $this->kecamatanRepository->all();
        return view('admin.kecamatans.index')
            ->with('kecamatans', $kecamatans);
    }

    /**
     * Show the form for creating a new Kecamatan.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.kecamatans.create');
    }

    /**
     * Store a newly created Kecamatan in storage.
     *
     * @param CreateKecamatanRequest $request
     *
     * @return Response
     */
    public function store(CreateKecamatanRequest $request)
    {
        $input = $request->all();

        $kecamatan = $this->kecamatanRepository->create($input);

        Flash::success('Kecamatan saved successfully.');

        return redirect(route('admin.kecamatans.index'));
    }

    /**
     * Display the specified Kecamatan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kecamatan = $this->kecamatanRepository->findWithoutFail($id);

        if (empty($kecamatan)) {
            Flash::error('Kecamatan not found');

            return redirect(route('kecamatans.index'));
        }

        return view('admin.kecamatans.show')->with('kecamatan', $kecamatan);
    }

    /**
     * Show the form for editing the specified Kecamatan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kecamatan = $this->kecamatanRepository->findWithoutFail($id);

        if (empty($kecamatan)) {
            Flash::error('Kecamatan not found');

            return redirect(route('kecamatans.index'));
        }

        return view('admin.kecamatans.edit')->with('kecamatan', $kecamatan);
    }

    /**
     * Update the specified Kecamatan in storage.
     *
     * @param  int              $id
     * @param UpdateKecamatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKecamatanRequest $request)
    {
        $kecamatan = $this->kecamatanRepository->findWithoutFail($id);

        

        if (empty($kecamatan)) {
            Flash::error('Kecamatan not found');

            return redirect(route('kecamatans.index'));
        }

        $kecamatan = $this->kecamatanRepository->update($request->all(), $id);

        Flash::success('Kecamatan updated successfully.');

        return redirect(route('admin.kecamatans.index'));
    }

    /**
     * Remove the specified Kecamatan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.kecamatans.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Kecamatan::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.kecamatans.index'))->with('success', Lang::get('message.success.delete'));

       }

}
