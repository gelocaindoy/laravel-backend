<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plans;
use Image;

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

    public function OnSelectDetails($plansId){

        $id = $plansId;
        $result = Plans::where('id',$id)->get();
        return $result;

    } // end method 



    public function Allplans(){

        $plans = Plans::all();
        return view('backend.plans.all_plans',compact('plans'));
    } // end mehtod 



    public function Addplans(){
        return view('backend.plans.add_plans');
    } // end mehtod 


    public function Storeplans(Request $request){

        $request->validate([
            'short_title' => 'required',
            'short_description' => 'required',
            'small_img' => 'required',
        ],[
            'short_title.required' => 'Input Short Title Name',
            'short_description.required' => 'Input Short Description',

        ]);

        $image = $request->file('small_img'); 
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(626,417)->save('upload/plans/'.$name_gen);
        $save_url = 'https://backend.webdesignworkx.com/upload/plans/'.$name_gen;

        Plans::insert([
            'short_title' => $request->short_title,
            'short_description' => $request->short_description,
            'long_title' => $request->long_title,
            'long_description' => $request->long_description,
            'total_price' => $request->total_price,
            'total_cap' => $request->total_cap,
            'total_mbps' => $request->total_mbps,
            'skill_all' => $request->skill_all,
            'video_url' => $request->video_url,
            'small_img' => $save_url,
        ]);

        $notification = array(
            'message' => 'plans Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.plans')->with($notification);

    } // end method 


    public function Editplans($id){

        $plans = Plans::findOrFail($id);
        return view('backend.plans.edit_plans',compact('plans'));

    } // end method 


    public function Updateplans(Request $request){


        $plans_id = $request->id;

        if ($request->file('small_img')) {

        $image = $request->file('small_img'); 
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(626,417)->save('upload/plans/'.$name_gen);
        $save_url = 'https://backend.webdesignworkx.com/upload/plans/'.$name_gen;

        Plans::findOrFail($plans_id)->update([

            'short_title' => $request->short_title,
            'short_description' => $request->short_description,
            'long_title' => $request->long_title,
            'long_description' => $request->long_description,
            'total_price' => $request->total_price,
            'total_cap' => $request->total_cap,
            'total_mbps' => $request->total_mbps,
            'skill_all' => $request->skill_all,
            'video_url' => $request->video_url,
            'small_img' => $save_url,
        ]);
            $notification = array(
            'message' => 'Plans Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.plans')->with($notification);

        }else{

            Plans::findOrFail($plans_id)->update([

            'short_title' => $request->short_title,
            'short_description' => $request->short_description,
            'long_title' => $request->long_title,
            'long_description' => $request->long_description,
            'total_price' => $request->total_price,
            'total_cap' => $request->total_cap,
            'total_mbps' => $request->total_mbps,
            'skill_all' => $request->skill_all,
            'video_url' => $request->video_url,
            //without image
        ]);

        $notification = array(
            'message' => 'Plan Updated Without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.plans')->with($notification);
        }

    } // end method 


    public function Deleteplans($id){

        Plans::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Plan Delected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method 


    } 