<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Headline extends Component
{
    public $text;
    public $subtext;
    /**
     * Create a new component instance.
     */
    public function __construct( $text, $subtext = null)
    {
        $this->text = $text;
        $this->subtext = $subtext;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.headline');
    }
}
