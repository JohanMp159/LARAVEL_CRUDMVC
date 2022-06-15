<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    public function sumar($num1, $num2){
        $suma = $num1 + $num2;
        return $suma;
    }
    public function restar($num1, $num2){
        $resta = $num1 - $num2;
        return $resta;
    }
    public function multiplicar($num1, $num2){
        $multiplicacion = $num1 * $num2;
        return $multiplicacion;
    }
    public function dividir($num1, $num2){
        $division = $num1 / $num2;
        return $division;
    }
}

    //Php artisan make:test app/Models/CalculadoraTest
?>
