<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prof_id');
            $table->unsignedBigInteger('sem_id');
            $table->string('Subj_title') ;
            $table->integer('Subj_dayM')->nullable()->default(0) ;
            $table->integer('Subj_dayT')->nullable()->default(0) ;
            $table->integer('Subj_dayW')->nullable()->default(0) ;
            $table->integer('Subj_dayTH')->nullable()->default(0) ;
            $table->integer('Subj_dayF')->nullable()->default(0) ;
            $table->integer('Subj_dayS')->nullable()->default(0) ;
            $table->integer('Subj_daySu')->nullable()->default(0) ;
            $table->time('Subj_timein') ;
            $table->time('Subj_timeout') ;
            $table->string('Subj_desc') ;
            $table->string('Subj_units') ;
            $table->string('Subj_room') ;
            $table->string('Subj_yr_sec');
            $table->string('Prof_code');
            // $table->timestamps();

            $table->foreign('prof_id')->references('id')->on('professors');
            $table->foreign('sem_id')->references('id')->on('semesters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
