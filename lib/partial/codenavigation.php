<?php
namespace demo\partial;

class CodeNavigation extends \lean\Partial {
    public function init() {
        $this->data->elements = array(
            'start' => 'Starting the engine',
            'control' => 'Controlling the power',
            'dump' => 'Dumping data',
            //'form' => 'netforming'
        );
    }
}