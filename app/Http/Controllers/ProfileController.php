<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('pages.edit-profile', compact('user'));
    }

    public function updateInformation()
    {
        return view('pages.update-profile-pages.update-info');
    }

    public function updatePass()
    {
        return view('pages.update-profile-pages.update-pass');
    }

    public function updatePic(Request $request, $id)
    {

        // dd($request->input('file'));
        request()->validate([
            'image' => 'required',
        ]);

        // $file = $request->input('file');

       if ($files = $request->file('image'))
        {

            $response = Storage::makeDirectory('upload/image');

            // dd($response);
            $path= storage_path('app/upload/image');
            $name_gen = hexdec(uniqid()).'.'.$files->getClientOriginalExtension();
            // $img_path = public_path("image");
           $img =  Image::make($files->getRealPath())->resize(320, 240)->save($path.'/'.$name_gen);

            $last_img = $path.'/'.$name_gen;



            // dd($img);
            // Define upload path
            // $destinationPath = public_path('/profile_images/'); // upload path
            // Upload Orginal Image
            // $profileImage = date('YmdHis') . "." . $img->getClientOriginalExtension();
            // $img->move($destinationPath, $profileImage);

            // dd($profileImage);
            // $insert['file'] = "$profileImage";
            // Save In Database
            // $imagemodel= new Photo();
            $imagemodel= User::find($id);
            $imagemodel->profile_photo_path=$last_img;
            $imagemodel->update();
        }
        return back()->with('success', 'Image Upload successfully');
    }
}
