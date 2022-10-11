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
        Schema::create('post_tenants', function (Blueprint $table) {
            // $table->id();
        $table->integer('tenant_id')->unsigned()->index();
        $table->integer('post_id')->unsigned()->index();
        // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('post_tenants');
    }
};
