<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function listLicenses()
    {
        $licenses = License::all();
        return view('licenses', compact('licenses'));
    }

    public function registerLicense(Request $request)
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

    public function proses_ubah_status(Request $request)
    {
        $id = $request->id;
        $status = $request->status;


        License::where('id', $id)
            ->update([
                'status' => $status,
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Status Berhasil Diubah</p>");
        return redirect()->to('/licenses-view');

    }
}