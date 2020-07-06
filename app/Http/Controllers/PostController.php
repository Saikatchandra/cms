<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostController extends Controller
{
    public function index(){
        
        $posts = Post::all();   
    	return view('admin.post.post',compact('posts'));
    }

    public function addPost(){

    	return view('admin.post.add');
    }
    public function savePost(Request $request){
           
           $validatedData = $request->validate([
        'title' => 'required|unique:posts',
        'description' => 'required',
        'image' => 'required',
        'published' => 'required',
        'section' => 'required',
      
        ]);

        $data = array();
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['published']=$request->published;
        $data['section']=$request->section;
 
    
        $image = $request->image;

        if($image){
            $image_name = str_random(10);
            $image_ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$image_ext;
            $upload_path = 'uploads/';
            $image_url= $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['image']=$image_url;
                $insert = DB::table('posts')->insert($data);
                if ($insert) {
                    $notification = array(
                        'messege'=>'Post Added Successfully',
                        'type'=>'success'
                    );

                 
                    return redirect()->action('PostController@index')->with($notification);

                }else{
                    $notification = array(
                        'messege'=>'Post Added Fail',
                        'type'=>'error'
                    );

                    return Redirect()->back()->with($notification);
                }
            }else{
                $notification = array(
                    'messege'=>'Post Added Fail',
                    'type'=>'error'
                );

                return Redirect()->back()->with($notification);
            }
        }
    }

    public function deletePost($id){
        $data=DB::table('posts')->where('id',$id)->first();
        $image=$data->image;
        $delete=DB::table('posts')->where('id',$id)->delete();
        if ($delete) {
            $notification = array(
                'messege'=>'Post Deleted Successfully',
                'type'=>'error'
            );
            unlink($image);
            return Redirect()->back()->with($notification);

        }else{
            $notification = array(
                'messege'=>'Post Deleted Fail',
                'type'=>'error'
            );

            return Redirect()->back()->with($notification);
        }
    }

   
}
