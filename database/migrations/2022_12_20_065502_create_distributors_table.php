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
        Schema::create('distributors', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->timestamps();
            $table->unsignedBigInteger('manufacturer_id');
            $table->foreign('manufacturer_id','references_for_manufacturer')->on('manufacturers')->references('id');
        });

        DB::table('distributors')->insert(
            array(
                ['name' => 'Qaz_Telecom',
                    'manufacturer_id' => 1 ],
                ['name' => 'Almaty_Trading',
                    'manufacturer_id' => 2],
                ['name' => 'K-Mobile',
                    'manufacturer_id' => 3],
                ['name' => 'Astex-Corparation',
                    'manufacturer_id' => 1],
                ['name' => 'Volt_Promotion',
                    'manufacturer_id' => 2],
                ['name' => 'Fast-Promotion',
                    'manufacturer_id' => 2]));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributors');
    }
};
