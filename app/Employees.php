<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
	 protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'department'
    ];


}
