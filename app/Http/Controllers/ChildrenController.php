<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChildrenCollection;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function childrenList()
    {
        return new ChildrenCollection(Child::orderBy("priority","ASC")->paginate(24));
    }
}
