<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMessage;
use DB;

class PagesController extends Controller
{
	public function ContactUs()
	{
		return view('pages.contactus');
	}
    function SaveUserMessage(Request $request)
    {
    	$status=true;
    	try
	    	{
		    	$userMessage=new UserMessage();
				$userMessage->Message=$request->Message;
				$userMessage->Title=$request->Title;
				$userMessage->Name=$request->Name;
		    	$userMessage->save();
	        }
   		 catch(\Exception $e)
    		{
    			$status=false;
    			$message=$e->getMessage();
    		}
    		if($status!=false)
    			$message="Thanks for your message!";
    	return response()->json(["Status"=>"Success","Message"=>$message]);
    }
}
