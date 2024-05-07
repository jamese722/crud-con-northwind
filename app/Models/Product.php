<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $ProductID
 * @property $ProductName
 * @property $SupplierID
 * @property $CategoryID
 * @property $QuantityPerUnit
 * @property $UnitPrice
 * @property $UnitsInStock
 * @property $UnitsOnOrder
 * @property $ReorderLevel
 * @property $Discontinued
 *
 * @property Category $category
 * @property Supplier $supplier
 * @property Orderdetail[] $orderdetails
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ProductID', 'ProductName', 'SupplierID', 'CategoryID', 'QuantityPerUnit', 'UnitPrice', 'UnitsInStock', 'UnitsOnOrder', 'ReorderLevel', 'Discontinued'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'CategoryID', 'CategoryID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(\App\Models\Supplier::class, 'SupplierID', 'SupplierID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderdetails()
    {
        return $this->hasMany(\App\Models\Orderdetail::class, 'ProductID', 'ProductID');
    }
    
}
