<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Валидация данных
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Попытка аутентификации
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Если аутентификация успешна, перенаправляем пользователя на главную страницу
            return redirect()->intended('/');
        }

        // Если аутентификация не удалась, возвращаем пользователя на страницу входа с ошибкой
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        // Валидация данных
        /*$request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);*/

        // Создание нового пользователя
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->fio = $request->fio;
        $user->number = $request->phone;
        $user->assignRole('user');
        $user->save();


        // Перенаправление на главную страницу
        return redirect('/auth');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Перенаправление на главную страницу после выхода
        return redirect('/');
    }
}
