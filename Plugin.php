<?php

namespace Kanboard\Plugin\AutomaticAction;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\AutomaticAction\Action\SetDueDateWhenMovedToColumn;

class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new SetDueDateWhenMovedToColumn($this->container));
    }
}
