<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animalList = Animal::with('owner', 'image')

            ->limit(50)
            ->get();

        return view('animals.index', compact('animalList'));
    }

    public function detail($id)
    {
        $detail = Animal::where('id', $id)
            ->first();
        return view('animals.detail', compact('detail'));
    }
}
