<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZEvXqct\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZEvXqct/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZEvXqct.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZEvXqct\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZEvXqct\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZEvXqct',
    'container.build_id' => '46fb96e6',
    'container.build_time' => 1681220732,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZEvXqct');
