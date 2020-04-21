<?php

namespace Models;

use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Department extends Eloquent
{
    protected $table = 'department';

    protected $primaryKey = 'department_id';

    public $incrementing = true;

    public $timestamps = true;

    protected $hidden = [];

    protected $fillable = [
        'department_id',
        'company_id',
        'name',
    ];

    protected $guarded = [];

    protected $dates = [];

    protected $casts = [
        'department_id' => 'integer',
        'company_id'    => 'integer',
        'name'          => 'string',
    ];

    public function company()
    {
        return $this->belongsTo('Models\Company', 'company_id', 'company_id');
    }

    public function employee()
    {
        return $this->hasMany('Models\Employee', 'employee_id', 'employee_id');
    }
}
