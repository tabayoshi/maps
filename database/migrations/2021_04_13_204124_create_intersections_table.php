<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntersectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intersections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('police_id')->references('id')->on('polics');
            $table->integer('ctl_no');
            $table->string('intersection', 20);
            $table->text('address', 50);
            $table->foreignId('co_id')->references('id')->on('companys');
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
        Schema::dropIfExists('intersections');
    }
}
