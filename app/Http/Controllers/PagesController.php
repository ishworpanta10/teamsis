<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
    	return view('home');
       }
     public function getVictim(){
      return view('victim');
    }
     public function getProperty(){
    	return view('property');
   
    }
      public function getCompensation(){
    	return view('compensation');
    }

    public function getCompensationSubmit(){
      return view('last');
    }


      public function getVdetails(){
      return view('vdetails');
    }
      public function getIndex2(){
      return view('index2');
    }

}
