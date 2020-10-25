<?php

$modversion['name'] = _MI_OURAUCTIONS_NAME;
$modversion['version'] = .02;
$modversion['description'] = _MI_OURAUCTIONS_DESC;
$modversion['credits'] = '';
$modversion['author'] = 'Archangel Artifacts, Inc.';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 'no';
$modversion['image'] = 'images/ebaylogoadmin.jpg';
$modversion['dirname'] = 'ourauctions';
// Blocks
$modversion['blocks'][1]['file'] = 'ourauctions.php';
$modversion['blocks'][1]['name'] = _MI_OURAUCTIONS_BNAME1;
$modversion['blocks'][1]['description'] = 'Block to show Ebay Auctions';
$modversion['blocks'][1]['show_func'] = 'b_ourauctions_show';
// Menu
$modversion['hasMain'] = 1;
