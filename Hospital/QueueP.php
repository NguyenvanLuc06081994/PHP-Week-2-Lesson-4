<?php

include_once("Patient.php");

class QueueP
{

    protected $limit;
    protected $queue;

    public function __construct($limit)
    {
        $this->queue = [];
        $this->limit = $limit;

    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function enqueue($patient)
    {
        if (count($this->queue) > $this->limit) {
            echo "full";
        } else {
            array_push($this->queue, $patient);
            usort($this->queue, function ($a, $b) {
                if ($a->code == $b->code) {
                    return 1;
                }
                return ($a->code > $b->code) ? -1 : 1;
            });

        }
    }

    public function dequeue()
    {
        $arrNew = array();
        if ($this->isEmpty()) {
            die("empty array");
        } else {
            $result = array_shift($this->queue);
        }
        array_push($arrNew, $result);
        return $arrNew;

    }


    public function getQueue()
    {
        return $this->queue;
    }

}

$patient = new Patient("tung", 23);
$patient1 = new Patient("duong", 10);
$patient2 = new Patient("duong2", 25);
$patient3 = new Patient("duong2", 45);
$patient4 = new Patient("duong2", 10);
$patient5 = new Patient("duong3", 100);
$list = new QueueP(10);

$list->enqueue($patient);
$list->enqueue($patient1);
$list->enqueue($patient2);
$list->enqueue($patient3);
$list->enqueue($patient4);
$list->enqueue($patient5);
print_r($list->dequeue());

echo "<pre>";
print_r($list->getQueue());






