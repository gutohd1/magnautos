<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicles extends Model
{
    use HasFactory;

    const CONDITION_NEW = 'Novo';
    const CONDITION_USED = 'Usado';
    const CONDITION = [0 => self::CONDITION_NEW, 1 => self::CONDITION_USED];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * Get the gearbox type for the vehicle.
     */
    public function gearbox(): BelongsTo
    {
        return $this->belongsTo(Gearbox::class);
    }

    /**
     * Get the fuel type for the vehicle.
     */
    public function fuel(): BelongsTo
    {
        return $this->belongsTo(Fuel::class);
    }

    /**
     * Get the manufacturer for the vehicle.
     */
    public function make(): BelongsTo
    {
        return $this->belongsTo(Make::class);
    }

    /**
     * Get the condition type for the vehicle.
     */
    public function condition(): string
    {
        return self::CONDITION[$this->type];
    }
}
