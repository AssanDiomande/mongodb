<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHG60ExN\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHG60ExN/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHG60ExN.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHG60ExN\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHG60ExN\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HG60ExN',
    'container.build_id' => 'd2d2ef40',
    'container.build_time' => 1572445409,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHG60ExN');