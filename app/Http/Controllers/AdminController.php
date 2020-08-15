<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ADMember;

class AdminController extends Controller
{
    public function index()
    {
        $dmember = DB::table('tmember')->get();

        return view('admin/index', ['member' => $dmember]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'memberNama'=>'required',
            'memberJabatan' => 'required',
            'memberAlamat'=>'required',
            'memberLevel' => 'required',
        ]);
 
        DB::table('tmember')->insert([
            'memberNama' => $request -> memberNama,
            'memberJabatan' => $request-> memberJabatan,
            'memberAlamat' => $request-> memberAlamat,
            'memberLevel' => $request-> memberLevel,
        ]);

        return redirect()->route('admin.index')
                         ->with('success','Data berhasil ditambahkan');
    }
    
}
