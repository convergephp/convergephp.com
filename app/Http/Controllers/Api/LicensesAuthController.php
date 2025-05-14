<?php

namespace App\Http\Controllers\Api;

use App\Models\License;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// inspired by spatie satis controller class 
class LicensesAuthController extends Controller
{
    public function __invoke(Authenticatable $license, Request $request)
    {
        if (! $license instanceof License) {
            abort(401);
        }

        if ($license->hasAdminKeyAccess()) {
            return response('valid');
        }

        /*
         * Find the package that is actually being requested.
         */
        $package = $this->getRequestedPackage($request);

        // find the product that this linceses belongs blade components
        $hasAccess = License::query()
            ->whereNotExpired()
            ->whereHas('activations',function(Builder $query))
            ->whereHas('')
            ->contains(
                fn (License $license) => $license->assignment->purchasable->includesPackageAccess($package)
            );

        abort_unless($hasAccess, 401);

        return response('valid');
    }

    private function getRequestedPackage(Request $request): string
    {
        $originalUrl = $request->header('X-Original-URI', '');

        preg_match('#/dist/(?<package>spatie/[^/]*)/#', $originalUrl, $matches);

        if (! key_exists('package', $matches)) {
            abort(401, 'Missing X-Original-URI header');
        }

        return $matches['package'];
    }
}
