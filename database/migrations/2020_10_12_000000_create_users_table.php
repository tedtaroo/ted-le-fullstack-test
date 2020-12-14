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
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Role_id')->unsigned();
            $table->foreign('Role_id')->references('id')->on('roles');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        \App\Models\User::create(
            [
                'id' => 1,
                'Role_id' => 1,
                'first_name' => 'Ted',
                'last_name' => 'Le',
                'email' => 'leminhtuan146@gmail.com',
                'username' => 'admin',
                'password' => Hash::make('password'),
            ]
        );
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
