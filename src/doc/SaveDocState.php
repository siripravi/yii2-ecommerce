<?php
class SavedDocState extends AbstractDocState
{
    /**
     * @return ApproveDoorState
     */
    public function approve()
    {
        return new ApproveDocState;
    }
}