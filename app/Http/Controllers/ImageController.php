<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;

class ImageController extends Controller
{

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
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