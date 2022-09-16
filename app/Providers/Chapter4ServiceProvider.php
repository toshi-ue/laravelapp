<?php

namespace App\Providers;

use App\Http\Validators\Chapter4;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\Chapter4Validator;

class Chapter4ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // バリデーターは $this->app['validator'] という場所に保管されている
        $validator = $this->app['validator'];
        // リゾルブ(バリデーションの処理を行う)の処理を設定する
        $validator->resolver(function ($translator, $data, $rules, $messages) {
            return new Chapter4Validator($translator, $data, $rules, $messages);
        });
        // ビューコンポーザークラスの作成
        View::composer(
            'chapter3.index',
            'App\Http\Composers\Chapter3Composer'
        );
    }
}
