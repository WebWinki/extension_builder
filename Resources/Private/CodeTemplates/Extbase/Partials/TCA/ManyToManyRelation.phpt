[
    'type' => 'select',
    'renderType' => 'selectMultipleSideBySide',
    'foreign_table' => '{property.foreignDatabaseTableName}',
    'MM' => '{property.relationTableName}',
    'size' => 10,
    'autoSizeMax' => 30,
    'maxitems' => 9999,
    'multiple' => 0,
    'wizards' => [
        '_PADDING' => 1,
        '_VERTICAL' => 1,
        'edit' => [
            'module' => [
                'name' => 'wizard_edit',
            ],
            'type' => 'popup',
            'title' => 'Edit',
            'icon' => 'edit2.gif',
            'popup_onlyOpenIfSelected' => 1,
            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
        ],
        'add' => [
            'module' => [
                'name' => 'wizard_add',
            ],
            'type' => 'script',
            'title' => 'Create new',
            'icon' => 'add.gif',
            'params' => [
                'table' => '{property.foreignDatabaseTableName}',
                'pid' => '###CURRENT_PID###',
                'setValue' => 'prepend'
            ],
        ],
    ],
],