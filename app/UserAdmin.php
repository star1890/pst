<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    protected $table = 'useradmin';
    protected $primaryKey = 'ID';
    protected $dateFormat = 'U';
    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
