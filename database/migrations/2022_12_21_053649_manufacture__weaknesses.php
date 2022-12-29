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
        Schema::create('brands_weaknesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brands_id');
            $table->unsignedBigInteger('weakness_id');
            $table->foreign('brands_id','fk_brands')->on('manufacturers')->references('id');
            $table->foreign('weakness_id','fk_weakness')->on('weaknesses')->references('id');
            $table->timestamps();
        });

        DB::table('brands_weaknesses')->insert(array(
            ['brands_id' => '1',
              'weakness_id' =>'1'],
            ['brands_id' => '1',
                'weakness_id' =>'2'],
            ['brands_id' => '1',
                'weakness_id' =>'3'],

            ['brands_id' => '2',
                'weakness_id' =>'1'],
            ['brands_id' => '2',
                'weakness_id' =>'2'],
            ['brands_id' => '2',
                'weakness_id' =>'3'],

            ['brands_id' => '3',
                'weakness_id' =>'1'],
            ['brands_id' => '3',
                'weakness_id' =>'2'],
            ['brands_id' => '3',
                'weakness_id' =>'3'],

            ['brands_id' => '4',
                'weakness_id' =>'1'],
            ['brands_id' => '4',
                'weakness_id' =>'2'],
            ['brands_id' => '4',
                'weakness_id' =>'3'],

            ['brands_id' => '5',
                'weakness_id' =>'1'],
            ['brands_id' => '5',
                'weakness_id' =>'2'],
            ['brands_id' => '5',
                'weakness_id' =>'3'],
        ));
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
};
