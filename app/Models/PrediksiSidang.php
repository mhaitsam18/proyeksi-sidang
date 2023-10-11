<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class PrediksiSidang extends Model
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

    public function proyeksisidang()
    {
        return $this->hasMany(ProyeksiSidang::class);
    }
}
