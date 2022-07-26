<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'comment'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function listing() {
        return $this->belongsTo('App\Models\Product');
    }
}
