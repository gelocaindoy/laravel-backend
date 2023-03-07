<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plans;

class PlansController extends Controller
{
    public function onSelectFour(){
    	$result = Plans::limit(4)->get();
    	return $result;
    } // end mehtod 


 public function onSelectAll(){
 	$result = Plans::all();
    	return $result;

    } // end mehtod 

    public function OnSelectDetails(Request $request){

    	$id = $request->input('id');
    	$result = Plans::where('id',$id)->get();
    	return $result;

    } // end method 


} 
