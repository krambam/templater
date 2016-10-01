<nav><?= $navigation ?></nav>
<section class="title-section">
    <h1><?= $mainTitleTop ?></h1>
</section>
<section class="main-text-section">
    <p><?= $mainText ?></p>
    <br>
    <h3>Check out these cool content blocks below</h3>
    <ul>
        <?php foreach ($someExampleBlocks as $block): ?>
            <li>
                <span class="some-example-span">
                    <?php if ($block['href']): ?>
                        <a href="<?= $block['href'] ?>">
                            <?= $block['text'] ?>
                        </a>
                    <?php else: ?>
                        <?= $block['text'] ?>
                    <?php endif ?>
                </span>
            </li>
        <?php endforeach ?>
    </ul>
</section>