<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->hasMany(Role::class);
    }

    public function prediksisidang()
    {
        return $this->hasMany(PrediksiSidang::class);
    }
}
