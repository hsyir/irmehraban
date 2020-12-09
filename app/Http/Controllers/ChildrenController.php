<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChildrenCollection;
use App\Models\Child;
use App\Models\Support;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function childrenList()
    {
        return new ChildrenCollection(Child::orderBy("priority", "ASC")->paginate(24));
    }

    public function storeSupportList(Request $request)
    {
        $data = [
            "name" => $request->name,
            "mobile" => $request->mobile,
            "children_list" => json_decode($request->children_list),
        ];

//        Support::created($data);

        return response()->json([
            "success" => true
        ]);


    }
}
