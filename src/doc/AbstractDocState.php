<?php
abstract class AbstractDocState implements DocState
{
    public function draft()
    {
        throw new IllegalStateTransitionException;
    }

    public function save()
    {
        throw new IllegalStateTransitionException;
    }

    public function approve()
    {
        throw new IllegalStateTransitionException;
    }

    public function send()
    {
        throw new IllegalStateTransitionException;
    }
    
    public function confirm()
    {
        throw new IllegalStateTransitionException;
    }
}