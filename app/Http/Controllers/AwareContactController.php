<?php

namespace App\Http\Controllers;

use App\Models\AwareContact;
use Illuminate\Http\Request;

class AwareContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aware_contact = AwareContact::orderBy('id', 'asc')->get();

        $status = "OK";
        $status_code = "200";
        $message = "Berhasil mendapatkan data";
        return response()->json(compact('status', 'status_code', 'message', 'aware_contact'), 200);
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
     * @param  \App\Models\AwareContact  $awareContact
     * @return \Illuminate\Http\Response
     */
    public function show(AwareContact $awareContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AwareContact  $awareContact
     * @return \Illuminate\Http\Response
     */
    public function edit(AwareContact $awareContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AwareContact  $awareContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AwareContact $awareContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AwareContact  $awareContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(AwareContact $awareContact)
    {
        //
    }
}
