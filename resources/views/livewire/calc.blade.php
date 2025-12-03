<?php

use function Livewire\Volt\{state};

state(['number1', 'op', 'number2']);

?>

<div>
    <h1>計算結果</h1>

    @php
        $n1 = (int)$number1;
        $n2 = (int)$number2;

        $symbol = '?';
        $result = null;

        if ($op === 'addition') {
            $symbol = '+';
            $result = $n1 + $n2;
        } elseif ($op === 'subtraction') {
            $symbol = '-';
            $result = $n1 - $n2;
        } elseif ($op === 'multiplication') {
            $symbol = '*';
            $result = $n1 * $n2;
        } elseif ($op === 'division') {
            $symbol = '/';
            if ($n2 === 0) {
                $result = '0で割ることはできません';
            } else {
                $result = $n1 / $n2;
            }
        } else {
            $result = '無効な演算子です';
        }
    @endphp

    <p>{{ $n1 }} {{ $symbol }} {{ $n2 }} = {{ $result }}</p>
</div>


