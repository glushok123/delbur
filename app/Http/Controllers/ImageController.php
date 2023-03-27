<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Response;
use Str;

class ImageController extends Controller
{
 
    public function show(string $name)
    {
        $file = Storage::disk('uploads')->get($name);

        return Response::make($file, 200, array('Content-Type' => 'image/jpeg'));
    }
}
