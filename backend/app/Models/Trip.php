<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;
use App\Models\Trip;

class Trip extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        $this->belongsTo(User::class);
    }

    public function driver() {
        $this->belongsTo(Driver::class);
    }
}
