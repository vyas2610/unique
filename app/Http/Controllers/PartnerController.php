<?php

namespace App\Http\Controllers;

use App\DataTables\PartnerDataTable;
use App\Models\cr;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PartnerDataTable $dataTable)
    {
        request()->flush();
        return $dataTable->render('modules.partner.index');
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
        $request->validate([

            'image' => 'required'
        ]);

        $partner = new cr();
        $partner->image = $request->image;
        $partner->save();

        return redirect()->back()->with('success', 'Success! New entry has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(cr $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, cr $partner)
    {
        $request->replace($partner->toArray());
        $request->flash();

        return view('modules.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $partner)
    {
        $request->validate([

            'image' => 'required',
        ]);

        $partner->image = $request->image;
        $partner->save();

        return redirect(route('admin.partner.index'))->with('success', 'Success! A entry has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $partner)
    {
        //
        $partner->delete();

        return redirect()->back()->with("success", "Success! Data has been deleted.");
    }
}
