<?php

namespace App\Utilities;

use App\Utilities\ImageWriterInterface;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImageWriter implements ImageWriterInterface
{

    function getExtension($file)
    {
        return $file->extension();
    }

    function newFileName($file)
    {
        return Str::random(30).'.'.$this->getExtension($file);
    }

    public function write($file)
    {
        $path = 'uploads/avatar/';

        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }

        $newFileName = $this->newFileName($file);
        $file->move(public_path($path), $newFileName);
        return $newFileName;
    }

    public function delete($fileName)
    {
        $filePath = public_path('uploads/avatar');

        File::delete($filePath.'/'.$fileName);
    }
}