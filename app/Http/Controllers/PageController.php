<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function getIndex()
   {
      return view('pages.homepage');
   }
   public function getProductType()
   {
      return view('products.productType');
   }

}
