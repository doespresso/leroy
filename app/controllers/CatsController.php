<?php

class CatsController extends \BaseController {

	/**
	 * Display a listing of cats
	 *
	 * @return Response
	 */
	public function index()
	{
		$cats = Cat::all();

		return View::make('cats.index', compact('cats'));
	}

	/**
	 * Show the form for creating a new cat
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cats.create');
	}

	/**
	 * Store a newly created cat in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Cat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Cat::create($data);

		return Redirect::route('cats.index');
	}

	/**
	 * Display the specified cat.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cat = Cat::findOrFail($id);

		return View::make('cats.show', compact('cat'));
	}

	/**
	 * Show the form for editing the specified cat.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cat = Cat::find($id);

		return View::make('cats.edit', compact('cat'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cat = Cat::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Cat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$cat->update($data);

		return Redirect::route('cats.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cat::destroy($id);

		return Redirect::route('cats.index');
	}

}