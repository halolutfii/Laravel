<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBrowserToDatasoftwarewebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datasoftwareweb', function (Blueprint $table) {
            $table->string('Browser')->after('Rendering Engine')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datasoftwareweb', function (Blueprint $table) {
            $table->dropColumn('Browser');
        });
    }
}
