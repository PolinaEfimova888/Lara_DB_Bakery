<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);

            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('locations');

            $table->bigInteger('phone_number_id')->unsigned();
            $table->foreign('phone_number_id')->references('id')->on('phone_numbers');

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
        Schema::dropIfExists('clients');

        Schema::table('clients', function ($table) {
            $table->dropForeign('clients_address_id_foreign');
            $table->dropColumn('address_id');
            $table->dropForeign('clients_phone_number_id_foreign');
            $table->dropColumn('phone_number_id');
    
        });
    }
}
