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
        Schema::create('articals_blog_categories', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('artical_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->index('artical_id', 'pul_artical_idx');
            $table->index('category_id', 'pul_category_idx');

            $table->foreign('artical_id', 'pul_artical_fk')->on('articals')->references('id');
            $table->foreign('category_id', 'pul_category_fk')->on('blog_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articals_blog_categories');
    }
};


