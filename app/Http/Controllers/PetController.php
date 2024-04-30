<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\PetModel;

class PetController extends Controller
{
    public function getPetList() {
        $pets = PetModel::all();
        return view('petList', ['list' => $pets]);
    }

    public function getOnePet($petId) {
        $pet = PetModel::find($petId);
        return view('onePet', [ 'data' => $pet ]);
    }

    public function petForm() {
        return view('petForm');
    }

    public function createPet(Request $request) {
        $pet = PetModel::create([
            'name' => $request->name,
            'age' => $request->age,
            'legs' => $request->legs,
            'type' => $request->type
        ]);
        return redirect('/');
    }
}
