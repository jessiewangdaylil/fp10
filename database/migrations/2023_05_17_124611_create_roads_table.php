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
        Schema::create('roads', function (Blueprint $table) {
            $table->id();
            $table->Integer('origId')->unsigned()->unique();

            $table->bigInteger('town_id')->nullable()->unsigned()->index();
            $table->foreign('town_id')->references('id')->on('towns')->onDelete('restrict');

            $table->bigInteger('town_origid')->nullable()->unsigned()->index();
            $table->foreign('town_origid')->references('origId')->on('towns')->onDelete('restrict');

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
        Schema::table('roads', function (Blueprint $table) {
            $table->dropForeign(['town_id', 'town_origid']);
        });
        Schema::dropIfExists('roads');

    }
};