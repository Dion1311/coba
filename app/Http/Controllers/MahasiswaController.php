<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        return view('input-mahasiswa');
    }
    public function show(){
        $model = new Mahasiswa;
        $data=$model->all();
        return view('tampil-mahasiswa',['data'=>$data]);
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'nim'=>['required','min:3','unique:mahasiswas'],
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'jenis_kelamin'=>'required',
            'alamat'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required'
        ]);
        Mahasiswa::create($validatedData);
        return redirect('tampil-mahasiswa')->with('status', 'Data Siswa Telah Dimasukan');
    }
    public function delete($nim){
        $model = Mahasiswa::find($nim);
        $model->delete();
        return redirect('tampil-mahasiswa')->with('status-deleted','Data Siswa Telah Dihapus');
    }
    public function edit($nim){
        $model= Mahasiswa::find($nim);
        // dd($model);
        return view('edit-mahasiswa')->with('post',$model);
    }
    public function update(Request $request, $nim){
        $model= Mahasiswa::find($nim);
        $rules = [
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'jenis_kelamin'=>'required',
            'alamat'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required'
        ];
        if ($request->nim != $model->nim) {
            $rules['nim'] = 'required|unique:mahasiswas';
        }
        $validatedData=$request->validate($rules);
        Mahasiswa::where('nim', $model->nim)
            ->update($validatedData);
        return redirect('tampil-mahasiswa')->with('status', 'Data Siswa Telah Diperbarui');
    }
}
