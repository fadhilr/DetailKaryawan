<?php

namespace Models;

use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Employee extends Eloquent
{
    protected $table = 'employee';

    protected $primaryKey = 'employee_id';

    public $incrementing = true;

    public $timestamps = true;

    protected $hidden = [];

    protected $fillable = [
        'employee_id',
        'department_id',
        'name',
        'title',
        'salary'
    ];

    protected $guarded = [];

    protected $dates = [];

    protected $casts = [
        'employee_id'   => 'integer',
        'department_id' => 'integer',
        'name'          => 'string',
        'title'         => 'string',
        'salary'        => 'integer'
    ];

    public function department()
    {
        return $this->belongsTo('Models\Department', 'department_id', 'department_id');
    }
}
