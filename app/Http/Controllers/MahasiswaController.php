<?php

namespace App\Http\Controllers;


use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $mahasiswa = Mahasiswa::where('name', 'LIKE', '%'.$keyword.'%') //seperti keyword
                    ->orWhere('npm', 'LIKE', '%'.$keyword.'%' )
                    ->orWhere('nohp', $keyword ) //harus sama sengan keyword
                    ->paginate(10);
        return view('mahasiswa',['mahasiswaList' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $mahasiswa = Mahasiswa::findOrFail($id);
       return view('detail-mahasiswa',['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());
        if ($mahasiswa) {
            Session::flash('status', 'succes');
            Session::flash('message', 'add new mahasiswa succes!');
        }
        return redirect('/mahasiswas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view ('mahasiswa-edit',['mahasiswa' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editMahasiswa = Mahasiswa::findOrFail($id);
        $editMahasiswa->update($request->all());

        if ($editMahasiswa) {
            Session::flash('status', 'success');
            Session::flash('message', 'ubah data mahasiswa success!');
        }

        // $mahasiswa->name = $request->name;
        // $mahasiswa->npm = $request->npm;
        // $mahasiswa->nohp = $request->nohp;
        // $mahasiswa->save();

        return redirect('/mahasiswas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view ('mahasiswa-delete',['mahasiswa' => $mahasiswa]);

    }
    public function destroy($id)
    {
        //metode query builder
        // $deleteStudent = DB::table('mahasiswas')->where('id', $id)->delete();
        $deletedMahasiswa = Mahasiswa::findOrFail($id);
        $deletedMahasiswa->delete();

        if ($deletedMahasiswa) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete  mahasiswa success!');
        }

        return redirect('/mahasiswas');
    }
}
