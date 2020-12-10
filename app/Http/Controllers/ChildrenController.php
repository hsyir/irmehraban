<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChildrenCollection;
use App\Models\Child;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChildrenController extends Controller
{
    public function childrenList()
    {
        return new ChildrenCollection(Child::orderBy("priority", "ASC")->paginate(24));
    }

    public function storeSupportList(Request $request)
    {

        $children_list = json_decode($request->selected_children);

        $support = new Support();
        $support->selected_children = $children_list;
        $support->selected_children_count = count($children_list);
        $support->supporter_name = $request->supporter_name;
        $support->supporter_mobile = $request->supporter_mobile;
        $support->supporter_address = $request->supporter_address;
        $support->supporter_tell = $request->supporter_tell;
        $support->supporter_national_code = $request->supporter_national_code;
        $support->how_do_you_meet_us = $request->how_do_you_meet_us;
        $support->uuid = Str::random(8);
        $support->save();

        return response()->json([
            "success" => true,
            "uuid" => $support->uuid,
            "support_url"=>$support->url
        ]);


    }
}
