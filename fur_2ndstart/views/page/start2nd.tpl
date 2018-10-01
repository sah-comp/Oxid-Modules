[{capture append="oxidBlock_content"}]
    [{assign var="oConfig" value=$oViewConf->getConfig()}]
    [{assign var='rsslinks' value=$oView->getRssLinks()}]

    [{assign var="oCat" value=$oxcmp_categories->getCatById($smarty.const.CHICMIC_GIFT_ROOT)}]
    [{assign var="oCats" value=$oCat->getSubCats()}]
    <ul class="chicmic-cats giftfinder clearfix">
    [{foreach from=$oCats item="ocat"}]
    [{if $ocat->getIsVisible()}]
        <li>
            <a href="[{$ocat->getLink()}]" class="cat-link" style="background-image: url([{$ocat->getPromotionIconUrl()}]);">
                [{$ocat->oxcategories__oxtitle->value}]<br />
                <span>[{oxmultilang ident="CHIC_CAT_SHOP_HERE"}]</span>
            </a>
        </li>
    [{/if}]
    [{/foreach}]
    </ul>

[{insert name="oxid_tracker"}]
[{/capture}]
[{include file="layout/page.tpl"}]
