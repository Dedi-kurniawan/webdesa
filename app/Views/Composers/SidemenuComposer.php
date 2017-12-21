<?php 
namespace App\Views\Composers;

use Illuminate\View\View;
use App\Category;

class SidemenuComposer
{
    public function compose(View $view)
    {
        $this->composeMenuFakultas($view);
    }

    public function composeMenuFakultas(View $view)
    {
        $menuCategory = Category::with('posts')->get();

        $view->with('menuCategory', $menuCategory);
    }

}

