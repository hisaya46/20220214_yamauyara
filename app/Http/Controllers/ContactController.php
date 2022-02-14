<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $fullname = $request->familyName . '　' . $request->personalName;
        $gender = $request->gender;
        $email = $request->email;
        $postcode = $request->zip11;
        $address = $request->addr11;
        $addressBuilding = $request->addressBuilding;
        $message = $request->message;

        $input_data = [
            'fullname' => $fullname,
            'gender' => $gender,
            'email' => $email,
            'postcode' => $postcode,
            'address' => $address,
            'building_name' => $addressBuilding,
            'opinion' => $message,
        ];


        return view('contacts.confirm', $input_data);
    }

    public function thanks()
    {
        return view('contacts.thanks');
    }

    public function management()
    {
        $items = Contact::Paginate(10);
        return view('contacts.management', ['items' => $items]);
    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Contact::where('fullname', 'LIKE', "%{$request->input}%")->first();
        $item = Contact::where('gender', 'LIKE', "%{$request->input}%")->first();
        $item = Contact::where('email', 'LIKE', "%{$request->input}%")->first();
        $item = Contact::where('created_at', 'LIKE', "%{$request->input}%");
        $param = [
            'item' => $item,
            'input' => $request->input
        ];
        return view('find', $param);
    }
}
