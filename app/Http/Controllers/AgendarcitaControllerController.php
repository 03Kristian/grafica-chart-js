<?php

namespace App\Http\Controllers;

use App\Models\Agendarcita;
use Illuminate\Http\Request;

class AgendarcitaControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportes = Agendarcita::all();
        
        $data =[];

        foreach ($reportes as $reporte) {
            $data['label'][] = $reporte->mes;
            $data['data'][] = $reporte->cantidad;
        }
        $data['data'] = json_encode($data);
        
        return view('pages.chartz',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgendarcitaController  $agendarcitaController
     * @return \Illuminate\Http\Response
     */
    public function show(AgendarcitaController $agendarcitaController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgendarcitaController  $agendarcitaController
     * @return \Illuminate\Http\Response
     */
    public function edit(AgendarcitaController $agendarcitaController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgendarcitaController  $agendarcitaController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgendarcitaController $agendarcitaController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgendarcitaController  $agendarcitaController
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgendarcitaController $agendarcitaController)
    {
        //
    }
}
