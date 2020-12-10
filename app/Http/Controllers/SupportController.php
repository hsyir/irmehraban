<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function show($uuid)
    {
        $support = Support::whereUuid($uuid)->first();
        return view("front.support.show");
    }
}
