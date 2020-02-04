<?php


class MyLogger
{
    public function log($message, $type) {
        switch ($type) {
            case 'INFO':
                $this->info($message);
                break;
            case 'ERROR':
                $this->error($message);
                break;
            case 'warning':
                $this->warning($message);
                break;
            case 'debug':
                $this->debug($message);
                break;
            default:
                print($type . $this->formatted_message($message));
        }
    }

    public function warning($message) {
        print("WARNING:" . $this->formatted_message($message));
    }

    public function error($message) {
        print('ERROR' . $this->formatted_message($message));
    }

    public function info($message) {
        print('INFO' . $this->formatted_message($message));
    }

    public function debug($message) {
        print('DEBUG' . $this->formatted_message($message));
    }

    private function formatted_message($message): string {
        return  ": "  . $message . "\n";
    }
}

$logger = new MyLogger();

$logger->log("Hello world!", "ERROR");

$logger->warning("Hello world!");
$logger->error("Hello world!");
$logger->info("Hello world!");
$logger->debug("Hello world!");