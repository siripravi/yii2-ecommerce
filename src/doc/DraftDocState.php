<?php
class DraftDocState extends AbstractDocState
{
    /**
     * @return OpenDocState
     */
    public function save()
    {
        return new SaveDocState;
    }    
}