<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PermissionRequest;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function createUser()
    {
        $roles = DB::table('roles')->get();
        return view('admin.user', compact('roles'));
    }

    public function create_user(Request $request)
    {
        DB::table('users')->insert($request->except('_token'));
        return redirect()->route('dashboard');
    }

    public function createPermission()
    {
        return view('admin.permission');
    }

    public function create_permission(PermissionRequest $request)
    {
        DB::table('permissions')->insert([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect()->route('create-permission');
    }

    public function createRole()
    {
        $permissions = DB::table('permissions')->get();
        return view('admin.role', compact('permissions'));
    }

    public function create_role(RoleRequest $request)
    {
        $role = Role::create([
            'name' => $request->name
        ]);
        if ($request->permissions) {
            $role->permissions()->sync($request->permissions);
        }
        return redirect()->route('dashboard');
    }
}
