<?php

namespace Modules\Quotes\Models;

use Fusion\Concerns\HasExtension;
use Fusion\Concerns\CachesQueries;
use Fusion\Database\Eloquent\Model;

class Quote extends Model
{
    use CachesQueries, HasExtension;

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'handle',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];
}
