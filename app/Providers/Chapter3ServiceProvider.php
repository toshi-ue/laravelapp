<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class Chapter3ServiceProvider extends ServiceProvider
{
    // 今回は必要なし
    // /**
    //  * Register services.
    //  *
    //  * @return void
    //  */
    // public function register()
    // {
    //     //
    // }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // クロージャでコンポーザ処理を作る(用意する)
        // view()->composerともかける
        View::composer('chapter3.index', function ($view) {
            // view_message
            //     Illuminate\View 名前空間にあるViewクラスのインスタンス
            // withメソッド
            //     ビューに変数を追加する
            $view->with('view_message', 'composer message!');
        });
    }
}
