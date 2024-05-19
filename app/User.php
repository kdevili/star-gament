<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    const GROUP_TYPE = 'Group Level';
    const CLUSTER_TYPE = 'Cluster Level';
    const FACILITY_TYPE = 'Facility Level';
    const RECODER_TYPE = 'Recoder';
    const SUPERADMIN_TYPE = 'Superadmin';
    const ACTIVE_TYPE = 'Active';

    //------------------------getting user active status----------------------------------
    public function isActive(){
        return $this->status === self::ACTIVE_TYPE;
    }
    // -------------------------------middleware Employee---------------------------------------------------------
    public function isGroup()    {
        return $this->role === self::GROUP_TYPE;
    }

// -------------------------------middleware admin---------------------------------------------------------
    public function isCluster()    {
        return $this->role === self::CLUSTER_TYPE;
    }


// -------------------------------middleware Manager---------------------------------------------------------
    public function isFacility()    {
        return $this->role === self::FACILITY_TYPE;
    }

// -------------------------------middleware Manager---------------------------------------------------------
    public function isRecoder()    {
        return $this->role === self::RECODER_TYPE;
    }

// -------------------------------middleware Manager---------------------------------------------------------
    public function isSuperadmin()    {
        return $this->role === self::SUPERADMIN_TYPE;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','role', 'image', 'lname','garment_id','cluster_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function cluster()
    {
        return $this->Belongsto('App\Cluster','cluster_id','id');
    }
    public function garment()
    {
        return $this->Belongsto('App\Garment','garment_id','id');
    }

}
