<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title','excerpt','body']; => hanya boleh mengisi isian yang di tuliskn, $guarded =>selain yang di tuliskan boleh diisi
    protected $guarded = ['id'];
}
