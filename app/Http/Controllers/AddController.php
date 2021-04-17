<?php

namespace App\Http\Controllers;

use App\police;
use App\company;
use App\intersection;
use Illuminate\Http\Request;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // police(警察署)取得
        $polices = Police::all();
        // company(業者)取得
        $companys = Company::all();
        // intersection(交差点)取得
        $intersections = Intersection::all()->sortByDesc('id');

        return view('add.index',[
            'polices' => $polices,
            'companys' => $companys,
            'intersections' => $intersections,
        ]);
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
        $intersection = new Intersection;
        $intersection->police_id = $request->police_id;
        $intersection->ctl_no = $request->ctl_no;
        $intersection->intersection = $request->intersection;
        $intersection->address = $request->address;
        $intersection->co_id = $request->co_id;
        $intersection->save();

        return redirect()->back();
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
