<?php


class Note
{
    /* Node data */
    public $data;
    /* Link to next node */
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    function readNote()
    {
        return $this->data;
    }
}