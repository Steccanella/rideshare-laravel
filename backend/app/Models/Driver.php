<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Trip;

class Driver extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        $this->belongsTo(User::class);
    }

    public function trips() {
        $this->hasMany(Trip::class);
    }
}
