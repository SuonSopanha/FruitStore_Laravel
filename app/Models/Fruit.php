<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    public  function scopeFilters($query, array $filters)
    {
        if ($filters['origin'] ?? false) {
            $query->where('origin', 'like', '%' . request('origin') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('descriptions', 'like', '%' . request('search') . '%');
        }
    }
}
