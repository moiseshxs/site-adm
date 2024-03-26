<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Adm;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function index()
    {
        $adms = Adm::all();
        return view('admin.admin', ['adms' => $adms]);
    }
    public function create() 
    {
        return view('admin.registrarAdmin');
    }
    public function store(Request $request) 
    {
       Adm::create([
        'email'=> $request->email,
        'senha'=> Hash::make($request->senha),
       ]);

       return redirect('/admin');
    }
}
