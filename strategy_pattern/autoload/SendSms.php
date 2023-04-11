<?php
class SendSms implements SendMessage{
    public function notification()
    {
        return 'send SMS';
    }
}