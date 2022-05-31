<section class="types">
<p>Cliquez sur un type pour voir tous les Pokémons de ce type</p>

<div class="types-container">
<?php foreach ($viewData["allTypes"] as $currentType):?>

    <div class="typeItem" style="background-color:#<?=$currentType->getColor()?>"><p><a href="<?=$viewData['router']->generate( "main-type", [ "type_id" => $currentType->getId() ])?>"><?=$currentType->getName()?></a></p></div>
<?php endforeach;?>

</div>
</section>