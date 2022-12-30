<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    /**
    * The primary key associated with the table.
    *
    * @var string
    * @var bool
    * @var array
    */
    protected $primaryKey = 'nidn';
    public $incrementing = false;
    protected $fillable=[
        'nidn',
        'nama',
        'umur',
        'jenis_kelamin',
        'pendidikan_terakhir',
        'fakultas'
    ];
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'foreign_key');
    }
}
