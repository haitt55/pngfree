<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->string('png_link')->nullable()->after('thumb');
            $table->string('psd_link')->nullable()->after('png_link');
            $table->string('ai_link')->nullable()->after('psd_link');
            $table->string('jpg_link')->nullable()->after('ai_link');
            $table->string('eps_link')->nullable()->after('jpg_link');
            $table->string('tag_id')->nullable()->after('eps_link');
            $table->string('album')->nullable()->after('tag_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->string('image');
            $table->dropColumn('png_link');
            $table->dropColumn('psd_link');
            $table->dropColumn('ai_link');
            $table->dropColumn('jpg_link');
            $table->dropColumn('eps_link');
            $table->dropColumn('tag_id');
            $table->dropColumn('album');
        });
    }
}
