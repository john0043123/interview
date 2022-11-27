<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $with = ['detail', 'images'];

    public function detail()
    {
        $locale = session()->get('locale') ?? 'en';
        return $this->hasOne(PortfolioDetail::class, 'portfolio_id', 'id')->where('locale', $locale);
    }

    public function images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'id');
    }
}
