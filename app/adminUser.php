<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminUser extends Model
{
    protected $table = 'admin_users';

    protected $guarded = ['id'];
}
