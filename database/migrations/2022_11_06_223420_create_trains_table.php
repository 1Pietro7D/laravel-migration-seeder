<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Azienda
    // Stazione di partenza
    // Stazione di arrivo
    // Orario di partenza
    // Orario di arrivo
    // Codice Treno
    // Numero Carrozze
    // In orario
    // Cancellato

    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 150);  //tabella?
            $table->string('Stazione_di_partenza', 150);  //tabella?
            $table->string('Stazione_di_arrivo', 150);  //tabella?
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->date('Data_di_partenza');
            $table->date('Data_di_arrivo');
            $table->string('Codice_Treno', 10)->unique();
            $table->tinyInteger('Numero_Carrozze')->unsigned()->default(0);
            $table->boolean('In_orario')->default(true);
            $table->tinyInteger('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
