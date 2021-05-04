<?php
    $fn = 'numero';
    function numero($num){
        return ($num) ? '1' : '0';
    }

    // Operadores logicos 

    //AND - &&
    $A = (bool) FALSE;
    $B = (bool) TRUE;

    echo '<h1>Operadores logicos</h1>';

    echo <<< PlantillaOperadorAND
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        .linea{
            border-left-color: #aaa;
            border-left-style: 2px;
            border-left-style: solid;
        }
        div{
            display: initial;
            padding: 0 10px;
        }
        thead, tbody, tr, td, th {
            font-size: 1.3em;
            border: 2px solid #aaa;
        }
        thead tr{
            background-color: #ddeeff;
        }
        tbody tr{
            text-align:center;
            background-color: #ddffdd;
        }
    </style>
    <h1>Operador Logico AND - &&</h1>
    <table>
        <thead>
            <tr>
                <th>INPUT</th>
                <th>OUTPUT</th>
            <tr>
            <tr>
                <th>A <div class="linea">B</div></th>
                <th>A AND B</th>
            <tr>
        </thead>
        <tbody>
            <tr>
                <td>{$fn($A)} <div class="linea">{$fn($B)}</div></td>
                <td>{$fn($A && $B)}</td>
            <tr>
        </tbody>
    </table>
PlantillaOperadorAND;

    echo <<<PlantillaOperadorOR
        <h1>Operador Logico OR - ||</h1>
        <table>
        <thead>
            <tr>
                <th>INPUT</th>
                <th>OUTPUT</th>
            <tr>
            <tr>
                <th>A <div class="linea">B</div></th>
                <th>A OR B</th>
            <tr>
        </thead>
        <tbody>
            <tr>
                <td>{$fn($A)} <div class="linea">{$fn($A || $B)}</div></td>
                <td>{$fn($A || $B)}</td>
            <tr>
        </tbody>
    </table>
PlantillaOperadorOR;

    echo <<<PlantillaOperadorNOT
    <h1>Operador Logico NOT - !</h1>
    <table>
        <thead>
            <tr>
                <th>INPUT</th>
                <th>OUTPUT</th>
            <tr>
            <tr>
                <th>A</th>
                <th>NOT A</th>
            <tr>
        </thead>
        <tbody>
            <tr>
                <td>{$fn($A)}</td>
                <td>{$fn(!$A)}</td>
            <tr>
        </tbody>
    </table>
PlantillaOperadorNOT;


    // Operadores de comparacion
    echo '<hr><h1>Operadores de comparacion</h1>';
    $a = (int) 10;
    $b = (string) '10';

    // Mayor o igual que
    var_dump($a >= $b);
    echo '<br>';

    // Mayor que
    var_dump($a > $b);
    echo '<br>';
    
    // Menor o igual que
    var_dump($a <= strlen($b));
    echo '<br>';
    
    // Menor que
    var_dump($a < $b);
    echo '<br>';

    // No identico
    var_dump($a !== $b);
    echo '<br>';

    // Diferente
    var_dump($a != $b);
    echo '<br>';
    var_dump($a <> $b);
    echo '<br>';


    // Identico 
    var_dump($a === $b);
    echo '<br>'; 

    // Igual
    var_dump($a == $b);
    echo '<br>'; 
    
    

?>