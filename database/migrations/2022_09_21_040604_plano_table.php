<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_cliente');
            $table->foreign('fk_cliente')->references('id')->on('cliente');
            $table->string('regiao')->nullable();
            $table->string('persornalizar_1')->nullable();
            $table->string('nome')->nullable();
            $table->string('campanha')->nullable();
            $table->string('publico_alvo')->nullable();
            $table->string('objetivo')->nullable();
            $table->string('veiculo')->nullable();
            $table->string('canal')->nullable();
            $table->string('formatos')->nullable();
            $table->string('modelos_compra')->nullable();
            $table->timestampTz('periodo')->nullable();
            $table->decimal('investimento')->nullable();
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
