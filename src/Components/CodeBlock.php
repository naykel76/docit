<?php

namespace Naykel\Docit\Components;

use Illuminate\View\Component;
use Naykel\Docit\CodeRenderingTrait;

class CodeBlock extends Component
{
    use CodeRenderingTrait;

    public function __construct(
        public string $language = 'blade',
        public bool $preview = false,
        public string $class = '',
    ) {
    }

    public function render()
    {

        return view('docit::components.code-block');
    }
}
