<?php

namespace Webkul\Company\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'subdomain',
        'custom_domain',
        'description',
        'is_active',
    ];
}