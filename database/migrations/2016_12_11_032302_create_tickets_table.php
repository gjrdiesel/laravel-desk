<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('from_mail');
            $table->string('from_name');
            $table->enum('status', ['new', 'waiting', 'closed', 'archived']);
            $table->longText('text');
            $table->longText('html');
            $table->longText('raw');
            $table->timestamps();
        });

        DB::update('ALTER TABLE tickets AUTO_INCREMENT = 300;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
