<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ADMember;
use App\User;

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
        
        /* DB::table('tmember')->insert([
            'memberNama' => $request -> memberNama,
            'memberJabatan' => $request-> memberJabatan,
            'memberAlamat' => $request-> memberAlamat,
            'memberLevel' => $request-> memberLevel,
        ]); */

        ADMember::create($request->all());

        return redirect()->route('admin.index')
                         ->with('success','Data Member berhasil ditambahkan');
    }

    public function show($id)
    {
        $member = ADMember::find($id);
        return view('admin.detail', compact('member'));
    }

    public function edit($id)
    {
        $member = ADMember::find($id);
        return view('admin.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'memberNama'=>'required',
            'memberJabatan' => 'required',
            'memberAlamat'=>'required',
            'memberLevel' => 'required',
        ]);

        $member = ADMember::find($id);
        $member->memberNama = $request->get('memberNama');
        $member->memberJabatan = $request->get('memberJabatan');
        $member->memberAlamat = $request->get('memberAlamat');
        $member->memberLevel = $request->get('memberLevel');
        $member->save();
        return redirect()->route('admin.index')
                         ->with('success', 'Data Member berhasil diupdate');
    }

    public function destroy($id)
    {
        $member = ADMember::find($id);
        $member->delete();
        return redirect()->route('admin.index')
                         ->with('success', 'Data Member berhasil dihapus');
    }
    
}
