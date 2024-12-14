<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateKelurahanRequest;
use App\Http\Requests\UpdateKelurahanRequest;
use App\Repositories\KelurahanRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Kelurahan;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KelurahanController extends InfyOmBaseController
{
    /** @var  KelurahanRepository */
    private $kelurahanRepository;

    public function __construct(KelurahanRepository $kelurahanRepo)
    {
        $this->kelurahanRepository = $kelurahanRepo;
    }

    /**
     * Display a listing of the Kelurahan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->kelurahanRepository->pushCriteria(new RequestCriteria($request));
        $kelurahans = $this->kelurahanRepository->all();
        return view('admin.kelurahans.index')
            ->with('kelurahans', $kelurahans);
    }

    /**
     * Show the form for creating a new Kelurahan.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.kelurahans.create');
    }

    /**
     * Store a newly created Kelurahan in storage.
     *
     * @param CreateKelurahanRequest $request
     *
     * @return Response
     */
    public function store(CreateKelurahanRequest $request)
    {
        $input = $request->all();

        $kelurahan = $this->kelurahanRepository->create($input);

        Flash::success('Kelurahan saved successfully.');

        return redirect(route('admin.kelurahans.index'));
    }

    /**
     * Display the specified Kelurahan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kelurahan = $this->kelurahanRepository->findWithoutFail($id);

        if (empty($kelurahan)) {
            Flash::error('Kelurahan not found');

            return redirect(route('kelurahans.index'));
        }

        return view('admin.kelurahans.show')->with('kelurahan', $kelurahan);
    }

    /**
     * Show the form for editing the specified Kelurahan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kelurahan = $this->kelurahanRepository->findWithoutFail($id);

        if (empty($kelurahan)) {
            Flash::error('Kelurahan not found');

            return redirect(route('kelurahans.index'));
        }

        return view('admin.kelurahans.edit')->with('kelurahan', $kelurahan);
    }

    /**
     * Update the specified Kelurahan in storage.
     *
     * @param  int              $id
     * @param UpdateKelurahanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKelurahanRequest $request)
    {
        $kelurahan = $this->kelurahanRepository->findWithoutFail($id);

        

        if (empty($kelurahan)) {
            Flash::error('Kelurahan not found');

            return redirect(route('kelurahans.index'));
        }

        $kelurahan = $this->kelurahanRepository->update($request->all(), $id);

        Flash::success('Kelurahan updated successfully.');

        return redirect(route('admin.kelurahans.index'));
    }

    /**
     * Remove the specified Kelurahan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.kelurahans.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Kelurahan::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.kelurahans.index'))->with('success', Lang::get('message.success.delete'));

       }

}
