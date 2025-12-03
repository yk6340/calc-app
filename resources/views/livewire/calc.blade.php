<?php

use function Livewire\Volt\{state};

state(['number1', 'op', 'number2']);

?>

<div>
    <h1>テスト表示</h1>

    @php
        $symbol = '?';

        if ($op === 'addition') {
            $symbol = '+';
        } elseif ($op === 'subtraction') {
            $symbol = '-';
        } elseif ($op === 'multiplication') {
            $symbol = '*';
        } elseif ($op === 'division') {
            $symbol = '/';
        } else {
            $symbol = '?';
        }
    @endphp

    <p>{{ $number1 }} {{ $symbol }} {{ $number2 }}</p>
</div>


