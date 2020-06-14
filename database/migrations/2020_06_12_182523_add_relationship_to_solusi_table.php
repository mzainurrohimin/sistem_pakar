<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToSolusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solusi', function (Blueprint $table) {
            Schema::table('solusi', function (Blueprint $table) {
                $table->foreign('penyakit_id')
                ->references('id')->on('penyakit')
                ->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solusi', function (Blueprint $table) {
            $table->dropForeign('solusi_penyakit_id_foreign');
        });
    }
}
