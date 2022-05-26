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
        //criação de tabela no banco de dados
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('brand');
            $table->string('type');
            $table->string('quantity')->nullable();
            $table->string('desc');
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
        Schema::dropIfExists('produtos');
    }
};
