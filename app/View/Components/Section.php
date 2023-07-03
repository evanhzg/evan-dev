<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Section extends Component
{
    public $title;
    public $content;
    public $showButton;
    public $lightContent;

    public $coverUrl;
    public $buttonTitle;

    public function __construct($title, $content, $coverUrl = '', $showButton = false, $lightContent = false, $buttonTitle = '')
    {
        $this->title = $title;
        $this->content = $content;
        $this->showButton = $showButton;
        $this->lightContent = $lightContent;
        $this->buttonTitle = $buttonTitle;
        $this->coverUrl = $coverUrl;
    }

    public function render()
    {
        return view('components.section');
    }
}
