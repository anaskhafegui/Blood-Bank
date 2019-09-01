<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    Protected $fillable = ['name','display_name','description'];

    public function permissions()
    {
        return $this->belongsToMany('App\Permission','permission_role');
    }
    public function users(){
    
        return $this->belongsToMany('App\User');
    }
}