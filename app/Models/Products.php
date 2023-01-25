<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'collection_id',
    ];
    public function collection()
    {
        return $this->belongsTo(Collections::class, 'collection_id');
    }
}
