<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGatepassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gatepass', function (Blueprint $table) {
            $table->string('id_trans');
            $table->date('date_trans');
            $table->string('tapping_type');
            $table->string('vehicle_type');
            $table->string('visitor_type');
            $table->string('tid');
            $table->string('member_id');
            $table->string('bank_id');
            $table->string('lane_id');
            $table->string('pos_id');
            $table->string('gerbang_id');
            $table->string('branch_id');
            $table->string('card_number');
            $table->string('tarif');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gatepass');
    }
}
