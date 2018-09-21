<?php declare(strict_types = 1);

namespace PTCore\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}