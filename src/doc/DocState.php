<?php
interface DocState
{
    public function draft();
    public function save();
    public function approve();
    public function send();
    public function confirm();
    public function wait();
    public function close();
}
