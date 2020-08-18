<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::get('/register', function () {
    return redirect('/');
});

Route::get('/video-editing-services', function(){
	return view('services');
})->name('ves');

Route::get('/corporate-video-editing', function(){
	return view('corporate-video-editing');
})->name('corp');

Route::get('/promotional-video-editing', function(){
	return view('corporate-video-editing');
})->name('prom');

Route::get('/outdoor-video-editing', function(){
	return view('corporate-video-editing');
})->name('outd');

Route::get('/family-video-editing', function(){
	return view('corporate-video-editing');
})->name('fam');

Route::get('/custom-requirements', function(){
	return view('custom-requirements');
})->name('custom');


Route::get('/our-projects',function(){
	return view('projects');
})->name('our');

Route::get('/start-your-project',function(){
	return view('start');
})->name('start');

Route::get('/blogs', function(){
	$blog = DB::table('blogs')->orderBy('created_at','DESC')->paginate(3);
	 return view('blogs', ['blog' => $blog]);
})->name('blog');

Route::any('/blogs/{id}/{slug}', function ($bid) {
    //$SearchInput = Input::get ( 'SearchInput' );
   
    $blog = DB::table('blogs')->where('bid', '=', $bid)->get()->toArray();
    $blog=$blog[0];
        
    return view('blog', array('blog'=>$blog));
   
});

Route::get('/blogs/{bid}', function ($bid) {
    
    $blog = DB::table('blogs')->where('bid', '=', $bid)->get()->toArray();
    $blog=$blog[0];

    $blogName=$blog->bname;
    $slug = str_slug($blogName);
    
    return redirect('/blogs/'.$bid.'/'.$slug);
       
});

 Route::get('/invoices/{pid}', function ($pid) {
    
     if(Auth::guest())
     {
        return redirect('/');
    }
    else
    {
    	
    	$file= public_path()."/invoices/Invoice#".$pid.".pdf";
    	if(is_file($file)){
    		$headers = array(
        	'Content-Type: application/pdf',
        	);

    		return Response::download($file, 'Viflix Invoice#'.$pid.'.pdf', $headers);
    	}


    	else{
    		 return redirect()->back();
    	}
    	
    }
       
});



Route::get('/ask-us', function(){
	return view('ask');
})->name('ask');


Route::get('/privacy-policy', function(){
	return view('privacy');
})->name('privacy');

Route::get('/terms-and-conditions', function(){
	return view('toc');
})->name('toc');

Route::get('/adminp', function(){
	
	$blog = DB::table('blogs')->orderBy('created_at','DESC')->get()->toArray(); 
	$project = DB::table('projects')->orderBy('created_at','DESC')->get()->toArray(); 
    $promo = DB::table('promo')->orderBy('created_at','DESC')->get()->toArray();
   
    return view('adminp', array('blog'=>$blog, 'project'=>$project, 'promo'=>$promo));
	
})->name('adminp');

Route::get('/admin', function(){

		return redirect('/adminp');
	
})->name('admin');

Route::post('/addProject', 'ProjectController@add');
Route::post('/admin/addBlog', 'BlogController@addBlog');
Route::post('/admin/addPromo', 'AdminController@addPromo');
Route::post('/delPromo', 'AdminController@delPromo');
Route::post('/delBlog', 'AdminController@delb');
Route::post('/delProject', 'AdminController@delp');

Route::any('/contactMail', function(){

        $message=$_POST["content"];
        $cc=$message;
        $Cemail=$_POST["userEmail"];
        $subject= $_POST["subject"];
        $Cname= $_POST["userName"];

        $data = array('Cc'=>$cc, 'emailA'=> $Cemail, 'Cname'=> $Cname);

        $email='viflix9099@gmail.com';
        $name='Viflix Contact Form';

        Mail::send(['text'=>'contactm'], $data, function($message) use ($email, $subject, $name) {
         
        $message->to( $email , $name)->subject($subject);
        $message->from('bot@viflix.net','The Viflix Bot');
            

   });
     
            return redirect()->back()->with('message', 'Your message has been successfully submitted.');
});

Route::get('/start', 'ProjectController@index');
Route::get('/start/action', 'ProjectController@action')->name('promo_search.action');

Route::get('summernoteeditor',array('as'=>'summernoteeditor.get','uses'=>'SummernotefileController@getSummernoteeditor'));

Route::post('summernoteeditor',array('as'=>'summernoteeditor.post','uses'=>'SummernotefileController@postSummernoteeditor'));

Route::get('/download/pdf', 'ProjectController@downlodinstructions')->name('download.insructions');

