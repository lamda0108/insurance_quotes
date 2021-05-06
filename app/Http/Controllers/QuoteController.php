<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Requests\createQuoteRequest;

class QuoteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::where(['user_id'=>auth()->user()->id])->latest()->paginate(10);
        return view('quotes.index')->with([
            'quotes'=>$quotes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quote = new Quote();
        return view('quotes.create')->with([
            'quote'=>$quote
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateQuoteRequest $request)
    {
        $request->user()->quotes()->create($request->all());
        return redirect()->route('quote.index')->with([
            'message_success'=>'Success! Your quote has been created.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        if (!$quote->isTheOwner(auth()->user())) abort(403);
        return view('quotes.show')->with([
            'quote'=>$quote
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        if (!$quote->isTheOwner(auth()->user())) abort(403);
        return view("quotes.edit")->with([
            'quote'=>$quote
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(CreateQuoteRequest $request, Quote $quote)
    {
        if (!$quote->isTheOwner(auth()->user())) abort(403);
        $quote->update($request->all());
        return redirect('/quote/' . $quote->id)->with([
            'message_success'=>'Success! Your quote has been updated.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        if(!$quote->isTheOwner(auth()->user())) abort(403);
        $quote->delete();
        return redirect('/quote')->with([
            'message_success'=>'Success! Your quote has been deleted'
        ]);
    }
}
