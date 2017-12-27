<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawais;
use App\Civi;
use Session;

class PegawaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $civi = Civi::all();
        return view('civis.index', compact('civi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request, [
            'nama'=>'required',
            'ttl'=>'required',
            'alamat'=>'required',
            'notlp'=>'required',
            'jk'=>'required',
            'agama'=>'required',
            'kewarganegaraan'=>'required',
            'status'=>'required',
            'email'=>'required',
            'hoby'=>'required',
            'sd'=>'required',
            'smp'=>'required',
            'sma'=>'required',
            'pt'=>'required',
            'pk'=>'required']);
         $pegawais = Pegawais::create($request->only('nama','ttl','alamat','notlp','jk','agama','kewarganegaraan','status','email','hoby','sd','smp','sma','pt','pk'));
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $pegawais->perusahaan"]);
        return redirect()->route('pegawais.index');
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
        $civi = Civi::find($id);
        return view('civis.show', compact('civis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
