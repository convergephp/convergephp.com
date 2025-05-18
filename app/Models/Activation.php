<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Crypto\Rsa\PrivateKey;

/* inspired by spatie work */
class Activation extends Model
{
    /** @use HasFactory<\Database\Factories\ActivationFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'signed_activation' => 'json',
            'expires_at' => 'datetime'
        ];
    }

    public static function booted()
    {
        static::creating(function (Activation $activation) {
            $activation->uuid = (string)Str::uuid();
        });
    }

    /** @return BelongsTo<License, $this> */
    public function license(): BelongsTo
    {
        return $this->belongsTo(License::class);
    }

    public function signNewActivation(): void
    {
        $privateKeyString = $this->license->product->private_key;

        if (empty($privateKeyString)) {
            throw new Exception("Cannot create a signed license for a product without a private key");
        }

        $activationProperties = [
            'activation_code' => $this->uuid,
            'expires_at' => $this->license->expires_at->timestamp,
            'license_key' => $this->license->key,
            'licensed_to' => Str::ascii($this->license->user->email),
        ];

        ksort($activationProperties);

        $signature = PrivateKey::fromString($privateKeyString)->sign(json_encode($activationProperties));

        $signedActivation = array_merge($activationProperties, compact('signature'));

        $this->update(['signed_activation' => $signedActivation]);
    }
}
