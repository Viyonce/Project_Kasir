<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "Pelanggan";
    protected $primaryKey = "PelangganID";
    public $incrementing = true;
    protected $guarded = [];
    public function Pelanggan(): HasMany
    {
        return $this->hasMany(Pelanggan::class, 'PelangganID', 'PelangganID');
    }
}
