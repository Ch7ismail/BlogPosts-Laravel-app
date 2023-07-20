<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'location', 'email', 'website', 'description', 'img', 'user_id'];

    //Relationsship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
