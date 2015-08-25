<?php


class DailyTasks {

    public function __construct() {
        
    }

    public $days = [
        'Monday' => [],
        'Tuesday' => [],
        'Wednesday' => [],
        'Thursday' => [],
        'Friday' => [],
        'Saturday' => [],
        'Sunday' => []
        ];

    


    public function addTasks($day, $task) {
        $this->days[$day][] = $task;
    }

    public function getTasks($day) {
        return implode('<br>', $this->day);
    }
}

$tracker = new DailyTasks();

print_r($tracker);

$tracker->addTasks('Monday', 'Go to work');
$tracker->addTasks('Monday', 'Go to school');

print_r($tracker);