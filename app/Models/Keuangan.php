<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = "keuangan";

    protected $fillable = ['jumlah_dana','pengeluaran','penghasilan'];
}
