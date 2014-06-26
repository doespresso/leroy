<?php

class Slide extends \Eloquent {




	// Add your validation rules here
	public static $rules = [
//        'title' => 'required',
        'sort' => 'required|integer|min:0',
	];

	// Don't forget to fill this array
	protected $fillable = [];

}