<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('title', 255);
            $table->string('description', 255);
            $table->boolean('example1')->nullable();
            $table->integer('example2')->default(1);
            $table->unsignedInteger('example3');
            $table->bigInteger('example4');
            $table->text('example5');
            $table->float('example6');
            $table->double('example7');
            $table->enum('estado', array('publicado', 'eliminado', 'borrador'));
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
        Schema::dropIfExists('notes');
    }
}
