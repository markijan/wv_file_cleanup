<?php

return [
    // required import configurations of other extensions,
    // in case a module imports from another package
    'dependencies' => [
        'backend',
        'core',
    ],
    'tags' => [
        'backend.module',
    ],
    'imports' => [
        '@WebVision/WvFileCleanup/' => 'EXT:wv_file_cleanup/Resources/Public/JavaScript/',
    ]
];
