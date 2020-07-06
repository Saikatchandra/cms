<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vedio;
use DB;

class VedioController extends Controller
{
    public function index(){
        
        $vedios = Vedio::all();   
    	return view('admin.vedio.vedio',compact('vedios'));
    }

    public function addvedio(){
    	return view('admin.vedio.add');
    }

    public function saveVedio(Request $request){
   

    	$validateData=$request->validate([
    		 	'title' => 'required|unique:vedios',
		        'description' => 'required',
		        'link' => 'required',
		        'published' => 'required',
		        'section' => 'required',
    	]);
    	$data=array();
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['link']=$request->link;
    	$data['published']=$request->published;
    	$data['section']=$request->section;

        //      if(strlen($data['link']) > 11)
        //         {
        //             if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match))
        //             {
        //                 return $match[1];
        //             }
        //             else
        //                 return false;
        //         }

        // return $link;


    	$insert=DB::table('vedios')->insert($data);
    	if($insert){
    		$notification = array(
                'messege'=>'Vedio Added Successfully',
                'type'=>'success'
            );

            
              return redirect()->action('VedioController@index')->with($notification);

    	}else{
    		$notification = array(
                'messege'=>'Vedio Added Fail',
                'type'=>'error'
            );
    	}
}

       public function deleteVedio($id){
       		   $data=DB::table('vedios')->where('id',$id)->first();
        		
        		$delete=DB::table('vedios')->where('id',$id)->delete();
		          if ($delete) {
		            $notification = array(
		                'messege'=>'Vedio Deleted Successfully',
		                'type'=>'error'
		            );
		           
		            return Redirect()->back()->with($notification);

		        }else{
		            $notification = array(
		                'messege'=>'Vedio Deleted Fail',
		                'type'=>'error'
		            );

            return Redirect()->back()->with($notification);
        }
       }

      
}
