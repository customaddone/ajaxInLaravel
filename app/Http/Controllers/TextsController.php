<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextsController extends Controller
{
    public function index(Request $request)
    {
        $items = Text::all();
        return view('texts.index', [ 'items' => $items ]);
    }
    public function show($id)
    {
        /* いくつかの項目はtranslateCharacterで分かりやすい形に変換した */
        $item = Text::find($id);
        return view('texts.show', [ 'item' =>  $item ]);
    }
    public function create()
    {
        return view('texts.new');
    }
    public function store(Request $request)
    {
        // まずUserクラスのインスタンス生成　バリデーションはHttp/Requestsにあります
        $item = new Text;
        /* リクエストされた値を保管する値を用意します
        　　all()は全入力を「配列」として呼び出す値です */
        $form = $request->all();
        // トークンの値は使わないので除外します
        unset($form['_token']);
        /* 先ほと生成したインスタンスに値を設定して保存します
        　　直接$person->id = $request->id とすることも出来ます */
        $item->fill($form)->save();
        return redirect('/texts');
    }
    public function edit($id)
    {
        $item = Text::find($id);
        return view('texts.edit', [ 'item' => $item ] );
    }
    public function update(Request $request)
    {
        $user = Text::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/texts');
    }
    public function destroy($id)
    {
        $item = Text::find($id)->delete();
        return redirect('/texts');
    }
}
