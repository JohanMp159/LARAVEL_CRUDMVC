<?php

namespace Tests\Feature\app\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Calculadora;

//Pruebas unitarias con phpunit
class CalculadoraTest extends TestCase
{
    /** @test */

    public function verificarSumaMenorMayorPositivo():void{
        $num1= 1;
        $num2= 2;

        $calculadora = new Calculadora();
        $resultado= $calculadora->sumar($num1,$num2);
        $this->assertEquals(3,$resultado); //Primer parametro es el valor esperado, valor calculador
    }
}


//Ejecutar prueba unitaria
//vendor/bin/phpunit --filter CalculadoraTest