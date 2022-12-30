<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Tugas;

class DashboardController extends Controller
{
    public function mount(){
    }
    public function index(){
        $data=Dosen::select('umur')->get()->groupBy('umur');
        // dd($data);
        $jumlah_dosen=Dosen::count();
        $umurs=[];
        $umurCount=[];
        foreach($data as $umur => $values){
            $umurs[]=$umur;
            $umurCount[]=count($values);
        }

        $item=Mahasiswa::select('jenis_kelamin')->get()->groupBy('jenis_kelamin');
        $jumlah_mhs= Mahasiswa::count();
        $genders=[];
        $genderCount=[];
        foreach($item as $gender => $values){
            $genders[]=$gender;
            $genderCount[]=count($values);
        }
        // dd($genders,$genderCount);
        $jumlah_tugas=Tugas::count();
        // dd($jumlah_tugas);
        return view('dashboard',['data'=>$data,
                                'umurs'=>$umurs,
                                'umurCount'=>$umurCount,
                                'item'=>$item,
                                'genders'=>$genders,
                                'genderCount'=>$genderCount,
                                'jumlah_dosen'=>$jumlah_dosen,
                                'jumlah_mhs'=>$jumlah_mhs,
                                'jumlah_tugas'=>$jumlah_tugas
                                ]);
    }
}
