<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Page extends Controller
{
    public function showOne($id)
    {
        //return pow($id, 2);
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];
        if (isset($pages[$id]))
        {
            return $pages[$id];
        } else {
            return 'страницы с таким номером нет';
        }
    }

    public function showAll()
    {
        return 'work All';
    }
}
