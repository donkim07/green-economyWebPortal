<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteData extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'quantity', 'type', 'location_id'];
}
