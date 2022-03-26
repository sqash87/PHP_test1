<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = ['id','customer_name','customer_email', 'equipment_id'];

    public function equipments()
    {
        return $this->belongsTo(related: Customers::class,foreignkey:'equipment_id', ownerkey:'id');
    }
    
}
