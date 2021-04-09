<?php

namespace JeroenNoten\LaravelAdminLte\Components;

class Input extends InputGroupComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name, $label = null, $size = null, $labelClass = null,
        $topClass = null, $inputGroupClass = null, $disableFeedback = null
    ) {
        parent::__construct(
            $name, $label, $size, $labelClass, $topClass,
            $inputGroupClass, $disableFeedback
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminlte::components.input');
    }
}
