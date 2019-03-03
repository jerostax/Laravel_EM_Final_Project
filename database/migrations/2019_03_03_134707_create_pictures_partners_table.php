<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre', 100);
            $table->string('lien', 100);
            $table->unsignedInteger('partner_id');
            $table->timestamps();

            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures_partners');
    }
}
