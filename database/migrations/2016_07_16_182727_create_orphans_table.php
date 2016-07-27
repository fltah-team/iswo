<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrphansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orphan', function (Blueprint $table) {
            // Orphan basic data
            $table->increments('id');
            $table->integer('status')->default(1);
            $table->integer('sponsor')->default(1);
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('name4');
            $table->date('birth_date');
            $table->integer('sex')->default(1);
            // mother 
            $table->string('m_name1');
            $table->string('m_name2');
            $table->string('m_name3');
            $table->string('m_name4');
            $table->date('m_birth_date');
            $table->integer('m_status')->default(1);
            // father
            $table->date('f_dead_date');
            $table->string('f_dead_cause');
            $table->string('f_last_work');
            // adress
            $table->integer('state')->default(1);
            $table->string('city');
            $table->string('district');
            $table->string('section');
            $table->string('house_no');
            $table->string('tel1');
            $table->string('tel2');
            // study
            $table->integer('study')->default(1);
            $table->string('unstudy_cause');
            $table->string('school');
            $table->string('level');
            $table->string('class');
            $table->integer('q_parts')->default(0);
            // health
            $table->integer('health')->default(1);
            $table->string('illness');
            // other data
            $table->string('data_entry_name');
            $table->date('data_entry_date');
            $table->string('head_dep_name')->nullable();
            $table->date('head_dep_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orphan');
    }
}
