<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\Modulos\Maintenance\MaintenanceRepositoryInterface;
use App\UseCases\Contracts\Modulos\Maintenance\CreateMaintenanceInterface;
use App\UseCases\Contracts\Modulos\Maintenance\GetDataIndexMaintenanceInterface;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    protected $getDataIndexMaintenance;

    protected $createMaintenance;

    protected $maintenanceRepository;

    public function __construct(
        GetDataIndexMaintenanceInterface $getDataIndexMaintenanceInterface,
        CreateMaintenanceInterface $createMaintenanceInterface,
        MaintenanceRepositoryInterface $maintenanceRepositoryInterface
    ) {
        $this->getDataIndexMaintenance = $getDataIndexMaintenanceInterface;
        $this->createMaintenance = $createMaintenanceInterface;
        $this->maintenanceRepository = $maintenanceRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->getDataIndexMaintenance->handle();
        $mantenimientos = $this->maintenanceRepository->getAll();
        return view('maintenance.index', compact('data', 'mantenimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function showDatatable()
    {
        return datatables()->collection($this->maintenanceRepository->getAllWithForeign())->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return  $this->createMaintenance->handle($request->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->maintenanceRepository->delete($id);

        return [
            'alert' => true,
            'icon' => 'warning',
            'title' => 'Se elimino el registro correctamente',
            'limpForm' => ['limpiar' => false],
            'load' => true
        ];
    }
}
