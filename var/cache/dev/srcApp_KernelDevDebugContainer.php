<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4wnl2mx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4wnl2mx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4wnl2mx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4wnl2mx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container4wnl2mx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '4wnl2mx',
    'container.build_id' => 'b9edc810',
    'container.build_time' => 1581729007,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4wnl2mx');
