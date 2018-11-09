<?php
namespace Wpollen\Foundation;


class Application
{
    protected $basePath;

    public function __construct($basePath = null)
    {
        if ($basePath) {
            $this->setBasePath($basePath);
        }
    }

    public function setBasePath($basePath)
    {
        $this->basePath = rtrim($basePath, '\/');
    }

    public function getConfigPath()
    {
        return $this->basePath . '/config';
    }
}