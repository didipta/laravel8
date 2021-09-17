<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
  public function welcome()
  {
    return view('welcome');
  }
   
  public function home()
  {
    $color = array("red","black","green","blue","yellow");
    $name="dipta saha";
    return view('homepage',['name'=>$name,'color'=>$color]);
  }
  public function about()
  {
    $arr= array('id' =>10 , 'name' =>"dipta" ,'address' =>"chittagong");;
    return view('about',['arr'=>$arr]);
  }
}
