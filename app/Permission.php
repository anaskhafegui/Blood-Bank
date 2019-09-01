<?php namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table ='roles';

    public $timestamps = true;
    Protected $fillable = ['name','display_name','description'];


    public function roles()
    {
        return $this->belongsToMany('App\Role','permission_role');
    }
    
}