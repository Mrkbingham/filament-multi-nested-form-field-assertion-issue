<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

    /**
     * Customer group relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customerGroup()
    {
        return $this->belongsTo(CustomerGroup::class);
    }
}
