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
        Schema::create('portfolio_details', function (Blueprint $table) {
            $table->id();

            $table->string('name')->comment('portfolio 名稱');
            $table->string('type');
            $table->string('year', 5);
            $table->string('locale', 10);
            $table->enum('category', array_column(\App\Enums\PortfolioCategories::cases(), 'name'));

            $table->foreignId('portfolio_id');
//            $table->foreignId('category_id');

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
        Schema::dropIfExists('portfolio_detail');
    }
};
