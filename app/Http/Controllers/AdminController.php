<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\AdminFunctions;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $active = AdminFunctions::active_users();

        return view('admin.dashboard', [
            'active' => $active
        ]);
    }

    public function users()
    {
        $active = AdminFunctions::verify_users();

        return view('admin.users.users', [
            'active' => $active
        ]);
    }

    public function user_edit($id)
    {
        $user = AdminFunctions::user_edit($id);

        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    public function user_update(Request $request, $id)
    {
        $update_user = User::where('id', $id)->update([
            'username' => $request->input('name'),
        ]);

        return redirect('/admin/');
    }

    public function user_delete($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect('/admin/');
    }
}
