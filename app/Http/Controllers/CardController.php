<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    public function index($slug)
    {
        $cards = DB::table('categories')
            ->join('cards', 'cards.category_id', '=', 'categories.id')
            ->where('categories.slug', '=', $slug)
            ->simplePaginate(1);

        return view('cards.index', [
            'cards' => $cards
        ]);
    }
}
