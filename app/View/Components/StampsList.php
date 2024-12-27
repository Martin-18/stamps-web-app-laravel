<?php

namespace App\View\Components;

use Closure;
use App\Models\Stamp;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StampsList extends Component
{
    public $stamps;

    public function __construct()
    {
        $this->stamps = Stamp::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('components.stamps-list', ['stamps' => $this->stamps]);
    }
}
