<?php

namespace Addon\Quotes\Http\Controllers\API;

use Illuminate\Http\Request;
use Modules\Quotes\Models\Quotes;
use Fusion\Http\Controllers\Controller;
use Modules\Quotes\Http\Requests\QuotesRequest;
use Modules\Quotes\Http\Resources\QuotesResource;

class QuoteController extends Controller
{
    /**
     * Display all resources.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $this->authorize('quotes.show');

        return QuotesResource::collection(
            Quotes::orderBy('name')->paginate(25)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request   $request
     * @param  \Modules\Quotes\Models\Quotes  $quotes
     * @return \Modules\Http\Responses\QuotesResource
     */
    public function show(Request $request, Quotes $quotes)
    {
        $this->authorize('quotes.show');

        return new QuotesResource($quotes);
    }

    /**
     * Store newly created record in storage.
     *
     * @param  \Modules\Quotes\Http\Requests\QuotesRequest  $request
     * @return \Modules\Http\Responses\QuotesResource
     */
    public function store(QuotesRequest $request)
    {
        $quotes = Quotes::create($request->validated());

        return new QuotesResource($quotes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Modules\Quotes\Http\Requests\QuotesRequest  $request
     * @param  \Modules\Quotes\Models\Quotes                $quotes
     * @return \Modules\Http\Responses\QuotesResource
     */
    public function update(QuotesRequest $request, Quotes $quotes)
    {
        $quotes->update($request->validated());

        return new QuotesResource($quotes);
    }

    /**
     * Remove specified resource from storage.
     *
     * @param  \Illuminate\Http\Request   $request
     * @param  \Modules\Quotes\Models\Quotes  $quotes
     * @return void
     */
    public function destroy(Request $request, Quotes $quotes)
    {
        $this->authorize('quotes.delete');

        $quotes->delete();
    }
}
