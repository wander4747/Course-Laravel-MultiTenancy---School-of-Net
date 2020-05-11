<?php

namespace App\Models;

use App\Tenant\TenantModels;
use App\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use TenantModels;

    protected $fillable = ['name'];


}
