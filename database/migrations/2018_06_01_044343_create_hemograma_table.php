<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHemogramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hemograma', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->double('parametro1');
            $table->double('parametro2');
            $table->double('parametro3');
            $table->double('parametro4');
            $table->double('parametro5');
            $table->double('parametro6');
            $table->double('parametro7');
            $table->double('parametro8');
            $table->double('parametro9');
            $table->double('parametro10');
            $table->double('parametro11');
            $table->double('parametro12');
            $table->double('parametro13');
            $table->double('parametro14');
            $table->double('parametro15');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *$table->integer('user_id');
     *$table->double('RBC (x 10^12/L)');
     *$table->double('HGB (g/dL)');
     *$table->double('HTC (%)');
     *$table->double('MCV (fL)');
     *$table->double('MCH (pg)');
     *$table->double('MCHC (g/dL)');
     *$table->double('RDW (%)');
     *$table->double('PLT (x 10^9/L)');
     *$table->double('MPV (fL)');
     *$table->double('WBC (x 10^9/L)');
     *$table->double('NEU (x 10^9/L)');
     *$table->double('LYM (x 10^9/L)');
     *$table->double('MONO (x 10^9/L)');
     *$table->double('EOS (x 10^9/L)');
     *$table->double('BASO (x 10^9/L)');
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hemograma');
    }
}
