<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function home()
    {
        // index frontend
        return view('frontend\layouts\index');
    }

    
    public function product()
    {
        //Frontend product section
        return view('frontend.layouts.products');
    }
    public function topBrand()
    {
        //Frontend product section
        return view('frontend.layouts.top-brands');
    }
    public function cart()
    {
        //Frontend product section
        return view('frontend.layouts.cart');
    }
    public function contact()
    {
        //Frontend product section
        return view('frontend.layouts.contact');
    }
    public function login()
    {
        //Frontend product section
        return view('frontend.layouts.login');
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
