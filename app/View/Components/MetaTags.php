<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetaTags extends Component
{
    public $description;
    public $ogUrl;
    public $ogTitle;
    public $ogDescription;
    public $ogImage;
    public $twitterDomain;
    public $twitterUrl;
    public $twitterTitle;
    public $twitterDescription;
    public $twitterImage;

    public function __construct(
        $description = null,
        $ogUrl = null,
        $ogTitle = null,
        $ogDescription = null,
        $ogImage = null,
        $twitterDomain = null,
        $twitterUrl = null,
        $twitterTitle = null,
        $twitterDescription = null,
        $twitterImage = null
    ) {
        $this->description = $description;
        $this->ogUrl = $ogUrl;
        $this->ogTitle = $ogTitle;
        $this->ogDescription = $ogDescription;
        $this->ogImage = $ogImage;
        $this->twitterDomain = $twitterDomain;
        $this->twitterUrl = $twitterUrl;
        $this->twitterTitle = $twitterTitle;
        $this->twitterDescription = $twitterDescription;
        $this->twitterImage = $twitterImage;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.meta-tags');
    }
}
