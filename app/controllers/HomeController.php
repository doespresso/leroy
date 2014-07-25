<?php

class HomeController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $layout = "layouts.home";

    public function index()
    {

        $this->layout->content = View::make(

            'home.pages', [
            'pages' => (Page::where('active', '=', 1)->with('gallery')->orderby('sort')->get()),
            'afishas' => (Afisha::where('active', '=', 1)->orderby('day', 'desc')->limit(1)->get()),
            'menus' => (Menu::where('active', '=', 1)->with('cats')->get()),
            'cats' => (Cat::where('active', '=', 1)->with('items')->get()),
            'slides' => (Slide::where('active', '=', 1)->orderby('sort','desc')->get()),
            'photos' => (Photo::where('active', '=', 1)->orderby('sort')->get())
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}