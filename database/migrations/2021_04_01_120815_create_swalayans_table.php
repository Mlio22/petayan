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
                'nama' => 'Hero Bogor',
                'lokasi_provinsi' => 'Jawa Barat',
                'lokasi_kabupaten' => 'Bogor',
                'lokasi_deskripsi' => 'Bogor 1',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'sb',
                'password' => 'abc',
                'email' => 'b',
                'nama' => 'Borma Bogor',
                'lokasi_provinsi' => 'Jawa Barat',
                'lokasi_kabupaten' => 'Bogor',
                'lokasi_deskripsi' => 'Bogor 2',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'sc',
                'password' => 'abc',
                'email' => 'c',
                'nama' => 'Yogya Bogor',
                'lokasi_provinsi' => 'Jawa Barat',
                'lokasi_kabupaten' => 'Bogor',
                'lokasi_deskripsi' => 'Bogor 3',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'sd',
                'password' => 'abc',
                'email' => 'd',
                'nama' => 'Super Indo Bogor',
                'lokasi_provinsi' => 'Jawa Barat',
                'lokasi_kabupaten' => 'Bogor',
                'lokasi_deskripsi' => 'Bogor 4',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'se',
                'password' => 'abc',
                'email' => 'e',
                'nama' => 'Giant Bogor',
                'lokasi_provinsi' => 'Jawa Barat',
                'lokasi_kabupaten' => 'Bogor',
                'lokasi_deskripsi' => 'Bogor 5',
                'nomor_telpon' => '1234'
            ],
            [
                'username' => 'sf',
                'password' => 'abc',
                'email' => 'f',
                'nama' => 'Transmart Bogor',
                'lokasi_provinsi' => 'Jawa Barat',
                'lokasi_kabupaten' => 'Bogor',
                'lokasi_deskripsi' => 'Bogor 6',
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
