<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnConductedTrainingIdToHistoryTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('history_training', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('conducted_id')->nullable()->after('id');
            $table->foreign('conducted_id')->references('id')->on('training_conducted')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('history_training', function (Blueprint $table) {
            //
        });
    }
}
