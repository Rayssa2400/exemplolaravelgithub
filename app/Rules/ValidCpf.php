<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidCpf implements Rule
{
    public function passes($attribute, $value)
    {
        // Remover caracteres não numéricos
        $cpf = preg_replace('/[^0-9]/', '', $value);

        // Verificar se tem 11 dígitos ou se são todos iguais
        if (strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Validação do CPF com os dígitos verificadores
        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'O CPF informado não é válido.';
    }

}
