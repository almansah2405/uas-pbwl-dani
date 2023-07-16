<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sepatu extends Model
{
    use HasFactory;
    protected $table = 'tb_sepatu';
    protected $primaryKey = 'sepatu_id';
    protected $guarded = '[]';
    protected $fillable = [
        'sepatu_id',
        'sepatu_id_jenissepatu',
        'sepatu_nama',
        'sepatu_harga',
        'sepatu_stock'
    ];
    public function jenissepatu() :BelongsTo
    {
        return $this->belongsTo(Jenissepatu::class, 'sepatu_id_jenissepatu');    
    }
    public function pelanggan() :HasMany
    {
        return $this->hasMany(Pelanggan::class, 'pelanggan_id_sepatu', 'sepatu_id');    
    }
}
