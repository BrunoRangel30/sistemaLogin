<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClienteOrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_org', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_org');
            $table->unsignedBigInteger('fk_cliente');
            $table->foreign('fk_org')->references('id')->on('organizacao');
            $table->foreign('fk_cliente')->references('id')->on('cliente');
            $table->softDeletes();
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
        //
    }
}
