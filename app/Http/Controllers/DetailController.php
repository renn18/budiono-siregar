<?php

namespace App\Http\Controllers;

use App\Http\Requests\Details;
use App\Http\Requests\UpdateDetails;
use App\Models\Details as ModelsDetails;
use App\Models\KapalModel;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = ModelsDetails::paginate(10)->withPath(route('details.index'));
        return view('pages.kapal.rincian.index', ['details' => $details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kapal.rincian.add', ['ships' => KapalModel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Details $request)
    {
        ModelsDetails::create($request->validated());
        return redirect()->route('details.index');
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
    public function edit(ModelsDetails $detail)
    {
        return view('pages.kapal.rincian.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetails $request, ModelsDetails $detail)
    {
        $detail::where('id', $detail->id)->update($request->validated());
        return redirect()->route('details.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsDetails $id)
    {
        //
    }
}
