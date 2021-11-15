<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     * @var string
     */
    protected $table = 'Users';

    /**
     * @var string[]
     */
    protected $fillable = [
        'email',
        'password',
        'created_at',
        'updated_at'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'password'
    ];

    /**
     * @var array
     */
    public array $rules = [
        'email' => 'required|email|max:100|email:rfc,dns',
        'password' => 'required||between:6,12'
    ];

}
