<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasoftwarewebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasoftwareweb', function (Blueprint $table) {
            $table->id();
            $table->string('Rendering Engine');
            $table->year('Engine Version');
            $table->string('CSS Grade');
            $table->unsignedBigInteger('dataapp_id');
            $table->foreign('dataapp_id')->references('id')->on('dataapp');
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
        Schema::dropIfExists('datasoftwareweb');
    }
}
