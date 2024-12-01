<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'activity_id',
        'content',
        'rating',
        'users_activity_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'activity_id' => 'integer',
        'users_activity_id' => 'integer',
    ];

    public function usersActivity(): BelongsTo
    {
        return $this->belongsTo(UsersActivity::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Users::class);
    }

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
