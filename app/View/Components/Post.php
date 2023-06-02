<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public $post;
    public $comments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $comments)
    {
        $this->post = $post;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'





blade;
    }
}
