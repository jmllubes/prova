<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

Route::get('/read', [PostsController::class, 'index']);

Route::get('/post', [PostsController::class, 'index']);
Route::get('/post/students', [PostsController::class, 'display']);
Route::get('/post/{id}', [PostsController::class, 'show']);
Route::get('/contact', function () {  
  return view('layouts.contact');  
});
Route::post('posts.store', [PostsController::class, 'store'])->name('posts.store'); 
Route::get('posts.show', [PostsController::class, 'show'])->name('posts.show'); 
Route::get('posts.edit', [PostsController::class, 'edit'])->name('posts.edit'); 
Route::get('posts.destroy', [PostsController::class, 'destroy'])->name('posts.destroy'); 

Route::get('/insert', function () {
  DB::insert('insert into posts(titol,cos,is_admin) values(?,?,?)',
  ['software developer','himanshu is a software developer',0]);
});

Route::get('/select',function(){  
  $results=DB::select('select * from posts' );  
  foreach($results as $posts)  
  {  
  echo "titol es :".$posts->titol;  
  echo "<br>";  
  echo "cos es:".$posts->cos; 
  echo "<br>";  
  echo "admin:".$posts->is_admin;  
  echo "<br>";
  }  
  });  

Route::get('/', function () {
    return view('welcome');
});


Route::get('/prova/{age}', function () {
    return view('welcome');
})->middleware('age');

Route::get('/llibres2/{id?}/{name?}', function ($id='2',$name='prova') {
    return view('llibres2', ['id' => $id,
                            'name' => $name]);
});

Route::get('/llibres', function () {

    $llibres = [
        ['id' => 1, 'name' => 'Llibre 1'],
        ['id' => 2, 'name' => 'Llibre 2'],
        ['id' => 3, 'name' => 'Llibre 3'],
        ['id' => 4, 'name' => 'Llibre 4'],
        ['id' => 5, 'name' => 'Llibre 5'],
        ['id' => 6, 'name' => 'Llibre 6'],
        ['id' => 7, 'name' => 'Llibre 7'],
        ['id' => 8, 'name' => 'Llibre 8'],
        ['id' => 9, 'name' => 'Llibre 9'],
        ['id' => 10, 'name' => 'Llibre 10'],
    ];
    return view('llibres', ['llibres' =>$llibres]);
})->name('llibres');

Route::name('admin')->middleware(['age'])->group( function()  
{  
   Route::get('/first',function()  
 {  
   echo "first route";  
 })->name('one');  
  
   Route::get('/second',function()  
 {  
   echo "second route";  
 })->name('two');  
  
   Route::get('/third',function()  
 {  
   echo "third route";  
 })->name('three');  
 
});  
