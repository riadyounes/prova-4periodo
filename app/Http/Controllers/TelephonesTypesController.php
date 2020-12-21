<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Contact, Telephone, TelephoneType};

class TelephonesTypesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Contact $contact)
    {
        return view('telephone.type', compact('contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        TelephoneType::create($request->all());

        return redirect()->route('contact.telephone', ['contact' => $request->contact_id])
            ->with('success','telefone cadastrado');
    }
}
