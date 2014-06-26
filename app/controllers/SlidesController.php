<?php

class SlidesController extends \BaseController {

	/**
	 * Display a listing of slides
	 *
	 * @return Response
	 */
	public function index()
	{
		$slides = Slide::all();

		return View::make('slides.index', compact('slides'));
	}

	/**
	 * Show the form for creating a new slide
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('slides.create');
	}

	/**
	 * Store a newly created slide in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Slide::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Slide::create($data);

		return Redirect::route('slides.index');
	}

	/**
	 * Display the specified slide.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$slide = Slide::findOrFail($id);

		return View::make('slides.show', compact('slide'));
	}

	/**
	 * Show the form for editing the specified slide.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$slide = Slide::find($id);

		return View::make('slides.edit', compact('slide'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$slide = Slide::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Slide::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$slide->update($data);

		return Redirect::route('slides.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Slide::destroy($id);

		return Redirect::route('slides.index');
	}

}