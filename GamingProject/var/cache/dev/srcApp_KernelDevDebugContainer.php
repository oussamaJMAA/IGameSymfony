<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL94m4ph\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL94m4ph/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerL94m4ph.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerL94m4ph\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerL94m4ph\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'L94m4ph',
    'container.build_id' => '5d897faa',
    'container.build_time' => 1650772782,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL94m4ph');
