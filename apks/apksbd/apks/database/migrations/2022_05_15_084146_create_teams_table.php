<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('member_designation');
            $table->string('member_board_access');
            $table->string('member_photo')->nullable();
            $table->string('member_facebook')->nullable();
            $table->string('member_twitter')->nullable();
            $table->string('member_instagram')->nullable();
            $table->string('status')->default();
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
        Schema::dropIfExists('teams');
    }
};
