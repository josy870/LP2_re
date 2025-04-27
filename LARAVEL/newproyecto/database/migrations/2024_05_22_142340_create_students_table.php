<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 45);
            $table->string('lastname', 45);
            $table->string('code', 45);
            $table->enum('gender', ['male', 'female', 'other']); // Ajusta según los valores permitidos
            $table->string('document', 45);
            $table->string('email', 45);
            $table->string('cellphone', 45);
            $table->date('birthdate');
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
        Schema::dropIfExists('students');
    }
}
