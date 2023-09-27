<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('blog_categories');
            $table->string('name');
            $table->string('heading');
            $table->string('subheading')->nullable();
            $table->string('description');
            $table->string('uthorname')->nullable();
            $table->string('sociallinks')->nullable();
            $table->string('image')->nullable();
            $table->longText('address')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('created_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('blogs');
    }
}
