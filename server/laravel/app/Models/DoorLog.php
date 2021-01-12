<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Device;

class DoorLog extends Model
{
    use HasFactory;

    protected $fillable = ['is_open'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}