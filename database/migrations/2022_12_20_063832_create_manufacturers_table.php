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
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('model')->nullable();
            $table->text('price')->nullable();
            $table->text('country_of_origin')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('manufacturers')->insert(
            array(
                ['name' => 'XIOMI',
                    'model' => 'POCO 8',
                    'price' => '$250',
                    'country_of_origin' => 'CHINA',
                ],

                ['name' => 'I-PHONE',
                    'model' => 'Smart_X',
                    'price' => '$450',
                    'country_of_origin' => 'USA',
                ],

                ['name' => 'NOKIA',
                    'model' => '6700',
                    'price' => '$550',
                    'country_of_origin' => 'FINLAND',
                ],

                ['name' => 'HUAWEI',
                    'model' => 'PRO-10',
                    'price' => '$650',
                    'country_of_origin' => 'CHINA',
                ],

                ['name' => 'SONY',
                    'model' => 'X-Peria 10',
                    'price' => '$400',
                    'country_of_origin' => 'JAPAN',
                ]
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturers');
    }
};
