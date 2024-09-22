<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function mostrarExer1(){
        return view("exer1");
    }
    public function calcularExer1(Request $request){
        $num1 = (float)$request->input("num1");
        $num2 = (float)$request->input("num2");
        
        return $num1 + $num2;
    }

    public function mostrarExer2(){
        return view("exer2");
    }
    public function calcularExer2(Request $request){
        $num1 = (float)$request->input("num1");
        $num2 = (float)$request->input("num2");
        
        return $num2 - $num1;
    }

    public function mostrarExer3(){
        return view("exer3");
    }
    public function calcularExer3(Request $request){
        $num1 = (float)$request->input("num1");
        $num2 = (float)$request->input("num2");
        
        return $num2 * $num1;
    }

    public function mostrarExer4(){
        return view("exer4");
    }

    public function calcularExer4(Request $request)
    {
        $num1 = (float)$request->input("num1");
        $num2 = (float)$request->input("num2");

        if ($num2 == 0) {
            return response('Erro: Não é possível multiplicar por zero.', 400);
        }

        return $num1 / $num2;

    }
    public function mostrarExer5(){
        return view("exer5");
    }

    public function calcularExer5(Request $request)
    {
        $num1 = (float)$request->input("num1");
        $num2 = (float)$request->input("num2");
        $num3 = (float)$request->input("num3");
    
        $soma = $num1 + $num2 + $num3;
        $media = $soma / 3;
        return $media;
    }

    public function mostrarExer6(){
        return view("exer6");
    }

    public function calcularExer6(Request $request)
    {
        $ce = (float)$request->input("ce");
        $fa = ($ce * 9/5) + 32;
        return $fa;
    }

    
}
