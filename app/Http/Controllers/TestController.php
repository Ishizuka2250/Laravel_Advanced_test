<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class TestController extends Controller
{
    public function index() {
        return view('index');
    }
    public function thanks(Request $request) {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }
}
