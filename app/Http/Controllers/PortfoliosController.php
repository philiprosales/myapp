<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use DB;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$portfolios = Portfolio::all();
        //return Portfolio::where('portfolioname', 'Portfolio Two')->get();
        //$portfolios = DB::select('SELECT * FROM portfolios');
        //$portfolios = Portfolio::orderBy('portfolioname', 'desc')->take(1)->get();
        //$portfolios = Portfolio::orderBy('created_at', 'asc')->paginate(1);

        $portfolios = Portfolio::orderBy('created_at', 'asc')->get();
        return view ('portfolios.index')->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'thumbnails' => 'required',
            'title' => 'required',
            'description' => 'required',
            'embed_code' => 'required',
            'url' => 'required'
        ]);

        // butangi na code diri
        // wala nay issue sa imong csrf
        
        // Create Portfolio
        $portfolio = new Portfolio;
        $portfolio->thumbnails = $request->input('thumbnails');
        $portfolio->title = $request->input('title');
        $portfolio->description = $request->input('description');
        $portfolio->embed_code = $request->input('embed_code');
        $portfolio->url = $request->input('url');
        $portfolio->save();

        return redirect('/portfolios')->with('success', 'Portfolios Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolios.show')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolios.edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'thumbnails' => 'required',
            'title' => 'required',
            'description' => 'required',
            'embed_code' => 'required',
            'url' => 'required'
        ]);

        // butangi na code diri
        // wala nay issue sa imong csrf
        
        // Create Portfolio
        $portfolio = new Portfolio;
        $portfolio->thumbnails = $request->input('thumbnails');
        $portfolio->title = $request->input('title');
        $portfolio->description = $request->input('description');
        $portfolio->embed_code = $request->input('embed_code');
        $portfolio->url = $request->input('url');
        $portfolio->save();

        return redirect('/portfolios')->with('success', 'Portfolios Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect('/portfolios')->with('success', 'Portfolio Removed');
    }
}
