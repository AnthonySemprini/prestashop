<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSdPUO5N\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSdPUO5N/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerSdPUO5N.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerSdPUO5N\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerSdPUO5N\appAppKernelProdContainer([
    'container.build_hash' => 'SdPUO5N',
    'container.build_id' => '78006ab7',
    'container.build_time' => 1710440890,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSdPUO5N');
