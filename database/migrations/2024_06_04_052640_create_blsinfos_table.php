<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlsinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blsinfos', function (Blueprint $table) {
            $table->id();
            $table->string('BlsId');
            $table->string('Email')->nullable();
            $table->string('Lastname');
            $table->string('Firstname');
            $table->string('Middlename');
            $table->string('Suffix');
            $table->string('Gender');
            $table->string('ContactNum');
            $table->string('AreaOfAssignment');
            $table->string('AreaOfAssignmentSub');
            $table->string('AgeBracketDesc');
            $table->string('ProfWorkDesc');
            $table->date('TrainingDate');
            $table->string('TrainingPlace');
            $table->string('AgencyConducted');
            $table->string('AgencyConductedOthers')->nullable();
            $table->string('ConductedSixTraining');
            $table->date('TrnFrom1')->nullable();
            $table->date('TrnTo1')->nullable();
            $table->string('TrnFtOthers1')->nullable();
            $table->date('TrnFrom2')->nullable();
            $table->date('TrnTo2')->nullable();
            $table->string('TrnFtOthers2')->nullable();
            $table->date('TrnFrom3')->nullable();
            $table->date('TrnTo3')->nullable();
            $table->string('TrnFtOthers3')->nullable();
            $table->date('TrnFrom4')->nullable();
            $table->date('TrnTo4')->nullable();
            $table->string('TrnFtOthers4')->nullable();
            $table->date('TrnFrom5')->nullable();
            $table->date('TrnTo5')->nullable();
            $table->string('TrnFtOthers5')->nullable();
            $table->date('TrnFrom6')->nullable();
            $table->date('TrnTo6')->nullable();
            $table->string('TrnFtOthers6')->nullable();
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
        Schema::dropIfExists('blsinfos');
    }
}
