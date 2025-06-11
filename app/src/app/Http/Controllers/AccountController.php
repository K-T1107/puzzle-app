<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;
use function Laravel\Prompts\password;

class AccountController extends Controller
{
    //アカウント一覧を表示する
    public function index(Request $request)
    {
        $title = 'アカウント一覧';
        $data = [
            [
                'ID' => '1',
                'name' => 'テストマン',
                'password' => '$3$3kdiei2',
            ],
            [
                'ID' => '2',
                'name' => 'jobi',
                'password' => '$9$s#2kdie',
            ]
        ];
        return view('accounts/index', ['title' => $title, 'accounts' => $data]);
    }

    public function login(Request $request)
    {
        return view('accounts/login', ['error_id' => $request->error_id]);
    }

    public function doLogin(Request $request)
    {
        if ($request['name'] === "jobi" && $request['password'] === "jobi") {
            return redirect('accounts/management');
        } else {
            return redirect('/1');
        }
    }

    public function management(Request $request)
    {
        return view('accounts/management');
    }

    public function scores(Request $request)
    {
        $title = 'スコア一覧';
        $data = [
            [
                'ID' => '1',
                'name' => 'テストマン',
                'score' => '100',
            ],
            [
                'ID' => '2',
                'name' => 'jobi',
                'score' => '500',
            ]
        ];
        return view('accounts/scores', ['title' => $title, 'accounts' => $data]);
    }
}
