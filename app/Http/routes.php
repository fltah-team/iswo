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

Route::get('/', function () {
    return view('index');
}); 

Route::get('home', function () {
    return view('index');
}); 

/* ---- Sponsor ---*/
Route::get('sponsor','sponsor_controller@index');
Route::get('sponsor/create','sponsor_controller@create');
Route::post('sponsor/create','sponsor_controller@store');
Route::get('sponsor/{id}','sponsor_controller@show');

Route::delete('sponsor/{id}','sponsor_controller@destroy');
Route::patch('sponsor/{id}','sponsor_controller@update');

/* ---- Orphan ---*/
Route::get('orphan','orphan_controller@index');
Route::get('orphan/create','orphan_controller@create');
Route::post('orphan/create','orphan_controller@store');
Route::get('orphan/{id}','orphan_controller@show');
/* -------  ORPHAN -------  
Route::get('orphan/create', function () {
    return view('orphan.add_orphan');
});

Route::post('orphan/create',function (Request $request){
    $orphan = new App\Orphans;
    $orphan->status = $request::input('status');
    $orphan->sponsor = $request::input('sponsor');
    $birth_date = $request::input('y').'-'.$request::input('m').'-'.$request::input('d');
    $orphan->birth_date = $birth_date;
    $orphan->sex = $request::input('gender');
    $orphan->name1 = $request::input('name1');
    $orphan->name2 = $request::input('name2');
    $orphan->name3 = $request::input('name3');
    $orphan->name4 = $request::input('name4');

    //  Mother 
    $orphan->m_name1 = $request::input('m_name1');
    $orphan->m_name2 = $request::input('m_name2');
    $orphan->m_name3 = $request::input('m_name3');
    $orphan->m_name4 = $request::input('m_name4');
    $m_birth_date = $request::input('m_y').'-'.$request::input('m_m').'-'.$request::input('m_d');
    $orphan->m_birth_date = $m_birth_date;
    $orphan->m_status = $request::input('m_status');

    // Father 
    $f_dead_date = $request::input('f_y').'-'.$request::input('f_m').'-'.$request::input('f_d');
    $orphan->f_dead_date = $f_dead_date;
    $orphan->f_dead_cause = $request::input('f_dead_cause');
    $orphan->f_last_work = $request::input('f_last_work');
    $orphan->state = $request::input('state');
    $orphan->city = $request::input('city');
    $orphan->district = $request::input('district');
    $orphan->section = $request::input('section');
    $orphan->house_no = $request::input('house_no');
    $orphan->tel1 = $request::input('tel1');
    $orphan->tel2 = $request::input('tel2');
    $orphan->study = $request::input('study');
    $orphan->unstudy_cause = $request::input('unstudy_cause');
    $orphan->school = $request::input('school');
    $orphan->level = $request::input('level');
    $orphan->class = $request::input('class');
    $orphan->q_parts = $request::input('q_parts');
    $orphan->health = $request::input('health');
    $orphan->illness = $request::input('illness');


    $orphan->save();
    return redirect('orphan/create');
});

