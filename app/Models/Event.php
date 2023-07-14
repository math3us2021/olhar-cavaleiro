<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'items' => 'array'
    ];
    protected $dates = ['date'];

    protected $guarded = [];
    protected $fillable = ['title','city','private','description','items','date'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    use HasFactory;
}
