<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class AnimalController extends Controller
{
    public function create()
    {
        $owner = new Owner();
        return view('owners.owner', compact('owner'));
    }

    public function insert(Request $request)
    {
        //validation
        $this->validate($request, [
            'first_name'=> 'required',
            'surname'=> 'required',
            'email'=> 'required',
        ], [
            'first_name.required'=>'Please enter the name!',
           'surname.required'=>'You are missing surname',
            'email.required'=>'email in incorrect',
            
    ]);


        $owner = new Owner();
        
        $owner->first_name = $request->post('first_name');
        $owner->surname = $request->post('surname');
        $owner->email = $request->post('email');
       $owner->save();

     
        return redirect()->route('owners.detail', $owner->id);

    }

    public function detail($id)
    {
        $owner = Owner::findOrFail($id);
        return view('owners.detail', compact('owner'));
    }

    public function edit($id)
    {
        $owner = Owner::findOrFail($id);
        return view('owners.owner', compact('owner'));
    }

    public function update($id, Request $request)
    {
        
        $this->validate($request, [
            'first_name'=> 'required',
            'surname'=> 'required',
            'email'=> 'required',
        ], [
            'first_name.required'=>'Sorry, first name is necessary!',
        //    'surname.required'=>'',
        //     'email.required'=>'',
            
    ]);


        $owner = Owner::findOrFail($id);
        $owner->first_name = $request->post('first_name');
        $owner->surname = $request->post('surname');
        $owner->email = $request->post('email');
        $owner->save();

        session()->flash('success_message', 'You have successfully updated');

        return redirect()->route('owners.edit', $id);        

    }

    public function delete($id)
    {
        $owner = Owner::findOrFail($id);
        $owner->delete();

        session()->flash('success_message', 'The owner was deleted.');
        return redirect()->route('owners.create');
    }


}

