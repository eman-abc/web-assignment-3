<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
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
     * Store a new Bootcamp service.
     */
    public function storeBootcamp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $validatedData['type'] = 'bootcamp';

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($validatedData);

        return redirect()->route('bootcamp')->with('success', 'Bootcamp service created successfully.');
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

    /**
     * Store a new Sports Training service.
     */
    public function storeSportsTraining(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $validatedData['type'] = 'sports-training';

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($validatedData);

        return redirect()->route('sportsTraining')->with('success', 'Sports Training service created successfully.');
    }

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