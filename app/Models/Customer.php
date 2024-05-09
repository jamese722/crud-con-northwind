<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $CustomerID
 * @property $CompanyName
 * @property $ContactName
 * @property $ContactTitle
 * @property $Address
 * @property $City
 * @property $Region
 * @property $PostalCode
 * @property $Country
 * @property $Phone
 * @property $Fax
 *
 * @property Customercustomerdemo[] $customercustomerdemos
 * @property Order[] $orders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CustomerID', 'CompanyName', 'ContactName', 'ContactTitle', 'Address', 'City', 'Region', 'PostalCode', 'Country', 'Phone', 'Fax'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customercustomerdemos()
    {
        return $this->hasMany(\App\Models\Customercustomerdemo::class, 'CustomerID', 'CustomerID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'CustomerID', 'CustomerID');
    }
    
}
