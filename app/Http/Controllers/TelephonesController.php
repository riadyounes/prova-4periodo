<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Contact, Telephone, TelephoneType};
use Illuminate\Support\Facades\Auth;

class TelephonesController extends Controller
{
    public function index(Contact $contact)
    {
        $contacts = Contact::with('telephones')->whereId($contact->id)->where('user_id', Auth::id())->first();

        if (!$contacts) {
            return redirect(404);
        }

        return view('telephone.home', compact('contacts'));
    }
    public function create(Contact $contact)
    {
        $types_telephones = TelephoneType::all();

        return view('telephone.create', compact(['types_telephones', 'contact']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'telephone' => 'required',
            'telephone_type_id' => 'required',
            'contact_id'        => 'required',
        ]);

        Telephone::create($request->all());

        return redirect()->route('contact.telephone', ['contact' => $request->contact_id])
            ->with('success','Telefone cadastrado com sucesso.');
    }

}
