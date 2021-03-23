<?php

namespace Addon\Quotes\Http\Controllers\DataTable;

use Addon\Quotes\Models\Quote;
use Fusion\Http\Controllers\DataTableController;

class QuoteController extends DataTableController
{
    public function builder()
    {
        return Quote::query();
    }

    public function getDisplayableColumns()
    {
        return [
            'author',
            'quote',
        ];
    }

    public function getFilterable()
    {
        return [
            'author',
            'quote',
        ];
    }

    public function getSortable()
    {
        return [
            'author',
            'quote',
        ];
    }

    public function getCustomColumnNames()
    {
        return [
            'author' => 'Quote',
            'quote'  => 'Quote',
        ];
    }
}
