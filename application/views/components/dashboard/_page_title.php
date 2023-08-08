<section>
    <?php foreach ($breadcrumb as $key => $value) : ?>
        <?php if ($value == 'Current') : ?>
            <h1><?= $key ?></h1>
        <?php endif ?>
    <?php endforeach ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php foreach ($breadcrumb as $key => $value) : ?>
                <?php if ($value == 'Current') : ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= $key ?></li>
                <?php else : ?>
                    <li class="breadcrumb-item"><a href="<?= base_url($value) ?>"><?= $key ?></a></li>
                <?php endif ?>
            <?php endforeach ?>
        </ol>
    </nav>
</section>