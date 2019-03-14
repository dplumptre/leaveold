<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];






    public function leaves()
    {
       return $this->hasMany(Leave::class)->orderBy('id', 'desc')->paginate(50);
    }


    public function departments()
    {
       return $this->belongsTo(Department::class,'department_id');
    }
    


    public function loans()
    {
       return $this->belongsTo(Loan::class);
    }


    public function loan_roles()
    {
      return $this->belongsTo(LoanRole::class,'loan_roles_id');
    }


    protected $fillable = array('user_id', 
                                'name',
                                'password',
                                'address',
                                'role',
                                'gender',
                                'mobile',
                                'dob',
                                'marital_status',
                                'department',
                                'grade',
                                'employee_type',
                                'job_title',
                                'date_of_hire',
                                'entitled',
                                'balance',
        );






}
