[{$smarty.block.parent}]
[{assign var="oConfig" value=$oViewConf->getConfig()}]
[{foreach from=$oConfig->getConfigParam('fcsrcinject_body') item=row}]
    [{$row}]<br>
[{/foreach}]