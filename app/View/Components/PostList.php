<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostList extends Component
{
    public $posts;

    /**
     * Crea una nueva instancia del componente.
     *
     * @param \Illuminate\Database\Eloquent\Collection $posts
     */
    public function __construct($posts)
    {
        $this->posts = $posts;
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.post-list');
    }
}
