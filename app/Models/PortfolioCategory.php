<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
