<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data', function(Blueprint $table)
		{
			$table->increments('id');

			$table->decimal('housing', 5, 2);
			$table->decimal('utilities', 5, 2);
			$table->decimal('furnishings', 5, 2);
			$table->decimal('food', 5, 2);
			$table->decimal('clothing', 5, 2);
			$table->decimal('transporation', 5, 2);
			$table->decimal('insurance', 5, 2);
			$table->decimal('childcare', 5, 2);
			$table->decimal('savings', 5, 2);
			$table->decimal('pets', 5, 2);
			$table->decimal('gifts', 5, 2);
			$table->decimal('grooming', 5, 2);
			$table->decimal('recreation', 5, 2);
			$table->decimal('other', 5, 2);

			$table->integer('user_id');
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
		Schema::drop('data');
	}

}
