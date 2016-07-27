<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Orphans ;
class orphan_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orphans = Orphans::all();
        $title="بيانات الأيتام";
        return view('orphan.show_orphans')->with('title',$title)->with('orphans',$orphans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="اضافة بتيم جديد";
        return view('orphan.add_orphan')->with('title',$title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $orphan = new Orphans;
    $orphan->status = $request->status;
    $orphan->sponsor = $request->sponsor;
    $birth_date = $request->y.'-'.$request->m.'-'.$request->d;
    $orphan->birth_date = $birth_date;
    $orphan->sex = $request->gender;
    $orphan->name1 = $request->name1;
    $orphan->name2 = $request->name2;
    $orphan->name3 = $request->name3;
    $orphan->name4 = $request->name4;

    //  Mother 
    $orphan->m_name1 = $request->m_name1;
    $orphan->m_name2 = $request->m_name2;
    $orphan->m_name3 = $request->m_name3;
    $orphan->m_name4 = $request->m_name4;
    $m_birth_date = $request->m_y.'-'.$request->m_m.'-'.$request->m_d;
    $orphan->m_birth_date = $m_birth_date;
    $orphan->m_status = $request->m_status;

    // Father 
    $f_dead_date = $request->f_y.'-'.$request->f_m.'-'.$request->f_d;
    $orphan->f_dead_date = $f_dead_date;
    $orphan->f_dead_cause = $request->f_dead_cause;
    $orphan->f_last_work = $request->f_last_work;
    $orphan->state = $request->state;
    $orphan->city = $request->city;
    $orphan->district = $request->district;
    $orphan->section = $request->section;
    $orphan->house_no = $request->house_no;
    $orphan->tel1 = $request->tel1;
    $orphan->tel2 = $request->tel2;
    $orphan->study = $request->study;
    $orphan->unstudy_cause = $request->unstudy_cause;
    $orphan->school = $request->school;
    $orphan->level = $request->level;
    $orphan->class = $request->class;
    $orphan->q_parts = $request->q_parts;
    $orphan->health = $request->health;
    $orphan->illness = $request->illness;


    $orphan->save();
    $orphans = Orphans::all();
    $title="بيانات الأيتام";
    $class = "alert alert-success";
    $message = "تمت اضافة اليتيم بنجاح";
    return view('orphan.orphan_alert')->with('title',$title)
                                      ->with('class',$class)
                                      ->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orphan = Orphans::find($id);
        return view('orphan.show_orphan')->with('orphan',$orphan);
        /*$orphans = Orphans::where("$id");
        $title="بيانات الأيتام";
        return view('orphan.show_orphans')->with('title',$title)->with('orphans',$orphans);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "editing orphan data id = ".$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orphan = Orphan::find($id);
        $orphan->name1 = $request->name1;

        $orphan->save();
        return "updated = ".$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orphan::destroy($id);
        return "delete orphan data id = ".$id;
    }
}
