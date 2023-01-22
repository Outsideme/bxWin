<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html lang="ru">
<head>
    <?

    use Bitrix\Main\Page\Asset;

    // Пример подключения JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/app.js');
    // Пример подключения CSS
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/vars.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-grid.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/style.css');

    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<?
$APPLICATION->showPanel();
?>