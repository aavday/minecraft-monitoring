<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minecraft_servers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ip');
            $table->text('description');
            $table->text('server_site');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minecraft_servers');
    }
};
