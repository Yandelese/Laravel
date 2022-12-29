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
        Schema::create('weaknesses', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->timestamps();
        });

        DB::table('weaknesses')->insert(array(
            ['name' => 'bad-display'],
            ['name' => 'weak-battery'],
            ['name'=> 'very expensive']
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weaknesses');
    }
};
