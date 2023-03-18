<?php

abstract class ReportGenerator
{
    protected $data;

    public function generate()
    {
        $this->fetchData();
        $this->formatData();
        $this->presentData();
    }

    abstract protected function fetchData();
    abstract protected function formatData();
    abstract protected function presentData();
}