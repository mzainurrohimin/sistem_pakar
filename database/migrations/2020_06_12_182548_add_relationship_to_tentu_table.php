<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToTentuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tentu', function (Blueprint $table) {
            $table->foreign('gejala_id')
            ->references('id')->on('gejala')
            ->onDelete('cascade');
            $table->foreign('penyakit_id')
            ->references('id')->on('penyakit')
            ->onDelete('cascade');
            $table->foreign('solusi_id')
            ->references('id')->on('solusi')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tentu', function (Blueprint $table) {
            $table->dropForeign('tentu_gejala_id_foreign');
            $table->dropForeign('tentu_penyakit_id_foreign');
            $table->dropForeign('tentu_solusi_id_foreign');
        });
    }
}
