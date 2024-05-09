<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $EmployeeID
 * @property $LastName
 * @property $FirstName
 * @property $Title
 * @property $TitleOfCourtesy
 * @property $BirthDate
 * @property $HireDate
 * @property $Address
 * @property $City
 * @property $Region
 * @property $PostalCode
 * @property $Country
 * @property $HomePhone
 * @property $Extension
 * @property $Photo
 * @property $Notes
 * @property $ReportsTo
 * @property $PhotoPath
 *
 * @property Employee $employee
 * @property Employee[] $employees
 * @property Employeeterritory[] $employeeterritories
 * @property Order[] $orders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['EmployeeID', 'LastName', 'FirstName', 'Title', 'TitleOfCourtesy', 'BirthDate', 'HireDate', 'Address', 'City', 'Region', 'PostalCode', 'Country', 'HomePhone', 'Extension', 'Photo', 'Notes', 'ReportsTo', 'PhotoPath'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'ReportsTo', 'EmployeeID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class, 'EmployeeID', 'ReportsTo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employeeterritories()
    {
        return $this->hasMany(\App\Models\Employeeterritory::class, 'EmployeeID', 'EmployeeID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'EmployeeID', 'EmployeeID');
    }
    
}
