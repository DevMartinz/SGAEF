<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("p_name",250);
            $table->string("p_cpf",11);
            $table->string("p_rg",10);
            $table->string("p_city",60);
            $table->string("p_address",250);
            $table->string("p_hierarchy",50);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('principals');
    }
}
