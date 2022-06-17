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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->enum('document_type', ['DNI', 'RUC', 'CE', 'Pasaporte'])->default('DNI');
            $table->string('document_number', 30)->unique();
            $table->string('fullname', 90);
            $table->string('username', 45)->unique();
            $table->string('address', 90);
            $table->string('email', 90)->unique();
            $table->string('cellphone', 30)->unique();
            $table->string('phone', 30)->unique();

            $table->timestamps();

            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
