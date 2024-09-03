<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function index()
    {
        $contactes = Contact::all();
        return view('super-admin.contact-massage.index',compact('contactes'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        $newMassage = new Contact();
        $newMassage->name = $request->name;
        $newMassage->email = $request->email;
        $newMassage->phone = $request->phone;
        $newMassage->message = $request->message;
        $newMassage->save();

        return redirect()->back()->with('success', 'Message sent successfully!');

    }

    public function contact_massag_show($id)
    {
        $user = Contact::findOrFail($id);
        return view('super-admin.contact-massage.show',compact('user'));
    }




    public function destroy(string $id)
    {
        //
        $contact = Contact::find($id);
        $contact->delete();

    }
}
