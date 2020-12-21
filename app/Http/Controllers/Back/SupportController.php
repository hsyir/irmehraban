<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){
        $supports = Support::orderBy("created_at","DESC")->paginate(100);
        return view("back.supports.all",compact("supports"));
    }

    public function show(Support $support){
        return view("back.supports.show",compact("support"));
    }
}
