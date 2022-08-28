<?php

// move to init.php

\Bitrix\Main\Loader::includeModule('iblock');
AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', 'changeHasPhoto');

function changeHasPhoto (&$arFields){
    $IBLOCK_ID = 41;
   
    if ($arFields['IBLOCK_ID'] == $IBLOCK_ID){

        $db_enum_list = CIBlockProperty::GetPropertyEnum("HAS_PHOTO", Array(), Array("IBLOCK_ID"=>$IBLOCK_ID));
        $prop_has_photo = [];
        while ($prop_fields = $db_enum_list->GetNext())
        {
            $prop_has_photo[$prop_fields["VALUE"]] = $prop_fields["ID"];
        }

        $prop_more_photo_id = '';
        $properties = CIBlockProperty::GetList(Array(), Array("IBLOCK_ID"=>$IBLOCK_ID, "CODE"=>'MORE_PHOTO'));
        while ($prop_fields = $properties->GetNext())
        {
            $prop_more_photo_id = $prop_fields["ID"];
        }

        if(count($arFields["PROPERTY_VALUES"][$prop_more_photo_id]) > 0  || $arFields['PREVIEW_PICTURE'] || $arFields['DETAIL_PICTURE']){
            $arFields["PROPERTY_VALUES"]['HAS_PHOTO']['VALUE'] = $prop_has_photo['Y'];
        } else{
            $arFields["PROPERTY_VALUES"]['HAS_PHOTO']['VALUE'] = $prop_has_photo['N'];
        }
    }

}