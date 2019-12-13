<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceAndBuyerToCraftsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('crafts', function (Blueprint $table) {
            $table->float('price', 10, 2)->nullable()->after('mats');
            $table->string('buyer')->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('crafts', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('buyer');
        });
    }
}
