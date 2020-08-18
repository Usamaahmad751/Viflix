<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Mail;
use Auth;
use PDF;

class ProjectController extends Controller
{
    public function index()
    {
     return view('start');
    }
    //
    public function add(Request $request){
        $total = Input::get ( 'total' );
    	$name = Input::get ( 'name' );
        $email = Input::get ( 'email' );
        $category = Input::get ( 'category' );
        $rawlength = Input::get ( 'rawlength' );
        $totallength = Input::get ( 'totallength' );
        $music = Input::get ( 'music' );
        $description = Input::get ( 'description' );
        $promo= Input::get ( 'promoamount' );

        if($name === NULL) {
        	$name = "Unspecifed";
        }   
        if($music === NULL) {
        	$music = "null";
        }
        

        DB::insert('insert into projects (name, email, totallength, rawlength , category, music, description, promo, cost) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$name, $email, $totallength, $rawlength, $category, $music, $description,$promo, $total]);


        //$nextID = DB::table('projects')->max('Pid');

        $nextID = DB::table('projects')->max('Pid');
        
        // Pdf Generation
        date_default_timezone_set('Asia/Karachi');
        $data = ['title' => $nextID, 'name'=>$name, 'email'=>$email, 'category'=>$category, 'totallength'=>$totallength, 'rawlength'=>$rawlength, 'music'=> $music, 'description'=>$description, 'promo'=> $promo , 'total'=> $total,'date'=>  date("d/m/Y") ];
        $pdf = PDF::loadView('invoicet', $data);
        $filePath= public_path('/invoices').'/Invoice#'.$nextID.'.pdf';
        $pdf->save($filePath);

        // Pdf Generation

        // Customer Email
        $data = array('name'=>$name, 'category'=>$category, 'id'=>$nextID   );
        $subject = "Viflix Invoice#".$nextID;

        Mail::send(['text'=>'mail'], $data, function($message) use ($email, $subject, $name, $filePath, $nextID) {
         
         $message->to( $email , $name)->subject
         ($subject);
         $message->from('bot@viflix.net','The Viflix Team')
         ->attach($filePath, [
        'as' => 'Viflix Invoice#'.$nextID.'.pdf',
        'mime' => 'application/pdf',
    ]);
        });

        // Customer Email

        // Admin Email
        $data = array('name'=>$name, 'category'=>$category, 'id'=>$nextID   );
        $subject = "Project#".$nextID.' - Viflix';
        $email = 'viflix9099@gmail.com';
        $name='Admin';
        Mail::send(['text'=>'notification'], $data, function($message) use ($email, $subject, $name, $filePath, $nextID) {
         
         $message->to( $email , $name)->subject
         ($subject);
         $message->from('bot@viflix.net','The Viflix Bot')
         ->attach($filePath, [
        'as' => 'Viflix Invoice#'.$nextID.'.pdf',
        'mime' => 'application/pdf',
    ]);
        });
        // Admin Email
        

        return redirect()->back()->with('message', 'Your Project details have been successfully submitted.');
    }

    public function action(Request $request){
        if($request->ajax()){
            $output = '';
            $promoamount = 0;
            $query = $request->get('query');

            if($query != ''){
                $data = DB::table('promo')
                    ->where('promo', $query)
                    ->value('amount');
                if ($data != null) {
                    $promoamount = $data;
                    $output .= '
                    <h4 style="color: green; font-weight: normal; margin-bottom: 0; display: inline-block;"> You have availed a discount of: </h4><span id="discount" style="font-weight: bold; display: inline-block;float: right;"></span><span style="color:green; display: inline-block; float: right;"> '.$data.' %</span>';
                }
                else{
                    $data = 0;
                    $output .= '
                    <h4 style="color: red ;font-weight: normal; margin-bottom: 0; display: inline-block;"> Invalid promo code! </h4><span id="discount" style="font-weight: bold; display: inline-block;float: right;"></span><span style="display: inline-block; float: right;"></span>';
                }
                

            }
            else{
                $data = 0;
                $output .= '
                <h4 style="font-weight: normal; margin-bottom: 0; display: inline-block;"> You have availed a discount of: </h4><span id="discount" style="font-weight: bold; display: inline-block;float: right;"></span><span style="display: inline-block; float: right;"> '.$data.' %</span>';
            }

            $data = array(
                'discountrow'  => $output,
                'promoamount'  => $promoamount
            );

            echo json_encode($data);
        }
    }

    public function downlodinstructions(Request $request){
        $headers = [
              'Content-Type' => 'application/pdf',
           ];
        $file = public_path(). '/instructions/Viflixinstructionmanual.pdf';
        return response()->download($file, 'Viflixinstructionmanual.pdf', $headers);
    }

}
