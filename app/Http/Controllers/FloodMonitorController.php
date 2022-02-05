<?php

namespace App\Http\Controllers;

use App\Models\FloodMonitor;
use Illuminate\Http\Request;

class FloodMonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flood_monitor = FloodMonitor::orderBy('id', 'asc')->get();

        $status = "OK";
        $status_code = "200";
        $message = "Berhasil mendapatkan data";
        return response()->json(compact('status', 'status_code', 'message', 'flood_monitor'), 200);
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
     * @param  \App\Models\FloodMonitor  $floodMonitor
     * @return \Illuminate\Http\Response
     */
    public function show(FloodMonitor $floodMonitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FloodMonitor  $floodMonitor
     * @return \Illuminate\Http\Response
     */
    public function edit(FloodMonitor $floodMonitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FloodMonitor  $floodMonitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FloodMonitor $floodMonitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FloodMonitor  $floodMonitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(FloodMonitor $floodMonitor)
    {
        //
    }
}
