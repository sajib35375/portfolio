<?php

use PHPMailer\PHPMailer\PHPMailer;
use Intervention\Image\Facades\Image;


function makeDirectory($path){
    if(file_exists($path)){
        return true;
    }else{
        return mkdir(public_path().'/'.$path,0755,true);
    }
}

function unlinkFile($path){
    return file_exists($path) && is_file($path) ? @unlink($path) : false;
}


function uploadSingleImg($file,$location,$old = null,$size=null){

    $path = makeDirectory($location);
    if(!$path) throw new Exception('File counld not be Created');



    if(!empty($file) || $file != NULL){

        if(!empty($old) || $old != NULL){
            unlinkFile($location . '/' . $old);
        }


        $filename = md5(time().rand().uniqid()) .'.'. $file -> getClientOriginalExtension();



        $image = Image::make($file);

        if(!empty($size)){
//           dd($size);
//            $array = explode('x', strtolower($size));
            $width = $size[0];
            $height = $size[1];
//
//            $canvas = Image::canvas($width, $height);
//
//            $image = $image->resize($width, $height, function ($constraint) {
//                $constraint->aspectRatio();
//            });

//            $img = Image::make('image.jpg');

            // we need to resize image, otherwise it will be cropped
            if ($image->width() > $width) {
                $image->resize($width, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            if ($image->height() > $height) {
                $image->resize(null, $height, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            $image->resizeCanvas($width, $height, 'center', false, '#ffffff');





//            $canvas->($image, 'center');
            $image->save($location . '/' . $filename , 70);
        }else{
            $image->save($location . '/' . $filename , 70);
        }
    }else{
        $filename = $old;
    }



    return $filename;

}
