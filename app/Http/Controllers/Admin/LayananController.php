<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateLayananRequest;
use App\Http\Requests\UpdateLayananRequest;
use App\Repositories\LayananRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Layanan;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LayananController extends InfyOmBaseController
{
    /** @var  LayananRepository */
    private $layananRepository;

    public function __construct(LayananRepository $layananRepo)
    {
        $this->layananRepository = $layananRepo;
    }

    /**
     * Display a listing of the Layanan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->layananRepository->pushCriteria(new RequestCriteria($request));
        $layanans = $this->layananRepository->all();
        return view('admin.layanans.index')
            ->with('layanans', $layanans);
    }

    /**
     * Show the form for creating a new Layanan.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.layanans.create');
    }

    /**
     * Store a newly created Layanan in storage.
     *
     * @param CreateLayananRequest $request
     *
     * @return Response
     */
    public function store(CreateLayananRequest $request)
    {
        $input = $request->all();

        $layanan = $this->layananRepository->create($input);

        Flash::success('Layanan saved successfully.');

        return redirect(route('admin.layanans.index'));
    }

    /**
     * Display the specified Layanan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $layanan = $this->layananRepository->findWithoutFail($id);

        if (empty($layanan)) {
            Flash::error('Layanan not found');

            return redirect(route('layanans.index'));
        }

        return view('admin.layanans.show')->with('layanan', $layanan);
    }

    /**
     * Show the form for editing the specified Layanan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $layanan = $this->layananRepository->findWithoutFail($id);

        if (empty($layanan)) {
            Flash::error('Layanan not found');

            return redirect(route('layanans.index'));
        }

        return view('admin.layanans.edit')->with('layanan', $layanan);
    }

    /**
     * Update the specified Layanan in storage.
     *
     * @param  int              $id
     * @param UpdateLayananRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLayananRequest $request)
    {
        $layanan = $this->layananRepository->findWithoutFail($id);

        

        if (empty($layanan)) {
            Flash::error('Layanan not found');

            return redirect(route('layanans.index'));
        }

        $layanan = $this->layananRepository->update($request->all(), $id);

        Flash::success('Layanan updated successfully.');

        return redirect(route('admin.layanans.index'));
    }

    /**
     * Remove the specified Layanan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.layanans.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Layanan::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.layanans.index'))->with('success', Lang::get('message.success.delete'));

       }

}
