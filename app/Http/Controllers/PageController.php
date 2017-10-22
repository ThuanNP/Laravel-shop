<?php

namespace App\Http\Controllers;
use App\Slide; 
use App\Product; 

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
        $newProduct = Product::where('new',1)->paginate(4);
        $promotionProduct = Product::where('promotion_price','<>',0)->paginate(8);
    	// return view('page.trangchu', ['slide'=>$slide]);
    	// print_r($newProduct);
    	// exit();
    	return view('page.trangchu', compact('slide', 'newProduct', 'promotionProduct'));
    }

    public function getProductCategory(){
    	return view('page.loai_sanpham');
    }

    public function getProduct(){
    	return view('page.chitiet_sanpham');
    }

    public function getContact(){
    	return view('page.lienhe');
    }

    public function getAbout(){
    	return view('page.gioithieu');
    }
}
