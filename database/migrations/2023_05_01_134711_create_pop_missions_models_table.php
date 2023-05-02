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
        Schema::create('pop_missions_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->notNullable();
            $table->text('file_text')->notNullable();
            $table->text('constituent_processes_constraints_model')->nullable();
            $table->boolean('updated')->default(true);
            $table->unsignedBigInteger('user_id')->notNullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('pop_id')->notNullable(); //pop_id
            $table->foreign('pop_id')->references('id')->on('pops');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pop_missions_model');
    }
};
