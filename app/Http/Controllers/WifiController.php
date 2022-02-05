<?php

namespace App\Http\Controllers;

use App\Models\Wifi;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wifi = Wifi::orderBy('id', 'asc')->get();

        $status = "OK";
        $status_code = "200";
        $message = "Berhasil mendapatkan data";
        return response()->json(compact('status', 'status_code', 'message', 'wifi'), 200);
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
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function show(Wifi $wifi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function edit(Wifi $wifi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wifi $wifi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wifi $wifi)
    {
        //
    }
}
