<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jenissepatu extends Model
{
    use HasFactory;
    protected $table = 'tb_jenissepatu';
    protected $primaryKey = 'jenissepatu_id';
    protected $guarded = '[]';
    protected $fillable = [
        'jenissepatu_id',
        'jenissepatu_nama'
    ];
    public function sepatu() :HasMany
    {
        return $this->hasMany(sepatu::class, 'sepatu_id_jenissepatu', 'sepatu_id');    
    }
}
