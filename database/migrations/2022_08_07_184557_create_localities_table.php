<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('localities', function (Blueprint $table) {
            $table->unsignedBigInteger("zip_code")->unique()->primary();
            $table->string("city")->nullable();
            $table->string("federal_entity_id");
            $table->string("municipality_id");
            $table->foreign("federal_entity_id")->references("id")->on("federal_entities");
            $table->foreign("municipality_id")->references("id")->on("municipalities");
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
        Schema::dropIfExists('localities');
    }
};
