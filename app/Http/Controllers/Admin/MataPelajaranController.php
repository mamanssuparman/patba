<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'             => 'PATBA | Mata Pelajaran',
            'mainbreadcrumb'    => 'Mata Pelajaran',
            'breadcrumb1'       => 'Mata Pelajaran',
            'breadcrumb2'       => 'Index'
        ];
        return view('pages.admin.matapelajaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'             => 'PATBA | Mata Pelajaran',
            'mainbreadcrumb'    => 'Mata Pelajaran',
            'breadcrumb1'       => 'Mata Pelajaran',
            'breadcrumb2'       => 'Create'
        ];
        return view('pages.admin.matapelajaran.create', $data);
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
            'nama_pelajaran'            => 'required|unique:pelajarans,nama_pelajaran',
            'description'               => 'required'
        ]);
        Pelajaran::create($validasidata);
        return redirect('/admin/matapelajaran')->with('success','Data Pelajaran berhasi di simpan');
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
        //
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
