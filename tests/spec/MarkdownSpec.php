<?php

namespace spec\app;

use app\Markdown;
use PhpSpec\ObjectBehavior;

class MarkdownSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Markdown::class);
    }

    function it_converts_plain_text_to_html_paragraph()
    {
        $this->html('Hello')->shouldReturn('<p>Hello</p>');
    }
}
