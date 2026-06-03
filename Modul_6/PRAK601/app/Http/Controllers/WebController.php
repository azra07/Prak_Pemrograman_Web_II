<?php
namespace App\Http\Controllers;
use App\Models\Profil;

class WebController extends Controller
{
    public function index()
    {
        $profil = Profil::first(); 
        return view('beranda', compact('profil'));
    }

    public function profil() {
        $data['profil'] = \App\Models\Profil::first();
        $data['pengalamans'] = \App\Models\Pengalaman::all();
        return view('profil', $data);
    }

    public function detail($id) {
        $item = \App\Models\Pengalaman::find($id);
        return view('detail', compact('item'));
    }
}