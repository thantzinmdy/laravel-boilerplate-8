<?php

namespace Zawmyolatt\Modules\Process;

use Zawmyolatt\Modules\Contracts\RunableInterface;
use Zawmyolatt\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \Zawmyolatt\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \Zawmyolatt\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
