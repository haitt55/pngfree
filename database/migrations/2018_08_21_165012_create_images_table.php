<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('images')) {
            return true;
        }
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->string('thumb');
            $table->string('png_link')->nullable();
            $table->string('psd_link')->nullable();
            $table->string('ai_link')->nullable();
            $table->string('jpg_link')->nullable();
            $table->string('eps_link')->nullable();
            $table->string('ppt_link')->nullable();
            $table->string('svg_link')->nullable();
            $table->string('tag_id')->nullable();
            $table->string('album')->nullable();
            $table->integer('category_id');
            $table->smallInteger('type')->nullable();
            $table->text('description')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_title')->nullable();
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
        Schema::dropIfExists('images');
    }
}
