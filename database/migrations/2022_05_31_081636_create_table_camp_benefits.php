<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCampBenefits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_camp_benefits', function (Blueprint $table) {
            $table->id();

            // 1st Method
            // $table->bigInteger('camp_id')->unsigned();

            // 2nd method
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();

            // 1st Method
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_camp_benefits');
    }
}
