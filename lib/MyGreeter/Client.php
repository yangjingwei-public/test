<?php

namespace MyGreeter;

class Client {
    // 根据当前时间输出适当的问候语
    public function getGreeting() {
        $now = (int)date("H");
        if ($now >= 6 && $now < 12) {
            $msg = "Good morning";
        } elseif ($now >= 12 && $now < 18) {
            $msg = "Good afternoon";
        } else {
            $msg = "Good evening";
        }
        return $msg;
    }

}