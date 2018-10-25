<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesAndPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('roles', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('name')->nullable();
          $table->string('title')->nullable();
          $table->timestamps();
      });
      Schema::create('permissions', function (Blueprint $table) {
         $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('name')->nullable();
          $table->string('title')->nullable();
          $table->timestamps();
      });
      Schema::create('role_user', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->integer('role_id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->foreign('role_id')
          ->references('id')
          ->on('roles')
          ->onDelete('cascade')
          ->onUpdate('cascade');
          $table->foreign('user_id')
          ->references('id')
          ->on('users')
          ->onDelete('cascade')
          ->onUpdate('cascade');
      });
      Schema::create('permission_role', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->integer('permission_id')->unsigned();
          $table->integer('role_id')->unsigned();
          $table->foreign('permission_id')
          ->references('id')
          ->on('permissions')
          ->onDelete('cascade')
          ->onUpdate('cascade');
          $table->foreign('role_id')
          ->references('id')
          ->on('roles')
          ->onDelete('cascade')
          ->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
