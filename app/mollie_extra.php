<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $mollie_id
 * @property string $filename
 * @property string $created_at
 * @property string $updated_at
 * @property Molly $molly
 */
class mollie_extra extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['mollie_id', 'filename', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function molly()
    {
        return $this->belongsTo('App\Molly', 'mollie_id');
    }
}
