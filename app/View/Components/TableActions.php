<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableActions extends Component
{
    public $show;
    public $edit;
    public $delete;
    public $uid;
    public $extras;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($show, $edit, $delete, $extras = [])
    {
        $this->show = $show;
        $this->edit = $edit;
        $this->delete = $delete;
        $this->uid = uniqid();
        $this->extras = $extras;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table-actions');
    }
}
