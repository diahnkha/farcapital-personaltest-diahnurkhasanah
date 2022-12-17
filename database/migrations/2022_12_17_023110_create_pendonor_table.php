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
        Schema::create('pendonor', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 50);
            $table->string("email", 50)->unique();
            $table->text("password");
            $table->tinyInteger("jenis_kelamin");
            $table->date("tanggal_lahir");
            $table->text("alamat");
            $table->tinyInteger("status_kelayakan");
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
        Schema::dropIfExists('pendonor');
    }
};
