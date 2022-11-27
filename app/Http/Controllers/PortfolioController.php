<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'portfolios' => \App\Models\Portfolio::all()
        ]);
    }

    public function filter()
    {
        $input = Request::input('input');

        $p = Portfolio::whereHas('detail', function (Builder $query) use ($input) {
            $query->whereIn('category', $input);
        })->get();

        return json_encode($p->pluck('id'));
    }

    public function detail(Portfolio $portfolio)
    {
        return view('detail', [
            'portfolio' => $portfolio
        ]);
    }
}
