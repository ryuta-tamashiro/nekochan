<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Nekochan;
use Illuminate\Http\Request;

class NekochansController extends Controller
{
    /**
     * 猫ちゃん一覧画面
     *
     * @return mixed
     */
    public function index()
    {
        $nekochans = Nekochan::
            select('id', 'name', 'birthday', 'created_at', 'updated_at')
                ->get()
                ;

        return view('nekochan/index', compact('nekochans'));
    }

    /**
     * 猫ちゃん新規登録画面
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

    /**
     * 猫ちゃん詳細画面
     *
     * @param int $id
     *
     * @return mixed
     */

    public function show($id)
    {
        $nekochan = Nekochan::find($id);

        return view('nekochan/show', compact('nekochan'));
    }
}
