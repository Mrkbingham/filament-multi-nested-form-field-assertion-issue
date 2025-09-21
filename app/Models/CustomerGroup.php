<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Model
{
    /**
     * The customer org that this group belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customerOrg()
    {
        return $this->belongsTo(CustomerOrg::class);
    }
}
