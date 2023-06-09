<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = 'soals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idSoal', 'idTryout', 'idJenis', 'detailSoal', 'statusInduk'
    ];

}
