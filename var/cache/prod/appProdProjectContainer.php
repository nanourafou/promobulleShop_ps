<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAruzb4s\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAruzb4s/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerAruzb4s.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerAruzb4s\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerAruzb4s\appProdProjectContainer(array(
    'container.build_hash' => 'Aruzb4s',
    'container.build_id' => 'bd3074a4',
    'container.build_time' => 1532031882,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerAruzb4s');