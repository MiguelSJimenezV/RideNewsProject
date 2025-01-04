<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $image;
    public $title;
    public $description;
    public $link;
    public $linkText;
    public $posted;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $title, $description, $link, $linkText, $posted)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->linkText = $linkText;
        $this->posted = $posted;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
