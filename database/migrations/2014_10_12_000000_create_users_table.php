<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateUsersTable extends Migration
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            return true;
        }
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password')->nullable();
            $table->boolean('is_active')->nullable()->default(0);
            $table->string('token')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('cover')->nullable();
            $table->string('facebook')->nullable();
            $table->timestamp('is_pro_at')->nullable();
            $table->timestamp('payment_at')->nullable();
            $table->integer('payment_id')->nullable();
            $table->timestamp('payment_expire')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
