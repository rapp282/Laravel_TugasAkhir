<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Keuangan;

use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function home()
    {
        $keuangan = keuangan::all();

        return view('home', ['keuangan'=>$keuangan]);
    }

    public function tambah()
    {
        $cek3 = 0;
        return view('keuangan_tambah', ['cek3'=>$cek3]);
    }

    public function simpan(Request $request)
    {
        $this-> validate($request,[
            'jumlah_dana' => 'required',
            'pengeluaran' => 'required',
            'penghasilan' => 'required'
        ]);

        $cek = $request->input('jumlah_dana');
        $cek2 = $request->input('pengeluaran');

        if ($cek>=$cek2)
        {
            $cek3 = 0;
            keuangan::create([
                'jumlah_dana' => $request->jumlah_dana,
                'pengeluaran' => $request->pengeluaran,
                'penghasilan' => $request->penghasilan
            ]);

            return redirect('/home');
        }
        else
        {
            $cek3 = 1;

            return view('keuangan_tambah',['cek3' => $cek3]);
        }
    }

    public function edit($id)
    {
        $keuangan = keuangan::find($id);
        $cek3 = 0;

        return view('keuangan_edit', compact('keuangan', 'cek3'));
    }

    public function update($id, Request $request)
    {
        $this-> validate($request,[
            'jumlah_dana' => 'required',
            'pengeluaran' => 'required',
            'penghasilan' => 'required'
        ]);

        $cek = $request->input('jumlah_dana');
        $cek2 = $request->input('pengeluaran');

        if ($cek>=$cek2)
        {
            $cek3 = 0;

            $keuangan = keuangan::find($id);
            $keuangan->jumlah_dana = $request->jumlah_dana;
            $keuangan->pengeluaran = $request->pengeluaran;
            $keuangan->penghasilan = $request->penghasilan;
            $keuangan-> save();

            return redirect('/home');
        }
        else
        {
            $keuangan = keuangan::find($id);
            $cek3 = 1;

            return view('keuangan_edit', compact('keuangan', 'cek3'));
        }
    }

    public function hapus($id)
    {
        $keuangan = keuangan::find($id);
        $keuangan-> delete();

        return redirect('/home');
    }

    public function dashboard()
    {
        $jumlah_dana = DB::table('keuangan')->sum('jumlah_dana');
        $pengeluaran = DB::table('keuangan')->sum('pengeluaran');
        $penghasilan = DB::table('keuangan')->sum('penghasilan');
        $row = DB::table('keuangan')->count();

        return view('dashboard', compact('jumlah_dana','pengeluaran','penghasilan','row'));
    }

    public function login(Request $request)
    {
        $user = DB::table('users')->where('username', $request->username)->where('password', $request->password)->first();
        if ($user == null)
        {
            $cek3= 1;

            return view('login',['cek3'=>$cek3]);
        }
        else
        {
            return redirect('/home');
        }
    }

    public function first()
    {
        $cek3 = 0;

        return view('login', ['cek3' => $cek3]);
    }

    public function info()
    {
        return view('info');
    }

    public function logout()
    {
        return redirect('/');
    }
}
