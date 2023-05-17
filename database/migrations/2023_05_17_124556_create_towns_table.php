<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('towns', function (Blueprint $table) {
            $table->id();
            $table->Integer('origId')->unsigned()->unique();

            $table->bigInteger('city_id')->nullable()->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('restrict');

            $table->bigInteger('city_origid')->nullable()->unsigned()->index();
            $table->foreign('city_origid')->references('origId')->on('cities')->onDelete('restrict');

            $table->string('name');

            $table->timestamp('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('towns', function (Blueprint $table) {
            $table->dropForeign(['city_id', 'city_origid']);
        });
        Schema::dropIfExists('towns');
    }
};