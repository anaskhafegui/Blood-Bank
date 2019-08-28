<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    Protected $fillable = ['name','display_name','description'];
}