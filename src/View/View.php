<?php

namespace View;

class View
{
    private $templatesPath;

    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }

    public function renderHtml(string $templateName, array $vars = [])
    {
        extract($vars); //Функция extract извлекает массив в переменные. То есть она делает следующее: в неё передаётся массив [‘key1’ => 1, ‘key2’ => 2], а после её вызова у нас имеются переменные $key1 = 1 и $key2 = 2

        include $this->templatesPath . '/' . $templateName;
    }
}


?>
