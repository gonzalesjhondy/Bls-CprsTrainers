<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfWorkOthersToBlsinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blsinfos', function (Blueprint $table) {
            $table->string('ProfWorkOthers')->nullable(); // You can modify the data type and nullable as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blsinfos', function (Blueprint $table) {
            $table->string('ProfWorkOthers')->nullable(); // You can modify the data type and nullable as needed
        });
    }
}
