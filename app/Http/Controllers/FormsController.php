<?php

namespace App\Http\Controllers;

class FormsController extends Controller
{
    public function createPermanent()
    {
        return view('forms.permanent');
    }

    public function storePermanent()
    {
    }

    public function createKennel()
    {
        return view('forms.kennel');
    }

    public function storeKennel()
    {
    }

    public function createLitter()
    {
        return view('forms.litter');
    }

    public function storeLitter()
    {
    }
}
