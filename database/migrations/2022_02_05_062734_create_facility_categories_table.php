<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilityCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('facility_section_id')->unsigned();
            $table->string('title');
            $table->text('icon');
            $table->text('image');
            $table->timestamps();

            $table->foreign('facility_section_id')->references('id')->on('facility_sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facility_categories');
    }
}
