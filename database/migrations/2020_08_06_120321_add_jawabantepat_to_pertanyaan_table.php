<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabantepatToPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('jawabantepat_id');
            $table->foreign('jawabantepat_id')->references('id')->on('jawaban');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profile');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['jawabantepat_id']);
        $table->dropColumn(['jawabantepat_id']);
        $table->dropForeign(['profile_id']);
        $table->dropColumn(['profile_id']);
       
    }
}
