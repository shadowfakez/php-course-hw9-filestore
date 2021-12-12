<?php

namespace iterator;

class FileStore implements \Iterator
{

    protected $position;

    protected $file;

    protected $current;


    public function __construct($file)
    {
        $this->file = fopen($file, 'r');
    }

    public function current()
    {
        $this->current = fgetcsv($this->file);
        return $this->current;
    }

    public function next()
    {
        if (!feof($this->file)) {
            ++$this->position;
            return true;
        }
        return false;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        if (!$this->next()) {
            fclose($this->file);
            return false;
        }
        return true;
    }

    public function rewind()
    {
        $this->position = 0;
    }
}

