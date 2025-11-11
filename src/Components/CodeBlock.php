<?php

namespace Naykel\Docit\Components;

use Illuminate\View\Component;
use Naykel\Docit\CodeRenderingTrait;

class CodeBlock extends Component
{
    use CodeRenderingTrait;

    public function __construct(
        public string $language = 'blade',
    ) {}

    public function render()
    {
        return view('docit::components.code-block');
    }
}
