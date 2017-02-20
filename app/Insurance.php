<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
	protected $fillable = [
		'fio', 'transport_type', 'lifetime', 'city_id', 'need_insurance', 'iin', 'phone', 'email', 'age', 'experience'
	];

	public static $rules = [
		'fio' => 'required|max:60',
		'transport_type' => 'required',
		'lifetime' => 'required',
		'city_id' => 'required',
		'need_insurance' => 'required',
		'phone' => 'required|max:15',
	];

	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->nullable();
			$table->string('slug')->unique();
			$table->text('excerpt')->nullable();
			$table->text('content')->nullable();
			$table->timestamp('published_at')->nullable();
			$table->boolean('published')->default(false);
			$table->timestamps();
		});
	}
}
