<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateActivationRequest;
use App\Models\License;
use Exception;
use Illuminate\Http\Request;

class ActivationsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateActivationRequest $request)
    {
        $this->checkLimits($license = $request->getLicense());

        $activation = $license->activations()->create(['name' => $request->name]);

        $activation->signNewActivation();
    }

    private function checkLimits(License $license)
    {
        if ($license->activations()->count() >= $license->maximumActivationCount()) {
            throw new Exception("Could not create a new activation because the maximum of {$license->maximumActivationCount()} was reached.");
        }
    }
}
