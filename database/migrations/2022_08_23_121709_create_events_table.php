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
		Schema::create('events', function (Blueprint $table) {
			$table->id();
			$table->string('title', 150);
			$table->integer('total_people');
			$table->integer('sub_people')->default(0);
			$table->string('description', 255);
			$table->string('image');
			$table->date('date');
			$table->timestamps();
			$table->time('start_hour');
			$table->boolean('caroousel')->default(false);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('events');
	}
};
