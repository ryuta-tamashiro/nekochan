<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Nekochan;
use Illuminate\Http\Request;

class NekochansController extends Controller
{
    /**
     * 猫ちゃん一覧ページ
     *
     * @return mixed
     */
    public function index()
    {
        $nekochans = Nekochan::
            select('id', 'name', 'birthday', 'created_at', 'updated_at')
            ->get()
            ->toArray()
            ;

        return view('nekochan/index', compact('nekochans'));
    }

    /**
     * 猫ちゃん新規登録ページ
     *
     * @return mixed
     */
    public function create()
    {
        return view('nekochan/create');
    }

    /**
     * 猫ちゃん新規登録処理
     *
     * @param Request $request
     *
     * @return mixed
     */

    public function store(Request $request)
    {
        DB::transaction(function () use($request) {
            Nekochan::create([
                'name'     => $request->input('name'),
                'birthday'    => $request->input('birthday'),
            ]);
        });

        return redirect('nekochan');
    }
}
