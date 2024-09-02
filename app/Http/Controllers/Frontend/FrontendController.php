<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ItemCategorie;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $itemCategories = ItemCategorie::whereActive(1)->get();
        return view('frontend.index', compact('itemCategories'));
    }

    public function shop($slug = null)
    {
        return view('frontend.shop');
    }

    public function shop_tag($slug = null)
    {
        return view('frontend.shop_tag', compact('slug'));
    }

    public function product()
    {
        // $product = Product::with('media', 'category', 'tags', 'reviews')->withAvg('reviews', 'rating')->whereSlug($slug)
        //     ->Active()->HasQuantity()->ActiveCategory()->firstOrFail();

        // $relatedProducts = Product::with('firstMedia')->whereHas('category', function ($query) use ($product) {
        //     $query->whereId($product->product_category_id);
        //     $query->whereStatus(true);
        // })->inRandomOrder()->Active()->HasQuantity()->take(4)->get();
        return view('frontend.detail');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

}
