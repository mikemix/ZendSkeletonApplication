<?php
namespace Application;

return array(
    'driver' => array(
        __NAMESPACE__ . '_driver' => array(
            'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
            'cache' => 'array',
            'paths' => array(
                __DIR__ . '/../src/' . __NAMESPACE__ . '/Entity',
                __DIR__ . '/../src/' . __NAMESPACE__ . '/Repository',
            )
        ),
        'orm_default' => array(
            'drivers' => array(
                __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
            )
        )
    )
);
