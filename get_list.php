<?php
\Bitrix\Main\Loader::includeModule('iblock');
$elements = \Bitrix\Iblock\Elements\ElementBlogNewsTable::getList([
    'select' => ['ID', 'NAME', 'CODE', 'XML_ID', 'PREVIEW_PICTURE', 'PREVIEW_TEXT' ,'SIZE_' => 'SIZE', 'BRAND_' => 'BRAND', 'CATEGORY_'=>'CATEGORY' ],
    
])->fetchAll();
echo '<pre>';
foreach ($elements as $element) {
    print_r($element);
}
echo '</pre>';