<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Auth;
use File;
use App\ Blogs;

class BlogController extends Controller
{
    //

public function addBlog(Request $request){
        
$detail=$request->input('Bdesc');
$feature=$request->input('Bname');

$time=time();
$inputMedia=$request->file('file-def');
$nextID = DB::table('blogs')->max('Bid');
$nextID = $nextID+1;
//
    
    $imgT = Image::make($inputMedia);
    //$img->orientate();

    $SavePath="img/uploads/blogs/{$nextID}/";
    $pathT=$SavePath.$time."blog.jpg";

    if (!file_exists($SavePath)) {
    //mkdir($SavePath, 755, true);
    mkdir($SavePath);
    }

    $imgT->fit(322,192);
    $imgT->save($pathT);


$dom = new \DomDocument();
$dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

$images = $dom->getElementsByTagName('img');

    foreach($images as $k => $img){
        $data = $img->getAttribute('src');
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $image_name=  time().$k.'.png';
        $path = "img/uploads/blogs/{$nextID}/". $image_name;
        file_put_contents($path, $data);
        $img->removeAttribute('src');
        $img->setAttribute('src', asset($path));
    }

$detail = $dom->saveHTML();

DB::insert('insert into blogs (bname, bdesc, pic) values (?, ?, ?)', [$feature, $detail, $pathT]);

return redirect()->back();
        //return back();
}

    
}
