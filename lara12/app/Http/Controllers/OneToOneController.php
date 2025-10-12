<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Phone;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function index()
    {
        $phone = Category::all();
        return $phone;
    }


}
