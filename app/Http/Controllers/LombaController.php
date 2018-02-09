<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lomba;
use Auth;

class LombaController extends Controller
{
    function index(){
        if(Auth::user()->role != 'admin' ){
            return view('login');
        }
        return view ('lomba.index');
    }

    function detail($id){
        $lomba = Lomba::find($id);
        return view('lomba.detail')->with( 'lomba', $lomba);
    }

    function add(){

        return view('lomba.add');
    }

    function create(Request $request){
        $nama       = $request->nama;
        $deskripsi  = $request->deskripsi;
        $poster     = $request->poster;
        $tanggal    = $request->tanggal;
        
        if($nama == null){
            return "Nama Kosong";
        }
        
        $lomba = new Lomba;
        $lomba->name = $nama;
        $lomba->deskripsi = $deskripsi;
        $lomba->poster = $poster;
        $lomba->tanggal_tutup = $tanggal;
        $lomba->save();
        return redirect ('lomba');
        
    }

    function edit($id){
        $lomba = Lomba::find($id);
        return view('lomba.edit')->with( 'lomba', $lomba); 
    }

    function update(Request $request, $id){
        $nama       = $request->nama;
        $deskripsi  = $request->deskripsi;
        $poster     = $request->poster;
        $tanggal    = $request->tanggal;
        
        if($nama == null){
            return "Nama Kosong";
        }
        
        $lomba = Lomba::find($id);
        $lomba->name = $nama;
        $lomba->deskripsi = $deskripsi;
        $lomba->poster = $poster;
        $lomba->tanggal_tutup = $tanggal;
        $lomba->save();
        return redirect ('lomba');
    }

    function delete($id){
        $lomba = Lomba::find($id);
        //$delete = Lomba::table('lombas')->where('id', $id)->delete();
        //DB::table('users')->where('votes', '<', 100)->delete();
        return view('lomba.delete')->with( 'lomba', $lomba ) ;
    }

    function confirmdelete($id){
        $lomba = Lomba::find($id);
        $lomba->delete();
        return redirect('lomba');        
    }

    function mypagination(){
        $users = User::paginate(5);
        return view('myPagination',compact('users'));
    }
}
