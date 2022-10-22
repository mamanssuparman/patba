<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Daftar_ujian;
use App\Models\Kelas;
use App\Models\Soal;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $hitungsiswa = Kelas::count();
        $hitungsoal = Soal::count();
        $hitungtes = Daftar_ujian::count();

        return view('pages.admin.dashboard.index',[
            'title'  => 'PATBA | Dashboard',
            'hasilsiswa' => $hitungsiswa,
            'hasilsoal' => $hitungsoal,
            'hasiltes' => $hitungtes,
            'mainbreadcrumb'    => 'Dashboard',
            'breadcrumb1'       => 'Dashboard',
            'breadcrumb2'       => 'Index'
        ]);
    }
}
