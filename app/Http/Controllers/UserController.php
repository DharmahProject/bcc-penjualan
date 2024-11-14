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
        $user = User::find($request->id);

        $request->validate([
            'name' => 'required|string|max:500',
            'email' => [
                'required',
                'email',
                'max:50',
                // Apply uniqueness check only when updating an existing user
                ($user && $request->email !== $user->email)
                    ? Rule::unique('users', 'email')
                    : ''
            ],
            'password' => 'required|string|max:500',
            'phone' => 'required|numeric',
            'level' => 'required|numeric',
            'photo' => $request->hasFile('photo')
                ? 'required|image|mimes:jpeg,png,jpg|max:2048'
                : 'nullable',
        ]);

        if ($request->filled('id')) {
            if ($user) {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'level_id' => $request->level,
                    'password' => bcrypt($request->password)
                ]);

                if ($request->hasFile('photo')) {
                    $path = $request->file('photo')->store('user_photos', 'public');
                    $user->photo = $path;
                    $user->save();
                }
            } else {
                return response()->json(['error' => 'Data tidak ditemukan'], 404);
            }
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->phone = $request->phone;
            $user->level_id = $request->level;
            $user->is_deleted = 0;

            if ($request->hasFile('photo')) {
                $path = $request->file('photo')->store('user_photos', 'public');
                $user->photo = $path;
            } else {
                $user->photo = "user_photos/user.png";
            }

            $user->save();
        }

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
