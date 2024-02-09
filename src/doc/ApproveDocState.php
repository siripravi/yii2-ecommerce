<?php
class ApproveDocState extends AbstractDocState
{
    /**
     * @return ConfirmdDocState
     */
    public function confirm()
    {
        return new ConfirmDocState;
    }
}