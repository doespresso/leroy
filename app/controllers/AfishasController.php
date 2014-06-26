<?php

class AfishasController extends \BaseController {

    protected $layout = "layouts.test";

	/**
	 * Display a listing of afishas
	 *
	 * @return Response
	 */
	public function index()

	{
        echo $date = (new Date('next monday'))->format('long');
        echo Lang::get('date.month.'.date('n',strtotime($date)));
        $afishas = Afisha::where('active','=',1)->orderby('day','desc')->limit(1)->get();
		$this->layout->content = View::make('afishas.index', ['afishas'=>$afishas]);
	}

	/**
	 * Show the form for creating a new afisha
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('afishas.create');
	}

	/**
	 * Store a newly created afisha in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Afisha::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Afisha::create($data);

		return Redirect::route('afishas.index');
	}

	/**
	 * Display the specified afisha.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$afisha = Afisha::findOrFail($id);

		return View::make('afishas.show', compact('afisha'));
	}

	/**
	 * Show the form for editing the specified afisha.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$afisha = Afisha::find($id);

		return View::make('afishas.edit', compact('afisha'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$afisha = Afisha::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Afisha::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$afisha->update($data);

		return Redirect::route('afishas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Afisha::destroy($id);

		return Redirect::route('afishas.index');
	}

}