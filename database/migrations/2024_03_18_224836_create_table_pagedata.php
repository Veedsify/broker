<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_pagedata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->string('logo');
            $table->string('favicon');
            $table->string('tagline');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string("hero_text");
            $table->string("hero_title");
            $table->string("hero_description");
            $table->string("why_choose_us_title");
            $table->string("why_choose_us_description");
            $table->timestamps("about_us_title");
            $table->string("about_us_description");
            $table->string("about_us_text");
            $table->string("reasons_to_choose_us_title_1");
            $table->string("reasons_to_choose_us_description_1");
            $table->string("reasons_to_choose_us_title_2");
            $table->string("reasons_to_choose_us_description_2");
            $table->string("reasons_to_choose_us_title_3");
            $table->string("reasons_to_choose_us_description_3");
            $table->string("explore_tiers_title");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pagedata');
    }
};
