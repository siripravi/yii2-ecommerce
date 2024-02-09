<?php
class SendDocState extends AbstractDocState
{
    /**
     * @return WaitDocState
     */
    public function wait()
    {
        return new WaitDocState;
    }
}