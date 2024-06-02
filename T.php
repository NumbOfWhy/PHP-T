<?php

namespace Bob;

include("err.php");

class T
{
    public string $content;

    public function __construct()
    {

    }

    public function __destruct()
    {

    }

    public function start()
    {
        ob_start();
    }

    public function put($code, $variable)
    {
        $file = new \SplFileObject($code, "r");
        $content = $file->fread($file->getSize());
        echo str_replace('new class()', '$this->' . $variable . '=new class()', $content);
    }

    public function flush()
    {
        $this->content = ob_get_flush();
        eval($this->content);
    }

    public function finish()
    {
        ob_end_clean();
    }
}