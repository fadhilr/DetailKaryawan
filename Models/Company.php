<?php

namespace Models;

use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Company extends Eloquent
{
    protected $table = 'company';

    protected $primaryKey = 'company_id';

    public $incrementing = true;

    public $timestamps = true;

    protected $hidden = [];

    protected $fillable = [
        'company_id',
        'name',
    ];

    protected $guarded = [];

    protected $dates = [];

    protected $casts = [
        'company_id'    => 'integer',
        'name'          => 'string',
    ];

    public function department()
    {
        return $this->hasMany('Models\Department', 'department_id', 'department_id');
    }
}
