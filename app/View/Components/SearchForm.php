<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchForm extends Component
{
    /**
     * Create a new component instance.
     */

    public string $action;
    public string $method;
    public function __construct(string $action, string $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    // public function test()
    // {
    //     return 'test';
    // }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search-form');
    }
}
