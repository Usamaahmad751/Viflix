<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{
    //

    public function addBlog(Request $request){
        $BnameInput = Input::get ( 'Bname' );
        $BdescInput = Input::get ( 'Bdesc' );
        
        $time=time();

        $inputMedia=$request->file('file-def');
        $nextID = DB::table('blogs')->max('Bid');
        $nextID = $nextID+1;
        //
                
                $img = Image::make($inputMedia);
                //$img->orientate();

                $SavePath="img/uploads/blogs/{$nextID}/";
                $path=$SavePath.$time."blog.jpg";

                if (!file_exists($SavePath)) {
                //mkdir($SavePath, 755, true);
                mkdir($SavePath);
                }

                $img->fit(322,192);
                $img->save($path);
        //

       
        DB::insert('insert into blogs (bname, bdesc, pic) values (?, ?, ?)', [$BnameInput, $BdescInput, $path]);

        return redirect()->back();
        //return back();
    }

    public function addPromo(Request $request){
        $PromoInput = Input::get ( 'Promo' );
        $AmountInput = Input::get ( 'Amount' );
        
        //$time=time();

        $nextID = DB::table('promo')->max('id');
        $nextID = $nextID+1;
       
        DB::insert('insert into promo (id, promo, amount) values (?, ?, ?)', [$nextID, $PromoInput, $AmountInput]);

        return redirect()->back();
        //return back();
    }

    public function delb(){
        $bid = Input::get ( 'bId' );
        
        DB::table('blogs')->where('bid', '=',$bid)->delete();

        return redirect()->back();
    }

    public function delp(){
        $pid = Input::get ( 'pId' );
        
        DB::table('projects')->where('pid', '=',$pid)->delete();

        return redirect()->back();
    }

    public function delPromo(){
        $pid = Input::get ( 'prId' );
        
        DB::table('promo')->where('id', '=',$pid)->delete();

        return redirect()->back();
    }

    
}
