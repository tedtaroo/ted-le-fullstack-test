<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        \App\Models\Role::create(
            [
                'id' => 1,
                'name' => 'Master User',
            ]
        );
        \App\Models\Role::create(
            [
                'id' => 2,
                'name' => 'Manager',
            ]
        );
        \App\Models\Role::create(
            [
                'id' => 3,
                'name' => 'Employee',
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
        Schema::dropIfExists('roles');
    }
}
