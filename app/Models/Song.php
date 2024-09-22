<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory; // Toegevoegd voor model factories

    protected $table = 'songs';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = ['title', 'singer'];
}
