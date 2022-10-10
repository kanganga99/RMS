<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('post_tenants', function (Blueprint $table) {
        $table->integer('tenant_id')->unsigned()->index();
        $table->integer('post_id')->unsigned()->index();
        $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('post_tenants');
    }
};
