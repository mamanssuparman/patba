<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class DataJs extends Controller
{
    public function dataPelajaran(Request $request)
    {
        $orderBy = 'pelajarans.nama_pelajaran';
        switch ($request->input('order.0.column')) {
            case '0':
                $orderBy = 'pelajarans.id';
                break;
            case '1':
                $orderBy = 'pelajarans.nama_pelajaran';
                break;
        }
        $data = Pelajaran::select([
            'pelajarans.*'
        ]);
        if ($request->input('search.value') != null) {
            $data = $data->where(function ($q) use ($request) {
                $q->whereRaw('LOWER(nama_pelajaran) like ?', ['%' . strtolower($request->input('search.value')) . '%']);
            });
        }
        $recordsFiltered = $data->get()->count();
        if ($request->input('length') != -1) $data = $data->skip($request->input('start'))->take($request->input('length'));
        $data = $data->orderBy($orderBy, $request->input('order.0.dir'))->get();
        $recordsTotal = $data->count();
        return response()->json([
            'draw'              => $request->input('draw'),
            'recordsTotal'      => $recordsTotal,
            'recordsFiltered'   => $recordsFiltered,
            'data'              => $data
        ]);
    }

    public function dataKelas(Request $request)
    {
        $orderBy = 'kelas.nama_kelas';
        switch ($request->input('order.0.column')) {
            case '0':
                $orderBy = 'kelas.id';
                break;
            case '1':
                $orderBy = 'kelas.nama_kelas';
                break;
        }
        $data = Kelas::select([
            'kelas.*'
        ]);
        if ($request->input('search.value') != null) {
            $data = $data->where(function ($q) use ($request) {
                $q->whereRaw('LOWER(nama_kelas) like ?', ['%' . strtolower($request->input('search.value')) . '%']);
            });
        }
        $recordsFiltered = $data->get()->count();
        if ($request->input('length') != -1) $data = $data->skip($request->input('start'))->take($request->input('length'));
        $data = $data->orderBy($orderBy, $request->input('order.0.dir'))->get();
        $recordsTotal = $data->count();
        return response()->json([
            'draw'              => $request->input('draw'),
            'recordsTotal'      => $recordsTotal,
            'recordsFiltered'   => $recordsFiltered,
            'data'              => $data
        ]);
    }
}
