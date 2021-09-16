<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonsiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calonsiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('email');
            $table->string('jk');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('nisn');
            $table->string('jurusan1');
            $table->string('jurusan2');
            $table->string('agama');
            $table->string('tinggi');
            $table->string('berat');
            $table->string('umur');
            $table->string('riwayat_penyakit');
            $table->string('cita_cita');
            $table->string('hobi');
            $table->string('no_telp');
            $table->string('anak_ke');
            $table->string('status');
            $table->string('golongan_darah');
            $table->string('suku');
            $table->string('prestasi');
            $table->string('bakat');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('asal_ayah');
            $table->string('lulusan_ayah');
            $table->string('agama_ayah');
            $table->string('usia_ayah');
            $table->string('ttl_ayah');
            $table->string('no_telp_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('asal_ibu');
            $table->string('lulusan_ibu');
            $table->string('agama_ibu');
            $table->string('usia_ibu');
            $table->string('ttl_ibu');
            $table->string('no_telp_ibu');
            $table->string('penghasilan_ibu');
            $table->string('fto_kk');
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
        Schema::dropIfExists('calonsiswa');
    }
}
