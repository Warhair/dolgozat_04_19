<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Ramsey\Uuid\v2;

class kategoria extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['kategoriaId','v1','v2','kerdes','helyes','v3','v4'];

    use HasFactory;
}
