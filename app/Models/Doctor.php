<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'profile', 
        'name', 
        'department',
        'specialist', 
        'short_bio', 
        'years_of_experience',
        'phone',
        'email',
        'linked_in',
    ];
}
