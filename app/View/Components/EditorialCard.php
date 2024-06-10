<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditorialCard extends Component
{
    public $title;
    public $author;
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $author, $image)
    {
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.editorial-card');
    }
}
