<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOrganizacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_organizacao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('fk_org');
            $table->unsignedBigInteger('fk_user');
            $table->foreign('fk_org')->references('id')->on('organizacao');
            $table->foreign('fk_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_organizacao');
    }
}
