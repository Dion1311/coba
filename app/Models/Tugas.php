<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $fillable=[
        'tugas',
        'tanggal_pemberian',
        'deadline',
        'dosen',
        'dosen_id',
        'keterangan'
    ];
}
