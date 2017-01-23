<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class PagesController extends Controller

// This page is used to control the main pages within the website.

{
  public function getIndex() {

  return view ('welcome');
  }

    public function getAbout(){
      
    
 return view ('pages.about');
    
    

  }

  public function getContact(){
   
    return view ('pages.contact');
  


  }

}
