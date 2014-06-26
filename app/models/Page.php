<?php

class Page extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


    public function gallery(){
        return $this->belongsTo('Gallery');
    }


//    public function photos(){
//        return $this->hasManyThrough('Photo','Gallery');
//    }


}