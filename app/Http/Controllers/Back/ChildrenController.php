<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(Child::birthday()->toSql())
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
        $child->birth_date_fa_f = $request->birth_date_fa_f;
        $child->fill($request->toArray());
        $child->save();

        $child->tags = $request->tags;

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



    public function getChildren()
    {
        $children = Child::query();

        return DataTables::of($children)

            ->addColumn('child_name_str', function ($row) {
                return "<a href='" . route("admin.children.edit", $row->id) . "'>$row->name</a>";
            })
            ->addColumn('child_national_code', function ($row) {
                return $row->national_code;
            })
            ->addColumn('child_birth_date', function ($row) {
                return $row->birth_date_fa_f;
            })
            ->addColumn('child_priority', function ($row) {
                return $row->priority;
            })
            ->addColumn('child_type_str', function ($row) {
                return $row->type == Child::TYPE_EKRAM ? "اکرام" : "محسنین";
            })

            ->rawColumns(['child_name_str'])
            ->make(true);
    }

}

/*
[‎12/‎9/‎2020 6:43 PM] هادی اسماعیلی:
001110171
اعتبار مصارف هدفمندی یارانه ها
001110128
[‎12/‎9/‎2020 6:44 PM] هادی اسماعیلی:
اعتبار دولتی انتقالی سنواتی*/
