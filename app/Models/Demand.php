<?php

namespace App\Models;

use App\Observers\DemandObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([DemandObserver::class])]
class Demand extends Model
{
    /** @use HasFactory<\Database\Factories\DemandFactory> */
    use HasFactory;
}
