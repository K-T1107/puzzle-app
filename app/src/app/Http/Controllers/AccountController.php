<?php

namespace App\Http\Controllers;

use App\Models\Account;
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
//        $data = [
//            [
//                'ID' => '1',
//                'name' => 'テストマン',
//                'password' => '$3$3kdiei2',
//            ],
//            [
//                'ID' => '2',
//                'name' => 'jobi',
//                'password' => '$9$s#2kdie',
//            ]
//        ];

        //テーブルのすべてのレコードを取得
        $accounts = Account::all();
        //テーブルのレコード数を取得
        //$accounts = Account::count();
        //idで検索,見つからなかったら404エラー
        //$accounts = Account::findOrFail(1);
        //条件を指定して取得
        //$accounts = Account::where('name', '=', 'jobi')->get();
        //複数の条件を指定して取得
        //$accounts = Account::where('name', '=', 'jobi')->where('created_at', '>=', '2025-06-13')->get();
        return view('accounts/index', ['title' => $title, 'accounts' => $accounts]);
    }

//    public function login(Request $request)
//    {
//        return view('accounts/login', ['error_id' => $request->error_id]);
//    }

//    public function doLogin(Request $request)
//    {
//        $validated = $request->validate([
//            'name' => ['required', 'min:4', 'max:20'],
//            'password' => ['required']
//        ]);
//
//        if ($request['name'] === "jobi" && $request['password'] === "jobi") {
//            return redirect('accounts/management');
//        } else {
//            return redirect('/1');
//        }
//    }
//
//    public function doLogout(Request $request)
//    {
//            return redirect('/');
//    }

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
