<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmember', function (Blueprint $table) {
            $table->increments('id');
            $table->string('memberNama');
            $table->string('memberJabatan');
            $table->text('memberAlamat');
            $table->string('memberLevel');
            //$table->string('memberPicture');
            //$table->string('path');
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
        Schema::dropIfExists('tmember');
    }
}
