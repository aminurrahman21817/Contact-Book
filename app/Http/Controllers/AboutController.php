<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function AllContact()
    {
    	$contact = DB::table('contacts')->get();
    	return view ('pages.allcontact')->with('data',$contact);
    }


    public function InsertData()
    {
    	return view('pages.insertdata');
    }

    public function dataAdded(Request $request)
    {
    	$data = array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;
    	$data['description']=$request->description;

    	$insert = DB::table('contacts')->insert($data);
    	return Redirect()->route('all.Contacts');
    }

    public function DeleteData($id)
    {

    	$dl = DB::table('contacts')->where('id',$id)->delete();
    	return Redirect()->route('all.Contacts');
    }

     public function EditData($id)
    {

    	$edit = DB::table('contacts')->where('id',$id)->first();

    	return view('pages.editcontact' , compact('edit'));
    }

    public function UpdateContact(Request $request , $id)
    {
    		$data = array();
    		$data['name']=$request->name;
    		$data['email']=$request->email;
    		$data['phone']=$request->phone;
    		$data['description']=$request->description;

    		$update = DB::table('contacts')->where('id',$id)->update($data);
    		return Redirect()->route('all.Contacts');
    }

}
