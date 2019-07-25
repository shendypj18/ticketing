<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Ticket;
use Validator ;
use Response ;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth'); //melakukan auth untuk login
    }
 
    public function index()
    {
       $tiket  = Ticket::all(); //mengambil semua data database dari model ticket
       return view('admin.tiket', compact('tiket')); // mengembalikan nilai ke view tiket.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexx()
    {
        return view ('admin.tambahtiket');
    }

    public function create()
    {
        return view ('admin.tambahtiket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = new Ticket();  //mendeklarasikan baru dari model ticket
        $input->nama_tiket = $request->nama_tiket ; //memberi request untuk input data
        $input->jumlah_tiket = $request->jumlah_tiket;
        $input->harga_tiket = $request->harga_tiket;
        $input->save();
        
        return redirect()->route('tiket')->with('alert-success','Berhasil menambahkan data');
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
        $tiket = Ticket::where('id_tiket',$id)->get();
        #dd($tiket);
        return view('admin.edittiket',['tiket' => $tiket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input =$request->all();
        $tiket = Ticket::where('id_tiket',$id)->first();
        #dd($tiket);
        $tiket->nama_tiket = $input['nama_tiket'];
        $tiket->harga_tiket = $input['harga_tiket'];
        $tiket->jumlah_tiket = $input['jumlah_tiket'];
        #dd($tiket);
        $tiket->save();
        #  if (! $tiket->save())
       #   App::abort(500);
    /*
    $tiket = Ticket::where('id_tiket',$request->input('id_tiket'))->first();
    dd($tiket);
    $tiket->nama_tiket = $request->nama_tiket;
    $tiket->save();
    #dd($tiket);*/
        return redirect()->route('tiket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiket = Ticket::where('id_tiket',$id)->delete();
        #dd($tiket);
        return redirect('tiket')->with('success','Data tiket telah di hapus');
    }
}
