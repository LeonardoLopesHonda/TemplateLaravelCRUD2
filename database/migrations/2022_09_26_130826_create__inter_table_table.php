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
        Schema::create('_inter_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('usuario_id')->references('id')->on('users-table');
            $table->foreign('produto_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_inter_table');
    }
};

