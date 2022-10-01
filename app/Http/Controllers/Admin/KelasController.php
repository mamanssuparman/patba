<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'             => 'PATBA - Data Kelas',
            'mainbreadcrumb'    => 'Data Kelas',
            'breadcrumb1'       => 'Kelas',
            'breadcrumb2'       => 'Index'
        ];
        return view('pages.admin.kelas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'             => 'PATBA - Data Kelas',
            'mainbreadcrumb'    => 'Data Kelas',
            'breadcrumb1'       => 'Kelas',
            'breadcrumb2'       => 'Create'
        ];
        return view('pages.admin.kelas.create', $data); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasidata = $request->validate([
            'nama_kelas' => 'required|unique:kelas,nama_kelas'
        ]);
        Kelas::create($validasidata);
        return redirect('/admin/kelas')->with('success', 'Data Kelas berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title'             => 'PATBA - Data Kelas',
            'mainbreadcrumb'    => 'Data Kelas',
            'breadcrumb1'       => 'Kelas',
            'breadcrumb2'       => 'Edit',
            'dataKelas'         => Kelas::where('id', $id)->first()
        ];
        return view('pages.admin.kelas.create', $data); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
