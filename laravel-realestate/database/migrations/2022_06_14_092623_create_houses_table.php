<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 8, 2); //->nullable()
            $table->string('address', 100);
            $table->string('post_code', 10);
            $table->string('city', 40);
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->tinyInteger('floors')->unsigned();
            $table->text('description');
            $table->text('note');
            $table->string('type', 50);
            $table->string('image');
            $table->boolean('is_avaiable')->default(false);
            $table->string('contract', 20);
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
        Schema::dropIfExists('houses');
    }
}
