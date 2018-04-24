<?php

namespace App\Http\Controllers;

use App\mass_contact;
use Illuminate\Http\Request;

class mass_contact_controller extends Controller
{
    
    public function index()
    {

        $emails = mass_contact::latest()->get();

        return view('emails.emails', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('emails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validation
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        mass_contact::create(

           request(['name', 'email', 'message'])
          
        );

        return view('/thanks');
    }

    /**
     * Display the specified resource.

     */
    public function show(mass_contact $email)
    {

        return view('emails.show', compact('email'));
    }

    /**
     * Show the form for editing the specified resource.

     */
    public function edit(mass_contact $email)
    {
        return view('emails.edit', compact('email'));
    }

    /**
     * Update the specified resource in storage.

     */
    public function update(Request $request, mass_contact $email)
    {
        // $emailInfo = DB::table('mass_contacts')
        //     ->where('id', $email->id)
        //     ->update(['name' => $email->name, 'email' => $email->email, 'message' => $email->message]);

        // return redirect('/emails');
    }

    /**
     * Remove the specified resource from storage.

     */
    public function destroy(mass_contact $email)
    {
        // $emailInfo = DB::table('mass_contacts')->delete($email->id);

        // return redirect('/emails');
    }
}
