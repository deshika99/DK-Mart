<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash; // Added import
use Illuminate\View\View;
/*
class ProfileController extends Controller
{
    
     * Display the user's profile form.
     
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /*
     * Update the user's profile information.
     
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /*
     * Delete the user's account.
     
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
*/

class ProfileController extends Controller
{
    // Show the Edit Profile Form
    public function edit()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('user_dashboard.edit-profile', compact('user'));
    }

    /**
     * Update the Profile Details
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate input
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone_num' => 'nullable|string|max:15',
            'date_of_birth' => 'nullable|date',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Update user details
        $user->name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone_num');
        $user->dob = $request->input('date_of_birth');

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($user->profile_image && Storage::exists('public/' . $user->profile_image)) {
                Storage::delete('public/' . $user->profile_image);
            }
        
            try {
                // Store the new image
                $imagePath = $request->file('profile_image')->store('profile_images', 'public');
        
                
                $user->profile_image =  $imagePath; 
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading image: ' . $e->getMessage());
            }
        }

        $user->save(); // Save the changes to the database

        return redirect()->route('edit-profile')->with('success', 'Profile updated successfully.');
    }

    /**
     * Change User Password
     */
    public function changePassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'], // 'confirmed' requires 'new_password_confirmation' field
        ]);

        // Check if the current password matches
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return response()->json(['error' => 'Current password does not match'], 400);
        }

        // Update the password
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return response()->json(['success' => 'Password changed successfully']);
    }

    
}