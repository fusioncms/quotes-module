<?php

namespace Modules\Quotes\Http\Controllers\DataTable;

use Modules\Quotes\Models\Quotes;
use Fusion\Http\Controllers\DataTableController;

class QuoteController extends DataTableController
{
    public function builder()
    {
        return Quotes::query();
    }

    public function getDisplayableColumns()
    {
        return [
            'name',
            'handle',
            'description',
        ];
    }

    public function getFilterable()
    {
        return [
            'name',
            'description',
        ];
    }

    public function getSortable()
    {
        return [
            'name',
            'handle',
        ];
    }

    public function getCustomColumnNames()
    {
        return [
            'name'        => 'Name',
            'handle'      => 'Handle',
            'description' => 'Description',
        ];
    }
}
