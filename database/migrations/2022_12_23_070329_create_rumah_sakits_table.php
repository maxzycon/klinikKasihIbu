<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('rumah_sakits', function (Blueprint $table) {
            $table->id();

            $table->string("nama_rs");
            $table->longText("alamat_rs");
            $table->string("thumbnail_rs");
            $table->longText("descriptiton_rs");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rumah_sakits');
    }
};
