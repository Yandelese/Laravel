<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(array([
            'name'=>'User-1',
            'email'=>'user@mail.ru',
            'password'=>'$2y$10$FKVDZPC2x9sKPG2d23ecxOL4AAu485fQhUNvEqg13g.QmZqPJ9OQ2',
            'role'=>'user'],

            ['name'=>'ADMINISTRATOR',
            'email'=>'admin@mail.ru',
            'password'=>'$2y$10$FKVDZPC2x9sKPG2d23ecxOL4AAu485fQhUNvEqg13g.QmZqPJ9OQ2',
            'role'=>'admin']));
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
};
