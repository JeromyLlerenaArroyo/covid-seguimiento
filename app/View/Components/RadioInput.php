<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CheckboxInput extends Component
{
    public $label;
    public $id;
    public $col;
    public $mode;
    public $val;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $id, $col, $mode, $val, $required = false)
    {
        $this->label = $label;
        $this->id = $id;
        $this->col = $col;
        $this->mode = $mode;
        $this->val = $val;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.radio-input');
    }
}
