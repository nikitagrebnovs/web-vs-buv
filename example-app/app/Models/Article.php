<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Article extends Model
{
    use DatabaseTransactions;
    use HasFactory;

    public function scopeTrending($query, $take = 3)
    {
        return $query->orderByDesc('reads')->take($take)->get();
    }
}
