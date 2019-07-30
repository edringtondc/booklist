<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {

        Schema::dropIfExists('books');
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('Author');
            $table->boolean('hasRead');
            $table->boolean('Saved');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
