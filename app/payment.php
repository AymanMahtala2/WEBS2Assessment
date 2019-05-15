<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $mollie_id
 * @property integer $payer_id
 * @property string $payment_id
 * @property boolean $paid
 * @property string $created_at
 * @property string $updated_at
 * @property Molly $molly
 * @property User $user
 */
class payment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['mollie_id', 'payer_id', 'payment_id', 'paid', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function molly()
    {
        return $this->belongsTo('App\Molly', 'mollie_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'payer_id');
    }
}
