<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToVehicleIns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('vehicle_ins', function (Blueprint $table) {
        $table->integer('status')->default(0);
    });
}

public function down()
{
    Schema::table('vehicle_ins', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}

}
