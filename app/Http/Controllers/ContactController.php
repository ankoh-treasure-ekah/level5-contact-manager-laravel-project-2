<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = \App\Models\contact::get();
        return view('contacts', ['contacts' => $contacts, 'title' => 'contacts']);
    }

    public function create() {
        return view('addContact', ['title' => 'Create Contact']);
    }

    public function store(Request $request) {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $group = $request->get('group');
        $address = $request->get('address');
        // dd($firstName, $lastName, $email, $phone, $group, $request->json());


        $newContact = new \App\Models\contact([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'group' => $group
        ]);

        $newContact->save();
        return redirect('/contacts');

    }

    public function edit($id) {
        $contact = \App\Models\contact::find($id);
        return view('editContact', ['contact' => $contact, 'title' => 'Edit Contact']);
    }

    public function update(Request $request, $id) {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $group = $request->get('group');
        $address = $request->get('address');

        $contact = \App\Models\contact::find($id);
        $contact->firstName = $firstName;
        $contact->lastName = $lastName;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->address = $address;
        $contact->group = $group;

        $contact->save();
        return redirect('/contacts');
    }

    public function delete($id) {
            $contact = \App\Models\contact::find($id);
            $contact->delete();
            return redirect('/contacts');
    }


    public function search(request $request) {
        $contacts = \App\Models\contact::get();
        $name = $request->get('name');
        $selected = [];

        foreach ($contacts as $contact) {
            if ($contact->firstName == $name) {
                array_push($selected, $contact);
                // $selected->array_push($contact);
            }
        }

        return view('contacts', ['contacts' => $selected]);
    }

}
