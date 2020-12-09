<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $children = Child::paginate(50);
        return view("back.children.all",compact("children"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $child=new Child();
        return view("back.children.create",compact("child"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $child = $request->isMethod("post") ? new Child : Child::find($request->child_id);

        $child->fill($request->toArray());
        $child->save();

        return self::redirectWithSuccess(route("admin.children.index"),"انجام شد");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Child $child
     * @return \Illuminate\Http\Response
     */
    public function show(Child $child)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Child $child
     * @return \Illuminate\Http\Response
     */
    public function edit(Child $child)
    {
        return view("back.children.edit",compact("child"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Child $child
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Child $child)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Child $child
     * @return \Illuminate\Http\Response
     */
    public function destroy(Child $child)
    {
        //
    }
}

/*
[‎12/‎9/‎2020 6:43 PM] هادی اسماعیلی:
001110171
اعتبار مصارف هدفمندی یارانه ها
001110128
[‎12/‎9/‎2020 6:44 PM] هادی اسماعیلی:
اعتبار دولتی انتقالی سنواتی*/
