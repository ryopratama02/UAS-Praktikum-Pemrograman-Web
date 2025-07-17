<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAnak = Anak::count();
        $laki = Anak::where('jenis_kelamin', 'Laki-laki')->count();
        $perempuan = Anak::where('jenis_kelamin', 'Perempuan')->count();

        return view('dashboard', compact('totalAnak', 'laki', 'perempuan'));
    }
}
