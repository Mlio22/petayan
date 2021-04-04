<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('id_petani')->unsigned();
            $table->string('nama_produk', 100);
            $table->integer('harga_produk');
            $table->string('kategori_produk', 10);
            $table->string('gambar_produk', 100)->nullable();
            $table->integer('waktu_kadaluarsa');
            $table->timestamps();

            $table->foreign('id_petani')->references('id')->on('petani');
        });

        DB::table('produk')
            -> insert([[
                'id_petani' => 1,
                'nama_produk' => 'mangga',
                'kategori_produk' => 'buah',
                'harga_produk' => 90000,
                'waktu_kadaluarsa' => 9
            ],
            [
                'id_petani' => 1,
                'nama_produk' => 'sawi',
                'kategori_produk' => 'sayur',
                'harga_produk' => 100000,
                'waktu_kadaluarsa' => 10
            ],
            [
                'id_petani' => 1,
                'nama_produk' => 'pisang',
                'kategori_produk' => 'buah',
                'harga_produk' => 200000,
                'waktu_kadaluarsa' => 12
            ],]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
