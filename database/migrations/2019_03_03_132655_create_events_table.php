<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('titre', 100);
            $table->text('description');
            $table->decimal('prix', 6, 2);
            $table->decimal('promo', 6,2);
            $table->text('form');
            $table->date('date');
            $table->enum('status', ['Publié', 'Brouillon']);
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
        Schema::dropIfExists('events');
    }
}
