<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('business_relations', function (Blueprint $table) {
        $table->id();
            $table->unsignedBigInteger('farmer_id');
            $table->unsignedBigInteger('distributor_id');
            $table->unsignedBigInteger('investor_id')->nullable();
            $table->timestamps();

            // add foreign key constraints
            $table->foreign('farmer_id')->references('id')->on('users');
            $table->foreign('distributor_id')->references('id')->on('users');
            $table->foreign('investor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    Schema::dropIfExists('business_relations');
    }
};
