<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id'
    ];
    public function category()
    {
        return $this->hasOne(PortfolioCategory::class, 'id', 'category_id');
    }
}
