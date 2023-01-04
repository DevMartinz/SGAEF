<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("sec_name",250);
            $table->string("sec_cpf",11);
            $table->string("sec_rg",10);
            $table->string("sec_city",60);
            $table->string("sec_address",250);
            $table->string("sec_permi_lvl",50);
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
        Schema::dropIfExists('secretaries');
    }
}
