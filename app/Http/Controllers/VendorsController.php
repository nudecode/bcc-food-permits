<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    public function index() {

        $vendors = Vendor::all();

        $categoryArray = Vendor::all()->toArray();

        // dd($categoryArray[0]);
        // collect categories to count here
        // $categories = collect($categoryArray)
        // ->pluck('permit_type')
        // ->unique()
        // ->values()
        // ->all();
        // dd($categoryArray);

            $categories = collect($categoryArray)->mapWithKeys(function ($category) {
            return [$category[0] => $category];
        });

        dump($categories);

        return view('welcome')
        ->with('vendors', $vendors)
        ->with('categories', $categories);
    }
}
