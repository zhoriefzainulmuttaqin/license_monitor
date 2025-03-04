<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LicenseResource;
use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function index()
    {
        //get all license
        $license = License::latest()->paginate(5);

        //return collection of license as a resource
        return new LicenseResource(true, 'List Data license', $license);
    }
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'domain' => 'required|unique:licenses,domain'
        ]);

        $licenseKey = strtoupper(bin2hex(random_bytes(16))); // Generate random key

        $license = License::create([
            'client_name' => $request->client_name,
            'domain' => $request->domain,
            'license_key' => $licenseKey,
            'status' => 'active',
        ]);

        return response()->json([
            'message' => 'License created successfully',
            'license_key' => $license->license_key
        ]);
    }

    public function checkLicense(Request $request)
    {
        $license = License::where('license_key', $request->license_key)
            ->where('domain', $request->domain)
            ->first();

        if (!$license) {
            return response()->json(['status' => 'error', 'message' => 'Invalid License'], 403);
        }

        if ($license->status !== 'active') {
            return response()->json(['status' => 'expired', 'message' => 'License Expired'], 403);
        }

        return response()->json(['status' => 'active']);
    }
}