<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StampsList extends Component
{
    public $stamps;

    /**
     * Create a new component instance.
     *
     * @param  array|null  $stamps
     */
    public function __construct($stamps = [])
    {
        $this->stamps = $stamps;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('components.stamps-list', ['stamps' => $this->stamps]);
    }
}
