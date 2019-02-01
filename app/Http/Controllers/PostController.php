<?php
namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Input;
use Illuminate\Http\Request;
use Image;

class PostController extends Controller
{

    public function getDashboard()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function getPostList()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);

    }

    public function postCreatePost(Request $request)
    {
        //Validation
        $this->validate($request,[

            'body' => 'required|max:1000',
            'projectTitle' => 'required|max:1000',
            'projectCategories' => 'required|max:1000'
        ]);

        $post = new Post();

        $post->projectTitle = $request['projectTitle'];
        $post->projectCategories = $request['projectCategories'];
        $post->body = $request['body'];


//Request image from the browser
        $image = $request->file('projectThumbnail');
        echo "this is my nigga";
        echo $image;
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
//Once image is
        $destinationPath = public_path('images\thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        $post->projectThumbnail = $input['imagename'];


        $message = 'There was an error';


        if($request->user()->posts()->save($post)) {
            $message = 'post successfully created';
            //show error message if something goes wrong
        }
        return redirect()->route('dashboard')->with(['message'=>$message]);
    }


    public function getDeletePost ($post_id)

    {
        $post = Post::where('id', $post_id)->first();
        $post->delete();
        return redirect()->route('dashboard')->with(['message' => 'succesfully deleted!'] );

        //search criteria.

    }

    public function resizeImage()
    {
        return view('resizeImage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
        //Validation
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
//Request image from the browser
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
//Once image is
        $destinationPath = public_path('images\thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);


        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);
    }



}