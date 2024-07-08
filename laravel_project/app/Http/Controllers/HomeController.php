<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //memanggil view landing page pada folder frontpage
        //disertai dengan variable title yang dapat ditampilkan pada layout
        $title="Landing Page";
       //$packages=[(object)[
            //'package_code'=>'DUmmy Code',
            //'package_name'=>'DUmmy Name',
            //'package_desc'=>'Dummy Desc'
        //]];
        $packages=Packages::With('harga')->get();
        return view('frontpage.landingpage', compact('title','packages'));

    }
    
    public function detailpage(){
        return view('frontpage.detailpage', ['tittle' => "Detail Page"]);
    }

    public function bookingpage(){
        return view('frontpage.bookingpage', ['tittle' => "Booking Page"]);
    }
     
    public function contactpage(){
        return view('frontpage.contactpage', ['tittle' => "Contact Page"]);
    }
}
