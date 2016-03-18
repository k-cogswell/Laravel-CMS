<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCSSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('css_template', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('content');
            $table->string('active');
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
		Schema::drop('css_template');
	}

}
