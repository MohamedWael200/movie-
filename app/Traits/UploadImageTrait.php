<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadImageTrait
{
    public function uploadImage($photo,$folderName){
        $image = $photo->getClientOriginalName();
        $path =$photo->storeAs($folderName,$image,'image');
        return $path;
    }
}
