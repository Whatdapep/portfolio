<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workings extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'workings_personal';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'seq';
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
            'seq',
            'personal_id',
            'title',
            'detail',
            'head_image',
            'start_date',
            'end_date'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'seq',
        'personal_id',
        'updated_date',
        'created_date'
    ];
}
