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
        Schema::create('project_plus_contents', function (Blueprint $table) {
            $table->id();
            $table->tinyText('title')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->string('floats')->nullable();
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
        Schema::dropIfExists('project_plus_contents');
    }
};
