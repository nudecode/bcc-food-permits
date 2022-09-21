<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table = 'vendors';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['id','vendor_name','slug','contact_name','contact_lastname', 'email', 'mobile', 'address', 'suburb', 'pc', 'cardstamps', 'vendor_image', 'created_at', 'updated_at', 'permit_type'];
}
