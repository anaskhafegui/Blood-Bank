<?php namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    Protected $fillable = ['name','display_name','description'];
}