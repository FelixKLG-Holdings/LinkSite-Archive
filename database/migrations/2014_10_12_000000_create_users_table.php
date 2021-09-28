<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->bigInteger('steam_id')->unique();
            $table->bigInteger('discord_id')->unique()->nullable();
            $table->string('discord_token')->nullable();
            $table->string('discord_refresh_token')->nullable();
            $table->boolean('barred')->default(false);
            $table->timestamps();
            $table->string('steam_profile_icon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
