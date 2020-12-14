<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChildrenCollection;
use App\Models\Child;
use App\Models\Support;
use App\Models\User;
use App\Rules\ChildrenSelected;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChildrenController extends Controller
{
    public function childrenList()
    {
        return new ChildrenCollection(Child::orderBy("priority", "ASC")->paginate(12));
    }

    public function storeSupportList(Request $request)
    {

        $this->validate(
            $request,
            [
                "selected_children" =>[new ChildrenSelected],
                'supporter_name' => "required|max:255",
                "supporter_mobile" => "required|iran_mobile",
            ]

        );
        $children_list = json_decode($request->selected_children);
        $support = new Support();
        $support->selected_children_count = count($children_list);
        $support->supporter_name = $request->supporter_name;
        $support->supporter_mobile = $request->supporter_mobile;
        $support->supporter_address = $request->supporter_address;
        $support->supporter_tell = $request->supporter_tell;
        $support->supporter_national_code = $request->supporter_national_code;
        $support->how_do_you_meet_us = $request->how_do_you_meet_us;
        $support->affiliate_id = User::getAffiliate();
        $support->uuid = Str::random(16);
        $support->save();

        $support->children()->attach($children_list);

        return response()->json([
            "success" => true,
            "uuid" => $support->uuid,
            "support_url" => $support->url
        ]);


    }
}
