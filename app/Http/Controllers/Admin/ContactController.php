<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('id', 'desc')->paginate(10)->setPath('contacts');
        return view('admin/contact/index', compact(['data']));
    }

    public function destroy($id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Delete Successfully');
    }
}
