<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettlementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlement', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('id_trans');
            $table->date('date_trans');
            $table->date('date_settlement');
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
            $table->string('settlement_status');
            $table->string('settlement_desc');
            $table->string('etoll_hash');
            $table->string('file_name');
            $table->string('simop_status');
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
        Schema::dropIfExists('settlement');
    }
}
