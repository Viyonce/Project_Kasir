<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;
    protected $table = "Produk";
    protected $primaryKey = "ProdukID";
    public $incrementing = true;
    protected $guarded = [];
    public function Produk(): HasMany
    {
        return $this->hasMany(Produk::class, 'ProdukID', 'ProdukID');
    }
}
