<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petani', function (Blueprint $table) {
            $table->id();
            $table->string('username', 45);
            $table->string('password', 45);
            $table->string('email', 100);
            $table->string('nama', 45);
            $table->string('lokasi_provinsi', 45);
            $table->string('lokasi_kabupaten', 45);
            $table->text('lokasi_deskripsi');
            $table->string('foto_profil', 100)->nullable();
            $table->string('nomor_telpon', 12);
            $table->timestamps();
        });

        // starter data
        DB::table('petani')
            -> insert([
                'username' => 'pa',
                'password' => 'abc',
                'email' => 'a',
                'nama' => 'petani a',
                'lokasi_provinsi' => 'provinsi a',
                'lokasi_kabupaten' => 'kabupaten a',
                'lokasi_deskripsi' => 'deskripsi a',
                'nomor_telpon' => '1234'
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petani');
    }
}
