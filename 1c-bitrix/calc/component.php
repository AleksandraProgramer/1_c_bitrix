<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/*
	Инициализация компоннта
	и его логика
*/

// способ доставки
$arResult['dostavka'] = array("почтой", "курьером", "самовывоз");

// стоимость доставки
$arResult['price'] = array($arParams['DOSTAVKA'], $arParams['DOSTAVKA1'], $arParams['DOSTAVKA2'], $arParams['DOSTAVKA3']);

// география доставки
$arResult['geo'] = array(
	$arResult['price'][0].':Минск', 
	$arResult['price'][1].':Минский район',
	$arResult['price'][2].':Минская область',
	$arResult['price'][3].':Вся Беларусь');

// весовые пороги товара
$arResult['ves'] = array("5", "10", "15", "20");

// подключаем компонент к шаблону
$this->IncludeComponentTemplate();
?>