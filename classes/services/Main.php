<?php

spl_autoload_register(function ($class) {
    require_once "$class.php";
});

class Main
{
    public static function main(): void
    {
//        $emailService = new EmailService();
//        $notificationService = new NotificationService($emailService);

        $smsService = new SMSService();
        $notificationService = new NotificationService($smsService);

        $notificationService->send("Hello Users! This is our first notification!");
    }
}

Main::main();