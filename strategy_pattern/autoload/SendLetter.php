<?php
class SendLetter implements SendMessage{
    public function notification()
    {
        return 'send Letter';
    }
}