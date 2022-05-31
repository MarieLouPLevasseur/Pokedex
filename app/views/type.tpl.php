<section>
    <div class="content">
        <!-- une carte pokemon -->

        <?php foreach( $viewData['allPokemonByType'] as $pokemonObject ) : ?>
        <div class="image-card">

            <div class="image-item">
                <img src="<?= $transversalVars['baseURL']?>/img/<?=$pokemonObject->number?>.png" alt="Pokemon" class="img-fluid">
            </div>
            <div class="image-title"><a href="<?= $_SERVER['BASE_URI'] ?>/detail/<?= $pokemonObject->pokemon_id ?>"> #<?=$pokemonObject->number?> <?=$pokemonObject->getName()?> </a>
            </div>
        </div>
        <!-- fin de carte -->

        <?php endforeach; ?>

    </div>
</section>