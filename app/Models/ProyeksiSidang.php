<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyeksiSidang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('pbb1', 'like', '%' . $search . '%')
                ->orWhere('pbb2', 'like', '%' . $search . '%');
        });
    }



    public function prediksisidang()
    {
        return $this->belongsTo(PrediksiSidang::class, 'prediksi_sidang_id');
    }
}
