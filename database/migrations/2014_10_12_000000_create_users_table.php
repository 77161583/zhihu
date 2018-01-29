<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar');
            $table->string('confirmation_token');
            $table->smallInteger('is_avtive')->default(0);
            $table->integer('question_cout')->default(0);
            $table->integer('answers_cout')->default(0);
            $table->integer('comments_cout')->default(0);
            $table->integer('favourites_cout')->default(0);
            $table->integer('linkes_cout')->default(0);
            $table->integer('followers_cout')->default(0);
            $table->integer('followerings_cout')->default(0);
            $table->string('setting')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
