<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('address', 128);
            $table->string('contact_name', 60);
            $table->string('telephone', 12);
            $table->string('email', 128);
            //$table->timestamps();
            $table->timestamp('created_at');
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
        Schema::drop('members');
    }
}
