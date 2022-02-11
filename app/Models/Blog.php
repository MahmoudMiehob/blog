<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    const PUBLIC =1;
    const FREINDS =2;
    const SPECIFIC_FRIENDS =3;
    const ONLY_ME =4;

    protected $fillable = [
        'body',
        'status',
        'visibility',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
