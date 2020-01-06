<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClassColumnToCraftsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('crafts', function (Blueprint $table) {
            $table->string('class')->nullable()->after('buyer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('crafts', function (Blueprint $table) {
            $table->dropColumn('class');
        });
    }
}
