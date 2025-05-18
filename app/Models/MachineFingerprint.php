<?php

namespace App\Models;

use Converge\Contracts\Action;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MachineFingerprint extends Model
{
    protected $guarded = ['id'];
    /**
     * Get the user that owns the License
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activation(): BelongsTo
    {
        return $this->belongsTo(Activation::class);
    }
}
