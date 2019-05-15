<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $accountnumber
 * @property string $mollie_title
 * @property string $optional_description
 * @property float $amount
 * @property string $currency
 * @property string $date_sent
 * @property boolean $active
 * @property string $created_at
 * @property string $updated_at
 * @property Bankaccount $bankaccount
 * @property User $user
 * @property MollieExtra[] $mollieExtras
 * @property Payment[] $payments
 */
class mollie extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'accountnumber', 'mollie_title', 'optional_description', 'amount', 'currency', 'date_sent', 'active', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bankaccount()
    {
        return $this->belongsTo('App\Bankaccount', 'accountnumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mollieExtras()
    {
        return $this->hasMany('App\MollieExtra', 'mollie_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Payment', 'mollie_id');
    }
}
