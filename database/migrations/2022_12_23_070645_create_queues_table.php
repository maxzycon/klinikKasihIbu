<?php

use App\Models\CategoryRs;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(CategoryRs::class)->constrained();
            $table->integer("priority");
            $table->longText("alasan")->nullable();
            $table->date("tanggal_antrian");
            $table->string("nomor_antrian");
            $table->boolean("isFinish");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('queues');
    }
};
