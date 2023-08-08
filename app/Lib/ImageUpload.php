<?php
namespace App\Lib;

use Image;
use Illuminate\Support\Facades\Storage;

/**
 * Image upload using Intervention
 */
trait ImageUpload
{
    public function upload($path, $media)
    {
        $image   = time() . '.' . $media->getClientOriginalExtension();

        $img = Image::make($media->getRealPath());
        
        $img->stream(); // <-- Key point
        
        $imageWithPath = $path.$image;
        Storage::disk('local')->put($imageWithPath, $img);
        return explode('public/', $imageWithPath)[1];
    }
}
