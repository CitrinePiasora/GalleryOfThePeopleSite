<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('digital', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('title', 255);
            $table->string('copyright', 255);
            $table->string('source', 255)->nullable();
            $table->integer('uploader_id')->unsigned()->nullable();
            $table->string('description', 255)->nullable();
            $table->timestamps();

            $table->foreign('uploader_id')
                ->references('id')
                ->on('users')
                ->onDelete('SET NULL')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digital');
    }
}
