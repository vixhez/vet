<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressesToOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->string("address_1")->nullable();
            $table->string("address_2")->nullable();
            $table->string("town")->nullable();
            $table->string("postcode")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->dropColumn("address_1");
            $table->dropColumn("address_2");
            $table->dropColumn("town");
            $table->dropColumn("postcode");
        });
    }
}
