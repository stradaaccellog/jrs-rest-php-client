<?php

namespace Jaspersoft\Dto\Diagnostic;

use Jaspersoft\Dto\DTOObject;

class Collector extends DTOObject
{

    /* Read-only value */
    protected $id;
    public $name;
    public $verbosity;
    public $filterBy;

    const VERBOSITY_LOW = "LOW";
    const VERBOSITY_MEDIUM = "MEDIUM";
    const VERBOSITY_HIGH = "HIGH";
    const STATUS_RUNNING = "RUNNING";
    const STATUS_SHUTTING_DOWN = "SHUTTING_DOWN";
    const STATUS_STOPPED = "STOPPED";

    public function id()
    {
        return $this->id;
    }

    public static function createFromJSON($json_obj)
    {
        $result = new self();
        $result->id = $json_obj->id;
        $result->name = $json_obj->name;
        $result->verbosity = $json_obj->verbosity;
        $result->filterBy = DiagnosticFilter::createFromJSON($result->filterBy);
        return $result;
    }



}