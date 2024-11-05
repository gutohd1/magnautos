<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Configuration extends Model
{
    use HasFactory;

    /**
     * Get the manufacturer for the vehicle.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ConfigurationType::class);
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['formatted'];

    /**
     * Format value for phone or mobile numbers
     *
     * @return string|array|null
     */
    public function getFormattedAttribute(): string | array | null
    {
        if (in_array($this->name, ['phone', 'mobile'])) {
            preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $this->value, $matches);
            return sprintf("(%s) %s-%s", $matches[1], $matches[2], $matches[3]);
        } else if (in_array($this->name, ['team-data'])) {
            if (is_string($this->value) && ! empty($this->value)) {
                return json_decode($this->value);
            }
            return null;
        }
        return null;
    }

}
