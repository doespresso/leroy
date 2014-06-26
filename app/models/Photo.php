<?php

class Photo extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function gallery(){
        return $this->belongsTo('Gallery','gallery_id');
    }

}