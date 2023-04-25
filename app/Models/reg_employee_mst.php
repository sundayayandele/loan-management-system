<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class reg_employee_mst extends Authenticatable   
{
    use HasRoles, HasFactory, Notifiable;

    public function api_logins_mst()
    {
        // Primary id in parent table and the Foreign key in child table
        return $this->hasOne(api_logins_mst::class, 'employee_id','employee_id');
    }




    public function reg_employee_attachment(){
        return $this->hasMany(reg_employee_attachment::class,'employee_id','employee_id');
    } 





    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'nrc',
       ];

protected $table = 'reg_employee_mst';
protected $primaryKey = 'employee_id';
public $timestamps = false;   
}

