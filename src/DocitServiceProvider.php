<?php

namespace Naykel\Docit;

use Illuminate\Support\ServiceProvider;
use Naykel\Docit\Components\CodeBlock;
use Naykel\Docit\Components\Markdown;

class DocitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/markdown.php', 'markdown');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'docit');

        $this->loadViewComponentsAs('docit', [CodeBlock::class, Markdown::class]);
    }
}
