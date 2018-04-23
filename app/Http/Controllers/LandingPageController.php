<?php

namespace App\Http\Controllers;
use App\Product;
use App\Departement;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (request()->Departement) {
            $products = product::with('departement')->whereHas('departement', function ($query) {
                $query->where('slug', request()->Departement);
            })->get();
           $departement = Departement::all();
        } else {            
            $products = product::inRandomOrder()->take(9)->get();
            $departement = Departement::all();
        }       

        return view('landing-page')->with([
            'products' => $products,
            'departement' => $departement,
        ]);
    }

     /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = product::where('slug', $slug)->firstOrFail();
        $slugName = product::where('slug', '!=', $slug)->inRandomOrder()->take(4)->get();

        return view('hotels/slug-name')->with('product', $product);
       
    }
}
