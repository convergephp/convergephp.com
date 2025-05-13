<?php

namespace App\Providers;

use App\Models\License;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class LicenseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Auth::viaRequest('license-verify', function (Request $request) {

            $licenseKey = $request->getPassword();
            $username = $request->getUser();
            $headers = json_encode($request->getTrustedHeaderSet());
            
            info("license key is : $licenseKey");
            info("email is : $username");
            info("headers : $headers");
            info("end line");

            $license = License::query()
                ->where('key', $licenseKey)
                ->first();

            if (! $license) {
                abort(401, 'License key invalid');
            }

            if ($license->isExpired()) {
                abort(401, 'This license is expired');
            }

            $license->increment('satis_authentication_count');

            return $license;
        });
    }
}
