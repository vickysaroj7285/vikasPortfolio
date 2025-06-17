<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('imageUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $manager = new ImageManager(new Driver());

        // read image from file system
        $image = $manager->read($request->image);
        dd( $image);
        // resize image proportionally to 300px width
        $image->scale(width: 300);

        // insert watermark
        $image->place('images/watermark.png');

        // save modified image in new format 
        $image->toPng()->save('images/foo.png');
    }
}
