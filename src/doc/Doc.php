<?php
class Doc
{
    private $state;

    public function __construct(DocState $state)
    {
        $this->setState($state);
    }

    public function draft()
    {
        $this->setState($this->state->draft());
    }

    public function save()
    {
        $this->setState($this->state->save());
    }

    public function approve()
    {
        $this->setState($this->state->approve());
    }

    public function send()
    {
        $this->setState($this->state->send());
    }

    public function wait()
    {
        $this->setState($this->state->wait());
    }
  
    public function confirm()
    {
        $this->setState($this->state->confirm());
    }

     public function close()
    {
        $this->setState($this->state->close());
    }

    private function setState(DocState $state)
    {
        $this->state = $state;
    }
}