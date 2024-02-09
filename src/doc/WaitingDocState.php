<?php
class WaitingDocState extends AbstractDocState
{
    /**
     * @return ClosedDocState
     */
    public function approve()
    {
        return new ApproveDocState;
    }
}