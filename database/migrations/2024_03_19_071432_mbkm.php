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
            $table->char('kodeMBKM', 5)->unique();
            $table->char('kodeMatkul', 6);
            $table->string('namaMitra', 50);
            $table->string('jenisProgram', 50);
            $table->string('jenisSkema', 50);
            $table->char('periode', 9);

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
