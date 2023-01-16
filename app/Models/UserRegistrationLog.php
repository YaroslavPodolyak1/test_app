<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property Carbon $user_registration_at
 * @property   int $user_id
 */
class UserRegistrationLog extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_registration_at'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
