<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique()->index();
            $table->text('menu');
			$table->decimal('price', 5, 2)->default(0);
            $table->string('image')->nullable();
            $table->integer('menu_category')->unsigned();
			$table->foreign('menu_category')
				->references('id')
				->on('menu_categories')
				->onDelete('cascade');
			$table->boolean('active')->default(1);
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
        Schema::dropIfExists('menu_categories');
    }
}
