<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mbkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mbkm', function (Blueprint $table) {
            $table->id();
            $table->char('kodeMBKM', 5);
            $table->char('kodeMatkul', 6)->nullable();
            $table->string('nik', 8)->nullable();
            $table->char('nim', 8)->nullable();
            $table->string('namaMitra', 50)->nullable();
            $table->string('jenisProgram', 50)->nullable();
            $table->string('jenisSkema', 50)->nullable();
            $table->string('namaMatkul', 50)->nullable();
            $table->string('sks', 50)->nullable();
            $table->string('namaDosen', 50)->nullable();
            $table->char('periode', 9)->nullable();


            // Constraints

            // Additional Constraints
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
        //
    }
}
