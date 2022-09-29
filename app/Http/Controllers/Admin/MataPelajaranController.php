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
        return redirect('/admin/matapelajaran')->with('success', 'Data Pelajaran berhasi di simpan');
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
            'title'             => 'PATBA | Mata Pelajaran',
            'mainbreadcrumb'    => 'Mata Pelajaran',
            'breadcrumb1'       => 'Mata Pelajaran',
            'breadcrumb2'       => 'Edit',
            'dataPelajaran'     => Pelajaran::where('id', $id)->first()
        ];
        return view('pages.admin.matapelajaran.edit', $data);
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
        if ($request->nama_pelajaran != $request->nama_pelajaran_old) {
            $validasidata = $request->validate([
                'nama_pelajaran'        => 'required|unique:pelajarans,nama_pelajaran',
                'description'           => 'required'
            ]);
            Pelajaran::where('id', $id)->update($validasidata);
            return redirect('/admin/matapelajaran')->with('success', 'Data berhasil di perbaharui.');
        } else {
            $validasidataold    = $request->validate([
                'nama_pelajaran'        => 'required',
                'description'           => 'required'
            ]);
            Pelajaran::where('id', $id)->update($validasidataold);
            return redirect('/admin/matapelajaran')->with('success', 'Data berhasil di perbaharui.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelajaran::where('id',$id)->delete();
        // disini nanti perintah untuk menghapus data relasi ke tabel lainnya
        return redirect('/admin/matapelajaran')->with('success', 'Data berhasil di hapus.');
    }
}
