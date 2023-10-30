<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class FrontendPagesController extends Controller
{
    public function workPage(){
        if(request()->ajax()){
            if(request()->has('category')){
                $category = request()->get('category');
                $portfolio_work = Portfolio::whereHas('category', function($q) use($category){
                    $q->where('name', $category);
                })->get();
                return ['data' => $portfolio_work];
            }
        }
        $categories = PortfolioCategory::active()->get();
        $portfolio_work = Portfolio::with('category')->paginate(8);
        return view('work', compact('categories', 'portfolio_work'));
    }

    public function workDetail($slug){
        $work = Portfolio::where('slug', $slug)->first();
        if($work){
            return view('work-detail', compact('work'));
        }
        abort(404);
    }

    public function frontPage(){
        $left_col = Portfolio::with('category')->orderBy('id','ASC')->take(3)->get();
        $right_col = Portfolio::with('category')->orderBy('id','ASC')->skip(3)->take(3)->get();
        $portfolio = Portfolio::with('category')->take(6)->get();
        return view('home', compact('left_col','right_col', 'portfolio'));
    }
}
