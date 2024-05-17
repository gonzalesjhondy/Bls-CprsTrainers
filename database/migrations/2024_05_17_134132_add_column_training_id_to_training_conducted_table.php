<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTrainingIdToTrainingConductedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_conducted', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('trainer_id')->nullable()->after('id');
            $table->foreign('trainer_id')->references('id')->on('trainer')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_conducted', function (Blueprint $table) {
            //
        });
    }
}
