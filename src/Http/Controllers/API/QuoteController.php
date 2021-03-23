<?php

namespace Addon\Quotes\Http\Controllers\API;

use Illuminate\Http\Request;
use Addon\Quotes\Models\Quote;
use Fusion\Http\Controllers\Controller;
use Addon\Quotes\Http\Requests\QuoteRequest;
use Addon\Quotes\Http\Resources\QuoteResource;

class QuoteController extends Controller
{
    /**
     * Display all resources.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Addon\Http\Responses\QuoteResource
     */
    public function index(Request $request)
    {
        $this->authorize('quotes.viewAny');

        return QuoteResource::collection(
            Quote::orderBy('author')->paginate(25)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request   $request
     * @param  \Addon\Quotes\Models\Quote  $quotes
     * @return \Addon\Http\Responses\QuoteResource
     */
    public function show(Request $request, Quote $quote)
    {
        $this->authorize('quotes.show');

        return new QuoteResource($quote);
    }

    /**
     * Store newly created record in storage.
     *
     * @param  \Addon\Quotes\Http\Requests\QuoteRequest  $request
     * @return \Addon\Http\Responses\QuoteResource
     */
    public function store(QuoteRequest $request)
    {
        $quote = Quote::create($request->validated());

        return new QuoteResource($quote);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Addon\Quotes\Http\Requests\QuoteRequest  $request
     * @param  \Addon\Quotes\Models\Quote                $quote
     * @return \Addon\Http\Responses\QuoteResource
     */
    public function update(QuoteRequest $request, Quote $quote)
    {
        $quote->update($request->validated());

        return new QuoteResource($quote);
    }

    /**
     * Remove specified resource from storage.
     *
     * @param  \Illuminate\Http\Request   $request
     * @param  \Addon\Quotes\Models\Quote  $quote
     * @return void
     */
    public function destroy(Request $request, Quote $quote)
    {
        $this->authorize('quotes.delete');

        $quote->delete();
    }
}
