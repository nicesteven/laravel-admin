<?php

namespace Encore\Admin\Table\Selectable;

use Encore\Admin\Table\Displayers\AbstractDisplayer;

class Radio extends AbstractDisplayer
{
    public function display($key = '')
    {
        $value = $this->getAttribute($key);

        $id = uniqid();

        return admin_theme(<<<HTML
<span class="icheck-%s">
    <input id="selectable-{$id}" type="radio" name="item" class="select" value="{$value}"/>
    <label for="selectable-{$id}"></label>
</span>
HTML);
    }
}
