<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller

{
   public function onContactSend(Request $request){
        
        $ContactArray = json_decode($request->getContent(),true);
        
        $name = $ContactArray['name'];
        $email = $ContactArray['email'];
        $phone = $ContactArray['phone'];
        $message = $ContactArray['message'];

        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ]);

        if ($result == true ) {
            return 1;
        }else{
            return 0;
        }

    }// end method 


    public function AllContactMessage(){
          $contact = Contact::all();
        return view('backend.contact.all_contact',compact('contact'));
    } // end method 


    public function DeleteContactMessage($id){

        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end mehtod 

}
 