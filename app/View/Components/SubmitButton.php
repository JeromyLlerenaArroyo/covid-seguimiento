<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubmitButton extends Component
{
    public $col;
    public $mode;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($col, $mode)
    {
        $this->col = $col;
        $this->mode = $mode;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.submit-button');
    }
}
