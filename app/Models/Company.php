<?php

namespace App\Models;

use App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

     protected $guarded = [];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}