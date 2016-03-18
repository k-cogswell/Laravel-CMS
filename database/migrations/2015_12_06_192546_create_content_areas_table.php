<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateContentAreasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content_areas', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->string('description');
            $table->integer('order')->unique();
            $table->string('created_by')->references('name')->on('users')->onDelete('cascade')->nullable();
            $table->string('modified_by')->references('name')->on('users')->onDelete('cascade')->nullable();
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
		Schema::drop('content_areas');
	}

}
