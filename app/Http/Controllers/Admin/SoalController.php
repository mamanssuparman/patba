<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $data = [
            'title'             => 'PATBA | Soal',
            'mainbreadcrumb'    => 'Soal',
            'breadcrumb1'       => 'Soal',
            'breadcrumb2'       => 'Index',
            'datamapel'         => Pelajaran::all()
        ];
        return view('pages.admin.soal.index', $data);
    }
}
