<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShirtPoroductInfoRequest;
use App\Models\Shirt_Poroduct;
use Illuminate\Http\Request;

class ShirtPoroductController extends Controller
{
    public function Store(ShirtPoroductInfoRequest $shirtPoroductInfoRequest)
    {
        Shirt_Poroduct::create($shirtPoroductInfoRequest->all());

    }

    public function Show()
    {
        return "hello";
    }

    public function Store1(Shirt_Poroduct $shirt_Poroduct)
    {
        dd("Hello");
    }
}
