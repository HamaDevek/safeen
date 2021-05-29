<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefugeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refugees', function (Blueprint $table) {
            $table->id();
            $table->string('nawy_baxewkar');
            $table->string('nawy_xezan')->nullable();
            $table->string('talafon');
            $table->string('shweny_nishtaje_esa');
            $table->string('shweny_nishtaje_peshu');
            $table->integer('zh_mnal');
            $table->enum('baryxezan', ['XRAP', 'MAMNAWAND', 'BASH']);
            $table->boolean('nawxo');
            $table->string('pisha')->default('be kar');
            $table->string('din');
            $table->boolean('xawankary');
            $table->text('zanyarytr');
            $table->string('document');
            $table->boolean('state')->default(0);
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('refugees');
    }
}
