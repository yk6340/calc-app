<?php

use function Livewire\Volt\{state};

state(['number1', 'op', 'number2']);

?>

<div>
    <h1>テスト表示</h1>
    <p>{{ $number1 }} {{ $op }} {{ $number2 }}</p>
</div>
