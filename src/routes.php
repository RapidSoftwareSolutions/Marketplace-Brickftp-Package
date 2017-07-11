<?php
$routes = [
    'getAllUsers',
    'getSingleUser',
    'createUser',
    'updateUser',
    'deleteUser',
    'unlockUser',
    'getAllGroups',
    'getSingleGroup',
    'createGroup',
    'updateGroup',
    'deleteGroup',
    'getAllPermissions',
    'createPermission',
    'deletePermission',
    'getAllNotifications',
    'createNotification',
    'deleteNotification',
    'getAllHistory',
    'getLoginHistory',
    'getUserHistory',
    'getFolderHistory',
    'getFileHistory',
    'getAllBundles',
    'getSingleBundle',
    'createBundle',
    'deleteBundle',
    'listsBundleContent',
    'downloadBundleContent',
    'getAllBehaviors',
    'getFolderBehavior',
    'getSingleBehavior',
    'createBehavior',
    'updateBehavior',
    'deleteBehavior',
    'listsFolderContent',
    'createFolder',
    'downloadFile',
    'moveFile',
    'renameFile',
    'copyFile',
    'deleteFile',
    'startFileUpload',
    'uploadFilePart',
    'additionalUpload',
    'completeUpload',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}
