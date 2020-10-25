<?php

function b_ourauctions_show()
{
    global $xoopsConfig, $xoopsTheme;

    $block = [];

    $block['title'] = _MB_OURAUCTIONS_TITLE1;

    $block['content'] = "<div align='center'>

<table width='100%' cellpadding='2' cellspacing='2' border='2' align='center'>
<tr>
<td align='center'>
<center><b>Archangel Auctions</b>
</tr>
</td>
<tr>
<td align='center' bgcolor='ffffff'>
<a href='http://cgi6.ebay.com/ws/eBayISAPI.dll?ViewSellersOtherItems&include=0&userid=ArchangelArtifacts&sort=3&rows=25&since=-1&rd=1' target='_blank' onfocus='this.blur()'><img src='/modules/ourauctions/images/ebaylogo1.jpg' border='0'></a><br>
</tr>
</td>
<tr>
<td align='center' bgcolor='ffffff'>
<a href='http://members.ebay.com/aboutme/archangelartifacts' target='_blank' onfocus='this.blur()'><img src='/modules/ourauctions/images/ebaylogome1.jpg' border='0'></a></center>
</tr>
</td>
</table>
</div>
";

    return $block;
}
