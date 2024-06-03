<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KelasController extends Controller
{
   
    function index(){
        $kelas = DB::table('t_kelas')->get();
        return view('kelas', compact('kelas'));
    }
    function create(){
        return view('kelas.form');
    }

    function store(Request $request){
        $request->validate([
            'nama_kelas' => 'required',
            'jurusan' => 'required|string',
            'lokasi_ruangan' => 'required',
            'nama_wali_kelas' => 'required'
        ]);
        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('t_kelas')->insert($input);
        if($status){
            return redirect('/kelas')->with('success', 'Data berhasil ditambahkan');
        } else{
            return redirect('/kelas/create')->with('error', 'Data gagal ditambahkan');
        }
    }

    function edit(Request $request, $id){
        $kelas = DB::table('t_kelas')->find($id);
        return view('kelas.form', compact('kelas'));
    }

    function update(Request $request, $id){
        $request->validate([
            'nama_kelas' => 'required|string|max:50',
            'jurusan' => 'required',
            'lokasi_ruangan' => 'required|string|min:3',
            'nama_wali_kelas' => 'required|string|regex:/^[a-zA-Z\s]+$/'
        ]);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = DB::table('t_kelas')->where('id', $id)->update($input);
        if ($status){
            return redirect('/kelas')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('kelas/edit/'.$id)->with('error', 'Data gagal diubah');
        }
    }

    function destroy($id){
        $status = DB::table('t_kelas')->where('id', $id)->delete();
        if ($status){
            return redirect('/kelas')->with('success','Data berhasil dihapus');
        } else{
            redirect('/kelas')->with('error', 'Data gagal dihapus');
        }
    }

}


