<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 👇 Обязательно подключите вашу Модель (замените Item на Main, если модель называется Main)
use App\Models\Main; 

class MainController extends Controller
{
    /**
     * Отображение главной страницы с товарами
     */
    public function index()
    {
        // Получаем все записи из БД
        // Если модель называется Main, напишите: $data = Main::all();
        $items = Main::all(); 

        // Передаем данные в вид 'front.main'
        // Ключ 'main' в массиве позволяет использовать переменную $main в шаблоне
        return view('front.main', ['main' => $items]);
    }
}