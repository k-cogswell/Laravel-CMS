<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('page')->references('name')->on('pages')->onDelete('cascade')->nullable();
            $table->string('content_area')->references('name')->on('content_areas')->onDelete('cascade')->nullable();
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('HTML');
            $table->string('created_by')->references('name')->on('users')->onDelete('cascade')->nullable();
            $table->string('modified_by')->references('name')->on('users')->onDelete('cascade')->nullable();
            $table->string('all_pages');
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
		Schema::drop('articles');
	}
}
