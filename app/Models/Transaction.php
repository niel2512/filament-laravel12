<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'category_id',
        'date',
        'amount',
        'notes',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
