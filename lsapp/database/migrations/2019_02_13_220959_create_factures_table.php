<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('abonnement_id')->unsigned()->index()->nullable();
            $table->string('mois');
            $table->double('consomation');
            $table->integer('prix');
            $table->boolean('reglement')->default(false);
            $table->foreign('abonnement_id')
            ->references('id')
            ->on('abonnements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
