<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index(){
        return view('input-dosen');
    }
    public function show(){
        $model = new Dosen;
        $data=$model->all();
        return view('tampil-dosen',['data'=>$data]);
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'nidn'=>['required','min:3','unique:dosens'],
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'jenis_kelamin'=>'required',
            'pendidikan_terakhir'=>'required',
            'fakultas'=>'required'
        ]);
        Dosen::create($validatedData);
        return redirect('tampil-dosen')->with('status', 'Data Guru Telah Dimasukan');
    }
    public function delete($nidn){
        $model = Dosen::find($nidn);
        $model->delete();
        return redirect('tampil-dosen')->with('status-deleted','Data Guru Telah Dihapus');
    }
    public function edit($nidn){
        $model= Dosen::find($nidn);
        return view('edit-dosen')->with('post',$model);
    }
    public function update(Request $request, $nidn){
        $model= Dosen::find($nidn);
        $rules = [
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'jenis_kelamin'=>'required',
            'pendidikan_terakhir'=>'required',
            'fakultas'=>'required'
        ];
        if ($request->nidn != $model->nidn) {
            $rules['nidn'] = 'required|unique:dosens';
        }
        $validatedData=$request->validate($rules);
        Dosen::where('nidn', $model->nidn)
            ->update($validatedData);
        return redirect('tampil-dosen')->with('status', 'Data Guru Telah Diperbarui');
    }
}
