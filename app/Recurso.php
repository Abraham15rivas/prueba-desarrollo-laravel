<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recursos';
    protected $fillable = [
        'name', 'email', 'url', 'description', 'country', 'languaje',
        'advertising', 'photo', 'category', 'start_date', 'finish_date', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function services() {
        $this->hasMany(Service::class);
    }
}
