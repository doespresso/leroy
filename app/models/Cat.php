<?php

class Cat extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function items()
    {
        return $this->hasMany('Item');
    }

    public function menu()
    {
        return $this->belongsTo('Menu');
    }

}