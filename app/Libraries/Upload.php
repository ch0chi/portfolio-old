<?php

/**
 * Created by PhpStorm.
 * User: michael
 * Date: 10/25/16
 * Time: 1:21 AM
 */

namespace App\Libraries;
use Intervention\Image\Laravel\Facades\Image;
class Upload
{
    /**
     * Uploads post image and creates two different re-sized versions of the image
     *
     * @param $image
     * @param $key
     * @return string
     */
    public function uploadImage($image){
        $extension = $image->getClientOriginalExtension();
        $imageName = $this->randomString(32).'.'.$extension;
        //$this->makeDirectory($key);
        $path = public_path('uploads/'.$imageName);
        $img = Image::decode($image);

        $img->scale(width: 1200);
        $img->save(public_path().'/'.'uploads/'.'banner_'.$imageName, quality: 90);

        $img->scale(width: 375);
        $img->save(public_path().'/'.'uploads/'.$imageName, quality: 90);

        return $imageName;
    }

    public function deleteImage($image){
        //delete specified image from directory
    }

    public function makeDirectory($key){
        $path = '/home/michael/Documents/WebStuff/Portfolio/public/uploads/'.$key;

        if(!file_exists($path)){
            mkdir($path);
        }


    }

    function filenameSafe($name) {
        $except = array('\\', '/', ':', '*', '?', '"', '<', '>', '|');
        return str_replace($except, '', $name);
    }

    /**
     *
     * Generate random secure string for image storage
     *
     * @param $length
     * @param string $keyspace
     * @return string
     */
    public function randomString($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        return $str;
    }
}