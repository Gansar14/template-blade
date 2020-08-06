<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabanrevisiToJawabaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pertanyaan');

            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaan');

            $table->unsignedBigInteger('id_profile');

            $table->foreign('id_profile')->references('id')->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['id_pertanyaan']);
        $table->dropColumn('id_pertanyaan');
        $table->dropForeign(['id_profile']);
        $table->dropColumn('id_profile');
  
    }
}
