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
        if (!Schema::hasTable('vendors')){

            Schema::create('vendors', function (Blueprint $table) {
                $table->id();
                $table->string('vendor_name');
                $table->string('slug');
                $table->string('contact_name')->nullable();
                $table->string('contact_lastname')->nullable();
                $table->string('email');
                $table->string('mobile')->nullable();
                $table->string('address');
                $table->string('suburb');
                $table->string('pc');
                $table->string('state');
                $table->int('cardstamps');
                $table->string('vendor_image');
                $table->timestamps();
                $table->string('permit_type');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
};
