<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('insurances', function (Blueprint $table) {
			$table->increments('id');
			$table->string('fio', 60)->nullable();
			$table->integer('transport_type')->nullable();
			$table->integer('lifetime')->nullable();
			$table->integer('city_id')->nullable();
			$table->integer('need_insurance')->nullable();
			$table->string('iin', 15)->nullable();
			$table->string('phone', 15)->nullable();
			$table->string('email')->nullable();
			$table->integer('age')->nullable();
			$table->integer('experience')->nullable();
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
		Schema::dropIfExists('insurances');
	}
}
