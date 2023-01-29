<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create() {
        return view('castcreate');
    }

    public function createe(Request $request) {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'wtk' => 'required',
        ]);

        DB::table('cast')->insert([
            'nama' => $request['nama'],
            'jeniskelamin' => $request['jk'],
            'watak' => $request['wtk']
        ]);   

        return redirect('cast');
    }

    public function index() {
        $cast = DB::table('cast')->get();
        // dd($cast);
        return view('cast', ['cast' => $cast]);
    }

    public function show($id){
        $cast = DB::table('cast')->where('id', $id)->first();

        return view('show', ['cast' => $cast]);
    }

    public function edit($id){
        $cast = DB::table('cast')->where('id', $id)->first();

        return view('edit', ['cast' => $cast]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'wtk' => 'required']);

            DB::table('cast')
              ->where('id', $id)
              ->update(
                [
                'nama' => $request->nama, 
                'jeniskelamin' => $request->jk,
                'watak' => $request->wtk
                ]);
            return redirect('/cast');
    }

    public function destroy($id){

        DB::table('cast')->where('id', $id)->delete();

        return redirect('cast');
    }
}
