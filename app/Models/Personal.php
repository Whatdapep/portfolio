<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personal_information';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    const CREATED_AT = 'created_date';
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
        'id',
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'date_of_birth',
        'sex',
        'personal_pictures',
        'website',
        'github',
        'facebook',
        'instagram',
        'line',
        'personal_summary',
        'personal_status',
        'updated_date',
        'created_date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'updated_date',
        'created_date'
    ];
}
