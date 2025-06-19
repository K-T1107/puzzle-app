<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('accounts/login', ['error_id' => $request->error_id]);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
            'password' => ['required']
        ]);

        //条件を指定して取得
        $account = Account::where('name', '=', 'jobi')->get();

        if ($request['name'] === "jobi") {
            if (Hash::check($request->password, $account[0]->password)) {
                //一致
                return redirect('accounts/management');
            }
        } else {
            return redirect('/1');
        }
    }

    public function logout(Request $request)
    {
        return redirect('/');
    }

    public function management(Request $request)
    {
        return view('accounts/management');
    }

    public function players(Request $request)
    {
        $account = Item::class->get();
        return view('auth/players');
    }
}
