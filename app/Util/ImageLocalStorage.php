<?php 

namespace App\Util;

use App\Interfaces\ImageStorage;
use Illuminate\Support\Facades\Storage;

class ImageLocalStorage implements ImageStorage
{
    public function store($request)
    {
        if ($request->hasFile('product_image')) {
            Storage::disk('public')->put("test.png", file_get_contents($request->file('image')->getRealPath()));
        }
    }
}
