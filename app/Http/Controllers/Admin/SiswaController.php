<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'             => 'PATBA - Data Siswa',
            'mainbreadcrumb'    => 'Data Siswa',
            'breadcrumb1'       => 'Siswa',
            'breadcrumb2'       => 'Index',
            'kelas' => Kelas::all()
        ];
        return view('pages.admin.siswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'             => 'PATBA - Data Siswa',
            'mainbreadcrumb'    => 'Data Siswa',
            'breadcrumb1'       => 'Siswa',
            'breadcrumb2'       => 'Create',
            'datasiswa'         => User::all(),
            'datakelas'         => Kelas::all()
        ];
        return view('pages.admin.siswa.create', $data);
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
            'name'      => 'required',
            'kelas_id'  => 'required',
            'email'     => 'required',
            'password'  => 'required'
        ]);
        $validasidata['password'] = bcrypt($validasidata['password']);
        User::create($validasidata);
        return redirect('/admin/siswa')->with('success', 'Data Siswa berhasil disimpan!');
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
            'title'             => 'PATBA - Data Siswa',
            'mainbreadcrumb'    => 'Data Siswa',
            'breadcrumb1'       => 'Siswa',
            'breadcrumb2'       => 'Edit',
            'dataSiswa'         => User::where('id', $id)->first(),
            'datakelas'         => Kelas::all()

        ];
        return view('pages.admin.siswa.edit', $data);
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
        $editdata = [
            'name'         => $request->name,
            'kelas_id'     => $request->kelas_id,
            'email'        => $request->email,
        ];
        User::where('id', $id)->update($editdata);
        return redirect('/admin/siswa')->with('informasi', 'Data siswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        // baris perintah delete tabel relasi
        return redirect('/admin/siswa')->with('success', 'Data Siswa berhasil dihapus!');
    }

    public function resetpassword(Request $request) {
        $idsiswa = $request->input('idsiswa');
        $passwordreset = bcrypt('123456');
        $update = [
            'password' => $passwordreset
        ];
        User::where('id', $idsiswa)->update($update);
        return redirect('/admin/siswa')->with('success', 'Password Siswa berhasil di reset!');
    }
}
