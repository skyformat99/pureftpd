<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'domain_id',
        'token',
        'name',
    ];

    public function domain()
    {
        $this->belongsTo(Domain::class);
    }

}
