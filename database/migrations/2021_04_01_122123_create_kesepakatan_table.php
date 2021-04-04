<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use DB;

class CreateKesepakatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('status_kesepakatan', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi_status', 20);
        });

        Schema::create('durasi_kesepakatan', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi_durasi', 45);
        });

        Schema::create('kesepakatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_swalayan')->unsigned();
            $table->bigInteger('id_produk')->unsigned();
            $table->bigInteger('id_status_kesepakatan')->unsigned();
            $table->bigInteger('id_durasi_kesepakatan')->unsigned();
            $table->timestamps();

            $table->foreign('id_swalayan')->references('id')->on('swalayan');
            $table->foreign('id_produk')->references('id')->on('produk');
            $table->foreign('id_status_kesepakatan')->references('id')->on('status_kesepakatan');
            $table->foreign('id_durasi_kesepakatan')->references('id')->on('durasi_kesepakatan');
        });
        
        DB::table('status_kesepakatan')->insert([
            [
                "deskripsi_status" => "Sedang Direquest"
            ],
            [
                "deskripsi_status" => "Aktif"
            ],
            [
                "deskripsi_status" => "Ditolak"
            ],
            [
                "deskripsi_status" => "Selesai"
            ],
        ]);

        DB::table('durasi_kesepakatan')->insert([
            [
                "deskripsi_durasi" => "Setahun"
            ],
            [
                "deskripsi_durasi" => "6 Bulan"
            ],
            [
                "deskripsi_durasi" => "3 Bulan"
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kesepakatan');
        Schema::dropIfExists('durasi_kesepakatan');
        Schema::dropIfExists('status_kesepakatan');
    }
}
