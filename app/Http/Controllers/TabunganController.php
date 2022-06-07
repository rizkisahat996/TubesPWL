<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Tabungan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
   
    public function index()
    {
        $user_id = Auth::user()->id;
        $all = User::find($user_id);
        $nama_transaksi = $all->transaksi;
        $a = Transaksi::where('user_id', $user_id)->first();
        
        return view('dashboard.tabungan.index', [
            "transaksi" => $nama_transaksi,
            "nama_transaksi" => $a,
            "nama_pengguna" => $all]);
        
    }

    
    public function ceksaldo()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        return view('dashboard.tabungan.ceksaldo', [
            "user" => $user
        ]);
    }

   
    

    
    public function tarik()
    {
        $user_id = Auth::user()->id;
        $transaksi = User::find($user_id);
        return view('dashboard.tabungan.penarikan',[
            "transaksi" => $transaksi]);
    }

    
    public function tarikk(Request $request)
    {   
        $user_id = Auth::user()->id;
        $rekening = User::find($user_id);
        if($request->saldo > $rekening->saldo){
            return redirect('/penarikan')->with('warning', 'Saldo Kamu Tidak Cukup');
        }
        $rekening->saldo -= $request->saldo;
        $rekening->update();

        $history = new Transaksi;
        $history->user_id = $user_id;
        $history->nama_transaksi = 'Pengeluaran';
        $history->jumlah_transaksi = $request->saldo;
        $history->save();         


        return view('dashboard.tabungan.penarikan');
    }

    public function transfer()
    {
        $id_user = Auth::user()->id;
        $user_sekarang = User::find($id_user);
        $user = User::all();
        return view('dashboard.tabungan.transfer',[
            "user" => $user,
            "saya" => $user_sekarang]);
    }

    
    public function transferr(Request $request)
    {   

        $user_id = Auth::user()->id;
        $rekening = User::find($user_id);
        $user_sekarang = User::find($user_id);
        $user = User::all();
        //Jika rekening tidak cukup saldonya
        if($request->saldo > $rekening->saldo){
            return redirect('/transfer')->with('warning', 'Saldo Kamu Tidak Cukup');
        }

        //Rekening kita berkurang
        $rekening->saldo -= $request->saldo;
        $rekening->update();

        //History kita bertambah
        $history = new Transaksi;
        $history->user_id = $user_id;
        $history->nama_transaksi = 'Pengeluaran';
        $history->jumlah_transaksi = $request->saldo;
        $history->save();

        //rekening tujuan bertambah
        $rekening_teman = User::find($request->namanya);
        $rekening_teman->saldo += $request->saldo;
        $rekening_teman->update(); 

        //History teman bertambah
        $history = new Transaksi;
        $history->user_id = $request->namanya;
        $history->nama_transaksi = 'Pemasukan';
        $history->jumlah_transaksi = $request->saldo;
        $history->save();         


        return view('dashboard.tabungan.transfer',[
            "user" => $user,
            "saya" => $user_sekarang]);
    }
    
    public function nabung()
    {
        $user_id = Auth::user()->id;
        $transaksi = User::find($user_id);
        return view('dashboard.tabungan.nabung',[
            "transaksi" => $transaksi]);
    }

    
    public function nabungg(Request $request)
    {   
        $user_id = Auth::user()->id;
        $rekening = User::find($user_id);
        
        $rekening->saldo += $request->saldo;
        $rekening->update();

        $history = new Transaksi;
        $history->user_id = $user_id;
        $history->nama_transaksi = 'Pemasukan';
        $history->jumlah_transaksi = $request->saldo;
        $history->save();         


        return view('dashboard.tabungan.nabung')->with('warning', 'Terimakasih Sudah Menabung');
    }
}
