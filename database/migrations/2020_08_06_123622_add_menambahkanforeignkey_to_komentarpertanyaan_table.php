<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMenambahkanforeignkeyToKomentarpertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentarpertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id');

            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');

            $table->unsignedBigInteger('profile_id');

            $table->foreign('profile_id')->references('id')->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['pertanyaan_id']);
        $table->dropColumn('pertanyaan_id');
        $table->dropForeign(['profile_id']);
        $table->dropColumn('profile_id');
    }
}
