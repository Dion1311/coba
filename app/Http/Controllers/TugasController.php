<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tugas;
use App\Models\Dosen;

class TugasController extends Controller
{
    public function index(){
        $dosen = Dosen::all();
        // dd($dosen);
        return view('input-tugas',compact('dosen'));
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'tugas'=>['required','min:3'],
            'tanggal_pemberian'=>'required','date',
            'deadline'=>'required', 'date',
            'id_dosen'=>'required',
            'keterangan'=>'required'
        ]);
        $nidn=$request->id_dosen;
        $model=Dosen::find($nidn);
        $nama=$model->nama;

        $tugas=$validatedData['tugas'];
        $tanggal_pemberian=$validatedData['tanggal_pemberian'];
        $deadline=$validatedData['deadline'];
        $id_dosen= $validatedData['id_dosen'];
        $keterangan= $validatedData['keterangan'];
        // dd($isi);
        Tugas::create([
            'tugas'=>$tugas,
            'tanggal_pemberian'=>$tanggal_pemberian,
            'deadline'=>$deadline,
            'dosen'=>$nama,
            'dosen_id'=>$id_dosen,
            'keterangan'=>$keterangan
        ]);
        return redirect('tampil-tugas')->with('status', 'Tugas Siswa Telah Dimasukan');
    }
    public function show(){
        $model = new Tugas;
        $data = $model->all();
        return view('tampil-tugas',['data'=>$data]);
    }
    public function delete($id){
        $model = Tugas::find($id);
        $model->delete();
        return redirect('tampil-tugas')->with('status-deleted','Data Tugas Telah Dihapus');
    }
    public function edit($id){
        $model= Tugas::find($id);
        $dosen = Dosen::all();
        return view('edit-tugas',compact('dosen'))->with('post',$model);
    }
    public function update(Request $request, $id){
        $model= Tugas::find($id);
        $validatedData = $request->validate([
            'tugas'=>['required','min:3'],
            'tanggal_pemberian'=>'required','date',
            'deadline'=>'required', 'date',
            'id_dosen'=>'required',
            'keterangan'=>'required'
        ]);
        $nidn=$request->id_dosen;
        $dosen=Dosen::find($nidn);
        $nama=$dosen->nama;

        $tugas=$validatedData['tugas'];
        $tanggal_pemberian=$validatedData['tanggal_pemberian'];
        $deadline=$validatedData['deadline'];
        $id_dosen= $validatedData['id_dosen'];
        $keterangan= $validatedData['keterangan'];
        // dd($model->id);
        Tugas::where('id', $model->id)
            ->update([
                'tugas'=>$tugas,
                'tanggal_pemberian'=>$tanggal_pemberian,
                'deadline'=>$deadline,
                'dosen'=>$nama,
                'dosen_id'=>$id_dosen,
                'keterangan'=>$keterangan
            ]);
        return redirect('tampil-tugas')->with('status', 'Data Tugas Telah Diperbarui');
    }
}
