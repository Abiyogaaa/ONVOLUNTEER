<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'address',
        'phone_number',
        'logo',
        'website',
        'activity_field',
        'users_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'users_id' => 'integer',
    ];

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Users::class);
    }
}
