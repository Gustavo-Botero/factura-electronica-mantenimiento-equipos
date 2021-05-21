<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\Modulos\Reference\ReferenceRepositoryInterface;
use App\Repositories\Contracts\Modulos\TypeDocument\TypeDocumentRepositoryInterface;
use App\Repositories\Contracts\Modulos\TypeMaintenance\TypeMaintenanceRepositoryInterface;
use App\Repositories\Contracts\Modulos\TypeTeam\TypeTeamRepositoryInterface;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    protected $typeDocumentRepository;

    protected $typeTeamRepository;

    protected $referenceRepository;

    protected $typeMaintenanceRepository;

    public function __construct(
        TypeDocumentRepositoryInterface $typeDocumentRepositoryInterface,
        TypeTeamRepositoryInterface $typeTeamRepositoryInterface,
        ReferenceRepositoryInterface $referenceRepositoryInterface,
        TypeMaintenanceRepositoryInterface $typeMaintenanceRepositoryInterface
    ) {
        $this->typeDocumentRepository = $typeDocumentRepositoryInterface;
        $this->typeTeamRepository = $typeTeamRepositoryInterface;
        $this->referenceRepository = $referenceRepositoryInterface;
        $this->typeMaintenanceRepository = $typeMaintenanceRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeDocument = $this->typeDocumentRepository->getAll();
        $typeTeam = $this->typeTeamRepository->getAll();
        $reference = $this->referenceRepository->getAll();
        $typeMaintenance = $this->typeMaintenanceRepository->getAll();
        
        return view('maintenance.index', compact('typeTeam', 'reference', 'typeDocument', 'typeMaintenance'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
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
    public function destroy($id)
    {
        //
    }
}
