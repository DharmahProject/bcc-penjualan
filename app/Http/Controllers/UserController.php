<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        if (auth()->user()->level_id != 1) {
            return redirect('/dashboard')->with('error', 'You do not have access to this page.');
        }

        $levels = Level::where('is_deleted', 0)->get();
        $users = User::with(['level'])
            ->where('is_deleted', 0)
            ->get();

        return view('user.user.index', [
            'levels' => $levels,
            'users' => $users,
        ]);
    }

    public function search(Request $request)
    {
        $email = $request->get('email');
        $name = $request->get('name');

        $users = User::query();

        if ($email) {
            $users->where('email', 'like', '%' . $email . '%');
        }

        if ($name) {
            $users->where('name', 'like', '%' . $name . '%');
        }

        $users = $users->where('is_deleted', 0)->get();

        $view = view('user.user.datauser', ['users' => $users])->render();

        return response()->json(['data' => $view]);
    }

    public function addedit($id = null)
    {
        if (auth()->user()->level_id != 1) {
            return redirect('/dashboard')->with('error', 'You do not have access to this page.');
        }

        $levels = Level::where('is_deleted', 0)->get();
        $user = null;

        if ($id) {
            $user = User::findOrFail($id);
        }

        return view('user.user.addedit', [
            'id' => $id,
            'levels' => $levels,
            'user' => $user
        ]);
    }

    public function submit(Request $request)
    {
        // Retrieve user data by ID if provided
        $user = $request->filled('id') ? User::find($request->id) : null;

        // Validate the input
        $request->validate([
            'name' => 'required|string|max:500',
            'email' => [
                'required',
                'email',
                'max:50',
                // Jika sedang menambah data baru, pastikan email unik
                $request->filled('id')
                    ? Rule::unique('users', 'email')->ignore($user?->id) // Untuk update, abaikan email milik user yang sedang diedit
                    : Rule::unique('users', 'email'), // Untuk insert, email harus unik
            ],
            'password' => $user ? 'nullable|string|max:500' : 'required|string|max:500',
            'phone' => 'required|numeric',
            'level' => 'required|numeric',
            'photo' => $request->hasFile('photo')
                ? 'required|image|mimes:jpeg,png,jpg|max:2048'
                : 'nullable',
        ]);

        if ($user) {
            // Update existing user
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'level_id' => $request->level,
                // Update password only if provided
                'password' => $request->password ? bcrypt($request->password) : $user->password,
            ]);

            if ($request->hasFile('photo')) {
                // Delete the old photo if it exists and isn't the default
                if ($user->photo && $user->photo !== 'user_photos/user.png') {
                    Storage::disk('public')->delete($user->photo);
                }

                // Store the new photo
                $path = $request->file('photo')->store('user_photos', 'public');
                $user->photo = $path;
                $user->save();
            }
        } else {
            // Insert new user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'level_id' => $request->level,
                'is_deleted' => 0,
                'photo' => $request->hasFile('photo')
                    ? $request->file('photo')->store('user_photos', 'public')
                    : 'user_photos/user.png',
            ]);
        }

        // Return success response
        return response()->json(['success' => 'Data berhasil disimpan'], 200);
    }

    public function show(string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            // Set attribute and save directly
            $user->is_deleted = 1;
            $user->save();

            return response()->json(['success' => 'Data berhasil dihapus'], 200);
        } else {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }
    }
}
