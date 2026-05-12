<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // Первая страница: каталог товаров
    public function index()
    {
        $items = Item::all();
        return view('front.main', ['main' => $items]);
    }

    // 🔹 Вторая страница: "О проекте"
    public function about()
    {
        // Можно передать данные, если нужно
        $data = [
            'title' => 'О нашем проекте',
            'description' => 'Мы создаём удобные решения для вашего бизнеса.',
            'contacts' => [
                'email' => 'info@example.com',
                'phone' => '+7 (999) 123-45-67'
            ]
        ];
        
        return view('front.about', ['data' => $data]);
    }
}