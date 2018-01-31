<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('pekerjaan')->nullable();
            $table->string('alamat');
            $table->string('telp');
            $table->string('linkedin')->nullable();
            $table->string('angkatan');
            $table->timestamps();

            $table->foreign('id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
