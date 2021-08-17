<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacksTable extends Migration {

    public function up() {
        Schema::create('backs', function (Blueprint $table) {
            $table->id();
            $table->integer('user');
            $table->integer('business');

            $table->integer('consecutive');
            $table->string('backcode', 16);

            $table->string('transport', 36);
            $table->string('driver', 50);
            $table->string('vehicle_plate', 10);

            $table->string('exit_departament', 64);
            $table->string('exit_municipality', 64);
            $table->text('exit_address');
            $table->date('exit_date')->nullable();

            $table->string('arrival_departament', 64);
            $table->string('arrival_municipality', 64);
            $table->text('arrival_address');
            $table->string('arrival_date', 64)->nullable();
            
            $table->string('user_generator', 256);
            $table->integer('user_identity');
            $table->string('user_phone', 16);

            $table->longText('commodity'); // Mercancia
            $table->tinyInteger('packing')->nullable();
            $table->string('freigh', 128); // Flete

            $table->decimal('price', 22, 0); // Valor del respaldo
            $table->decimal('percentage', 22, 0); // Porcentaje del respaldo
            $table->decimal('total', 22, 0); // Total
            $table->integer('approved');
            $table->integer('delete_requested')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('backs');
    }
}
