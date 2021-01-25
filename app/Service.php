<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'name', 'price', 'discount', 'recurso_id'
    ];

    public function recurso() {
        $this->belongsTo(Recurso::class);
    }
}
