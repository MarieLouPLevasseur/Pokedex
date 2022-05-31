<section class="Solo-card">

    <h1 classe="title"><?= $viewData['currentPokemon']->getName() ?></h1>

    <div class="container">
        <div class="image-current">
            <h1 classe="title"> </h1>
            <img src="<?= $transversalVars['baseURL'] ?>/img/<?= $viewData['currentPokemon']->getNumber() ?>.png" alt="">
        </div>

        <div class="card-container">
            <h3># <?= $viewData['currentPokemon']->getNumber() ?> <?= $viewData['currentPokemon']->getName() ?></h2>
                <!-- TYPES -->
<?php foreach ($viewData['allTypesCurrentPokemon'] as $currentType):?>
    <p class="type-item" style="background-color:#<?=$currentType->getColor()?>"><?=$currentType->getName()?></p>


            <?php endforeach?>

                <!-- ------- -->

                <h4>Statistiques</h4>
                <div class="stats-container">

                    <div class="stat-line">
                        <p class="stat-name">PV</p>
                        <p class="stat-value"> <?= $viewData['currentPokemon']->getHp() ?></p>
                        <div class="lifebar">
                            <div class="progress" style=width:<?= (($viewData['currentPokemon']->getHp())/255) * 100 ?>%></div>
                            <div class="total" style="width:<?= (((255-$viewData['currentPokemon']->getHp())/ 255) * 100) ?>%"></div>
                        </div>
                    </div>

                    <div class="stat-line">
                        <p class="stat-name">Attaque</p>
                        <p class="stat-value"><?= $viewData['currentPokemon']->getAttack() ?></p>
                        <div class="lifebar">
                            <div class="progress" style=width:<?= (($viewData['currentPokemon']->getAttack())/255) * 100 ?>%></div>
                            <div class="total" style="width:<?= (((255-$viewData['currentPokemon']->getAttack())/ 255) * 100) ?>%"></div>
                        </div>
                    </div>
                    <div class="stat-line">
                        <p class="stat-name">Défense</p>
                        <p class="stat-value"><?= $viewData['currentPokemon']->getDefense() ?></p>
                        <div class="lifebar">
                            <div class="progress" style=width:<?= (($viewData['currentPokemon']->getDefense())/255) * 100 ?>%></div>
                            <div class="total" style="width:<?= (((255-$viewData['currentPokemon']->getDefense())/ 255) * 100) ?>%"></div>
                        </div>
                    </div>
                    <div class="stat-line">
                        <p class="stat-name">Attaque spé.</p>
                        <p class="stat-value"><?= $viewData['currentPokemon']->getSpe_attack() ?></p>
                        <div class="lifebar">
                            <div class="progress" style=width:<?= (($viewData['currentPokemon']->getSpe_attack())/255) * 100 ?>%></div>
                            <div class="total" style="width:<?= (((255-$viewData['currentPokemon']->getSpe_attack())/ 255) * 100) ?>%"></div>
                        </div>
                    </div>

                    <div class="stat-line">
                        <p class="stat-name">Défense spé.</p>
                        <p class="stat-value"><?= $viewData['currentPokemon']->getSpe_defense() ?></p>
                        <div class="lifebar">
                            <div class="progress" style=width:<?= (($viewData['currentPokemon']->getSpe_defense())/255) * 100 ?>%></div>
                            <div class="total" style="width:<?= (((255-$viewData['currentPokemon']->getSpe_defense())/ 255) * 100) ?>%"></div>
                        </div>
                    </div>
                    <div class="stat-line">
                        <p class="stat-name">Vitesse</p>
                        <p class="stat-value"><?= $viewData['currentPokemon']->getSpeed() ?></p>
                        <div class="lifebar">
                            <div class="progress" style=width:<?= (($viewData['currentPokemon']->getSpeed())/255) * 100 ?>%></div>
                            <div class="total" style="width:<?= (((255-$viewData['currentPokemon']->getSpeed())/ 255) * 100) ?>%"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <p class="return"><a href="<?=$viewData['router']->generate('main-home')?>"> Revenir à la liste</a></p>

</section>