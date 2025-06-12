<?php

namespace App\Livewire;

use Livewire\Component;

class MyComponent extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <h1>Hello World!</h1>
        </div>
        HTML;
    }
}
