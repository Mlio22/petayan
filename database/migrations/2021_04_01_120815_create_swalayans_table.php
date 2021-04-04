<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwalayansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swalayan', function (Blueprint $table) {
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

        DB::table('swalayan')
            -> insert([[
                'username' => 'sa',
                'password' => 'abc',
                'email' => 'a',
                'nama' => 'swalayan a',
                'lokasi_provinsi' => 'provinsi a',
                'lokasi_kabupaten' => 'kabupaten a',
                'lokasi_deskripsi' => 'deskripsi a',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'sb',
                'password' => 'abc',
                'email' => 'b',
                'nama' => 'swalayan b',
                'lokasi_provinsi' => 'provinsi b',
                'lokasi_kabupaten' => 'kabupaten b',
                'lokasi_deskripsi' => 'deskripsi b',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'sc',
                'password' => 'abc',
                'email' => 'c',
                'nama' => 'swalayan c',
                'lokasi_provinsi' => 'provinsi c',
                'lokasi_kabupaten' => 'kabupaten c',
                'lokasi_deskripsi' => 'deskripsi c',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'sd',
                'password' => 'abc',
                'email' => 'd',
                'nama' => 'swalayan d',
                'lokasi_provinsi' => 'provinsi d',
                'lokasi_kabupaten' => 'kabupaten d',
                'lokasi_deskripsi' => 'deskripsi d',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'se',
                'password' => 'abc',
                'email' => 'e',
                'nama' => 'swalayan e',
                'lokasi_provinsi' => 'provinsi e',
                'lokasi_kabupaten' => 'kabupaten e',
                'lokasi_deskripsi' => 'deskripsi e',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'sf',
                'password' => 'abc',
                'email' => 'f',
                'nama' => 'swalayan f',
                'lokasi_provinsi' => 'provinsi f',
                'lokasi_kabupaten' => 'kabupaten f',
                'lokasi_deskripsi' => 'deskripsi f',
                'nomor_telpon' => '1234'
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
        Schema::dropIfExists('swalayan');
    }
}
