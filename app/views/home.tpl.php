<section>
    <div class="content">
        <!-- une carte pokemon -->

        <?php foreach( $viewData['allPokemons'] as $key => $pokemonObject ) : ?>
        <div class="image-card">

            <div class="image-item">
                <img src="<?= $transversalVars['baseURL']?>/img/<?=$pokemonObject->getNumber()?>.png" alt="Pokemon" class="img-fluid">
            </div>
            <div class="image-title"><a href="<?= $_SERVER['BASE_URI'] ?>/detail/<?= $pokemonObject->getId(); ?>"> #<?=$pokemonObject->getNumber()?> <?=$pokemonObject->getName()?> </a>
            </div>
        </div>
        <!-- fin de carte -->

        <?php endforeach; ?>

    </div>
</section>