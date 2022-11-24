<?php

namespace App\Http\Controllers;

use App\Models\AdminCategories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    public function CreateCategory()
    {
        return view('pages.admincp.categories.addCategory');
    }

    public function StoreCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|unique:admin_categories',
            'visibility' => 'required',
        ]);

        $data = new AdminCategories();
        // $data = save();
    }
}
