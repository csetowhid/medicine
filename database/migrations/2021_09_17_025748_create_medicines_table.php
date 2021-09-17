<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->integer('alpha_id');
            $table->integer('subalpha_id');
            $table->string('medicine_name');
            $table->string('medicine_generic_name');
            $table->string('medicine_brand_name');
            $table->string('medicine_drug_class');
            $table->string('medicine_image')->nullable();
            $table->longText('medicine_description');
            $table->string('medicine_seo_title');
            $table->string('medicine_seo_permalink');
            $table->longText('medicine_seo_description');
            $table->integer('medicine_status');
            $table->integer('medicine_most_popular')->default(0);
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
        Schema::dropIfExists('medicines');
    }
}
