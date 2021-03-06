<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string ('photo', 100);
            $table->string ('nama',100);
            $table->boolean ('jenis_kelamin',100);
            $table->string ('telepon',15);
            $table->string ('alamat',100);
            $table->string ('email',100);
            $table->string ('kategori_member',100);
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
        Schema::dropIfExists('pelanggans');
    }
}
