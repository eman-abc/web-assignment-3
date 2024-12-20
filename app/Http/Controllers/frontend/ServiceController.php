<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    

    public function submitAccessKey(Request $request)
    {
        // Validate the input key
        $request->validate([
            'access_key' => 'required|string',
        ]);

        $accessKey = $request->input('access_key');

        // Check if the key is valid
        if ($accessKey !== '123') {
            return response()->json(['error' => 'Invalid key'], 403);
        }

        // Store the key in the session
        $request->session()->put('access_key', $accessKey);

        return response()->json(['success' => true, 'message' => 'Access granted']);
    }

    
    public function modifyServices()
{
    return view('frontend.modifyservices'); // Adjust the path if needed
}

    
    /**
     * Display Bootcamp services.
     */
    public function bootcamp()
    {
        $bootcampServices = Service::where('type', 'bootcamp')->get();
        return view('frontend.bootcamp', compact('bootcampServices'));
    }

    /**
     * Show form to create a new Bootcamp service.
     */
    public function createBootcamp()
    {
        return view('frontend.bootcamp-create');
    }


    /**
     * Show form to edit an existing Bootcamp service.
     */
    public function editBootcamp($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.bootcamp-edit', compact('service'));
    }

    /**
     * Update an existing Bootcamp service.
     */
    public function updateBootcamp(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $validatedData['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validatedData);

        return redirect()->route('bootcamp')->with('success', 'Bootcamp service updated successfully.');
    }

    /**
     * Delete a Bootcamp service.
     */
    public function destroyBootcamp($id)
    {
        $service = Service::findOrFail($id);

        // Delete image file if exists
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('bootcamp')->with('success', 'Bootcamp service deleted successfully.');
    }

    /**
     * Display Sports Training services.
     */
    public function sportsTraining()
    {
        $sportsServices = Service::where('type', 'sports-training')->get();
        return view('frontend.sports-training', compact('sportsServices'));
    }

    /**
     * Show form to create a new Sports Training service.
     */
    public function createSportsTraining()
    {
        return view('frontend.sports-training-create');
    }


    public function storeService(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'type' => 'required|string|in:bootcamp,sports-training', // Validate service type
        ]);
    
        // Store the image if present
        if ($request->hasFile('image')) {
            $fileName = time() . '-' . $request->file('image')->getClientOriginalName();
            $validatedData['image'] = $request->file('image')->move(
                public_path('frontend/images/NewServices'),
                $fileName
            );
    
            // Save only the relative path in the database
            $validatedData['image'] = 'frontend/images/NewServices/' . $fileName;
        }
    
        // Create the service with the validated data
        Service::create($validatedData);
    
        // Redirect dynamically based on the type selected
        return redirect()->route($validatedData['type'])->with('success', ucfirst($validatedData['type']) . ' service created successfully.');
    }
    
    
    /**
     * Store a new Sports Training service.
     */


    /**
     * Show form to edit an existing Sports Training service.
     */
    public function editSportsTraining($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.sports-training-edit', compact('service'));
    }

    /**
     * Update an existing Sports Training service.
     */
    public function updateSportsTraining(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $validatedData['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validatedData);

        return redirect()->route('sportsTraining')->with('success', 'Sports Training service updated successfully.');
    }

    /**
     * Delete a Sports Training service.
     */
    public function destroySportsTraining($id)
    {
        $service = Service::findOrFail($id);

        // Delete image file if exists
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('sportsTraining')->with('success', 'Sports Training service deleted successfully.');
    }

    /**
     * Display Yoga services (read-only).
     */
    public function yoga()
    {
        $yogaServices = Service::where('type', 'yoga')->get();
        return view('frontend.yoga', compact('yogaServices'));
    }
}