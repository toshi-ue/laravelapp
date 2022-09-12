<?php
// ビューコンポーザーのクラスは配置する場所は特に用意されていない
namespace App\Http\Composers;

use Illuminate\View\View;

class Chapter3Composer
{
    public function compose(View $view)
    {
        $view->with('view_message', 'this view is "' . $view->getName() . '"!!');
    }
}
