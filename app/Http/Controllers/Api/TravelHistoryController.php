<?php

namespace App\Http\Controllers\Api;

use App\TravelHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TravelHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TravelHistory $travelHistory)
    {
	    $data = $travelHistory->all();

	    return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TravelHistory $travelHistory)
    {
        $data = $travelHistory->create($request->all());

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TravelHistory  $travelHistory
     * @return \Illuminate\Http\Response
     */
    public function show(TravelHistory $travelHistory)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TravelHistory  $travelHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TravelHistory $travelHistory)
    {
	    $data = $travelHistory->update($request->all());

	    return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TravelHistory  $travelHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravelHistory $travelHistory)
    {
        $travelHistory->delete();

        return response()->json(['delete' => true], 204);
    }
}
