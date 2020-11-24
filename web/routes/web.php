<?php

// APIのURL以外のリクエストに対してはindexテンプレートを返す
// 画面遷移はフロントエンドのVueRouterが制御する
// Route::get('/{any?}', fn() => view('index'))->where('any', '.+'); // PHP7.4の記法

Route::get('/{any?}', function(){
    return view('index');
    // ->where('any', '.+');
});