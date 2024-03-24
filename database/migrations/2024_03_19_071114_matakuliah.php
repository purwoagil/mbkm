<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Matakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id();
            $table->char('kodeMatkul', 6)->unique();
            $table->char('nik', 8)->nullable();
            $table->string('namaMatkul', 50)->nullable();
            $table->string('sks',2)->nullable();
            $table->string('namaDosen', 50)->nullable();
            $table->char('nilai', 2)->nullable();


            // Timestamps
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
