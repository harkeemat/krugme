<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $fillable = [
        'friendship_id', 'sender_id', 'sender_type', 'receipt_id', 'receipt_type', 'message','status'
    ];

    public function scopeWhereSender_id($query, $model)
    {
        return $query->where('sender_id', $model->getKey())->where('sender_type', $model->getMorphClass());
    }

    public function scopeWhereReceipt_id($query, $model)
    {
        return $query->where('receipt_id', $model->getKey())->where('receipt_type', $model->getMorphClass());
    }

    public function scopeBetweenModels($query, $sender, $receipt)
    {
        $query->where(function ($queryIn) use ($sender, $receipt){
            $queryIn->where(function ($q) use ($sender, $receipt) {
                $q->whereSender_id($sender)->whereReceipt_id($receipt);
            })->orWhere(function ($q) use ($sender, $receipt) {
                $q->whereSender_id($receipt)->whereReceipt_id($sender);
            });
        });

    }
}
