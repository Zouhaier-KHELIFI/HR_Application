<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.util.token_generator' shared service.

include_once $this->targetDirs[3].'\\src\\UserBundle\\Util\\TokenGeneratorInterface.php';
include_once $this->targetDirs[3].'\\src\\UserBundle\\Util\\TokenGenerator.php';

return $this->services['fos_user.util.token_generator'] = new \UserBundle\Util\TokenGenerator();
