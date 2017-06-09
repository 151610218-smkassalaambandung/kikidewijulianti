<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a= "kiki";
    	return "Nama saya adalah ".$a;

    }
    //passing data view
    public function percobaan2()
    {
    	return view ('about');
    }

    //passing data variable to view
    public function percobaan3()
    {
    	$a = "kikidwi";
    	return view ('latihan.saya', compact('a'));
    }
    //passing data variable to view
    public function percobaan4()
    {
       $b = "kiki dj";
       $c = "XII RPL 2";
       $d = "SMK Assalaam";
       return view ('latihan.bio', compact('b','c','d'));
    }
   public function percobaan5()
   {
    $a = 1;
    $b = 2;
    $c = 3;
     return view ('latihan.seleksi', compact('a','b','c'));
   }
   public function percobaan6()
   {
    $buah = ['Mangga','Jeruk','Apel','Anggur','manggis'];
    return view('latihan.buah', compact('buah'));
   }
   public function param($data,$data2)
   {
     $id = 'persia';
     $baek=['buah'=>['anggur', 'mangga', 'apel','semangka','salak'],
           'mhidup' => ['manusia','tumbuhan','cicak','ayam','kucing'],
           'kucing' =>['anggora','persia'],
           'komp' => ['lenovo', 'asus', 'samsung', 'advan','tv']];

  $tugas =$baek[$data];
  $tugas =$baek[$data2];

  return view('tugas', compact('tugas','data'));
   }

}  
    
   
