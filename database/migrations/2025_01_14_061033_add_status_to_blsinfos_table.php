<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToBlsinfosTable extends Migration
{
    public function up()
    {
        Schema::table('blsinfos', function (Blueprint $table) {
            $table->string('Status')->nullable(); // You can modify the data type and nullable as needed
        });
    }

    public function down()
    {
        Schema::table('blsinfos', function (Blueprint $table) {
            $table->dropColumn('Status');
        });
    }
}