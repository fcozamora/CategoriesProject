<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Option
 *
 * @property $id
 * @property $description
 * @property $category_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Option extends Model
{
    
    static $rules = [
		'description' => 'required',
		'category_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','category_id'];



}
