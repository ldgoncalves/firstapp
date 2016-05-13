<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Painting; //need to add to route Eloquent model

Route::get('/', function () {
    /* //creating tables within database
    Schema::create('art', function($newtable){
       $newtable->increments('id');
        $newtable->string('artist');
        $newtable->string('title', 500);
        $newtable->text('description');
        $newtable->date('created');
        $newtable->date('exhibition_date');
        $newtable->timestamps();
    });*/

//    Schema::table('art', function($newtable){
//        $newtable->boolean('alumni');
//        $newtable->dropColumn('exhibition_date');
//    });

//   $painting = new Painting;
//     $painting->title = 'Do No Wrong';
//     $painting->artist = 'D. DoRight';
//     $painting->year = 2014;
//     $painting->save();

//     return view('welcome');

    $painting = Painting::find(1);
    $painting->title= 'Do No Wrong - Just Do Right';
    $painting->save();
    return $painting->title;

//    Schema::table('paintings', function($thePainting){
//        $thePainting->renameColumn('ids', 'id');
//    });
});

Route::get('about', function(){
   return 'About content goes here.';
});

Route::get('about/directions', function(){
    return 'Directions go here.';
});

Route::get('about/{theSubject}', function($theSubject){
    return $theSubject.' content goes here.';
});

Route::get('about/classes/{theSubject}', function($theSubject){
    return "Content about {$theSubject} classes goes here."; //If your passing a param within a string use double quotes.
});