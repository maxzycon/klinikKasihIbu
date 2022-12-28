<?php

use App\Models\RumahSakit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('category_rs', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(RumahSakit::class)->constrained();
            $table->string("nama_kategori");
            $table->integer("max_queue")->default(0);
            $table->time("start_time");
            $table->time("end_time");
            $table->integer("jumlah_hari")->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_rs');
    }
};
