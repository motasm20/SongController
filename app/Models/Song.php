<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
<<<<<<< HEAD
    use HasFactory;
    
=======
    use HasFactory; // Toegevoegd voor model factories

    protected $table = 'songs';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;

>>>>>>> 9b4f50ddc632997303448288f9b737cbc01901ac
    protected $fillable = ['title', 'singer'];
}
