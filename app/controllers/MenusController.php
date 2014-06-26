<?php

class MenusController extends \BaseController {

	/**
	 * Display a listing of menus
	 *
	 * @return Response
	 */
	public function index()
	{
		$menus = Menus::all();

		return View::make('menus.index', compact('menus'));
	}

	/**
	 * Show the form for creating a new menus
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('menus.create');
	}

	/**
	 * Store a newly created menus in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Menus::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Menus::create($data);

		return Redirect::route('menus.index');
	}

	/**
	 * Display the specified menus.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$menus = Menus::findOrFail($id);

		return View::make('menus.show', compact('menus'));
	}

	/**
	 * Show the form for editing the specified menus.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$menus = Menus::find($id);

		return View::make('menus.edit', compact('menus'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$menus = Menus::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Menus::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$menus->update($data);

		return Redirect::route('menus.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Menus::destroy($id);

		return Redirect::route('menus.index');
	}

}