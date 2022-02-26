<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view("form_page");
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // dd("hore");

        $request->validate([
            'name' => "required",
            'email' => "required|email",
            'address_home' => "required",
            'address_kosan' => "required",
            'number' => "required|numeric|between:2.5,99.99",
            'image' => "required|image|mimes:jpg,png,jpeg|max:2056",
        ]);

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs("thumbnail", $file_name);

        Student::create([
            "name" => $request->name,
            "email" => $request->email,
            "address_home" => $request->address_home,
            "address_kosan" => $request->address_kosan,
            "number" => $request->number,
            "image" => $image,
        ]);
        return redirect()->route("index_page")->with("success", "The data has been added!");
    }
}
