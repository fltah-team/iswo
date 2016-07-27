<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orphans extends Model
{
    protected $table = 'orphan';
    protected $fillable = [
        'status','sponsor','name1','name2','name3','name4',
        'birth_date','sex',
        'm_name1','m_name2','m_name3','m_name4','m_birth_date','m_status',
        'f_dead_date','f_dead_cause','f_last_work',
        'state','city','district','section','house_no','tel1','tel2',
        'study','unstudy_cause','school','level','class','q_parts',
        'health','illness'
    ];
}
