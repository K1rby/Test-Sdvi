<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerStxtrq8\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerStxtrq8/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerStxtrq8.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerStxtrq8\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerStxtrq8\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Stxtrq8',
    'container.build_id' => '362f996f',
    'container.build_time' => 1561650413,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerStxtrq8');
