<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_features', function (Blueprint $table) {
            $table->id();
            $table->string('sectionName')->nullable();
            $table->string('sectionTitle')->nullable();
            $table->text('sectionDescription')->nullable();
            $table->string('sectionImage')->nullable();
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
        Schema::dropIfExists('section_features');
    }
}
