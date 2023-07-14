<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [ //Para transformar o array em string
        'items' => 'array'
    ];
    protected $dates = ['date']; //Para transformar o campo em data

    protected $guarded = []; //Para não alterar nada
    protected $table = 'events';
    protected $fillable = ['title','city','private','description','items','date']; //Pode ou não alterar
//    public $timestamps = false;  //Para não usar o created_at e updated_at
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    use HasFactory;
}
