<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateActivationRequest;
use Exception;
use Illuminate\Http\Request;

class ActivationsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateActivationRequest $request)
    {
        $license = $request->getLicense();

        if ($license->activations()->count() >= $license->maximumActivationCount()) {
            throw new Exception("Could not create a new activation because the maximum of {$license->maximumActivationCount()} was reached.");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
