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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('listname');
            $table->string('listimage');
            $table->string('listcategory');
            $table->string('listcity');
            $table->string('liststate');
            $table->string('listcountry');
            $table->string('listzip');
            $table->string('listaddress');
            $table->string('listdescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
