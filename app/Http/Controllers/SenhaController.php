<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenhaController extends Controller
{
    public function alterar(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:6',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Senha atual incorreta.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Senha alterada com sucesso!');
    }

}
