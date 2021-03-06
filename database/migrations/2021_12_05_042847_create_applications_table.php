<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('shop_category');
            $table->string('portfolio_link')->unique();
            $table->boolean('content_confirmation')->default(false);
            $table->boolean('has_stores')->default(false);
            $table->string('online_stores')->nullable();
            $table->string('quality_perspective');
            $table->string('seller_experience');
            $table->string('marketing_understanding');
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
        Schema::dropIfExists('applications');
    }
}
