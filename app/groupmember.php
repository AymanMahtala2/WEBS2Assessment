<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $group_id
 * @property integer $user_id
 * @property Group $group
 * @property User $user
 */
class groupmember extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['group_id', 'user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
