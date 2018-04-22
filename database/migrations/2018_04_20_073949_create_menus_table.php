<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('categories', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique()->index();
			$table->text('description');
			$table->boolean('active')->default(1);
			$table->timestamps();
		});

        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique()->index();
            $table->text('menu');
            $table->string('image')->nullable();
            $table->integer('category_id')->unsigned();
			$table->foreign('category_id')
				->references('id')
				->on('categories')
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('menus');
    }
}
