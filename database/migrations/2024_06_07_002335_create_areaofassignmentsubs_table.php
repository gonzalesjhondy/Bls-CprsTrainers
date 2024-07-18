<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaofassignmentsubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areaofassignmentsubs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('AreaOfAssignmentId');
            $table->string('AreaAssignmentSub');
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('AreaOfAssignmentId')->references('id')->on('areaofassignments')->onDelete('cascade');

            // Define foreign key relationship
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areaofassignmentsubs');
    }
}
