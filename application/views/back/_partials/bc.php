<section class="content-header">
    <h1>
        Page Data <?= $this->uri->segment(1); ?>
    </h1>
    <ol class="breadcrumb">
        <?php foreach ($bc as $index => $value) : ?>
            <?php if ($value != '') : ?>
                <li><a href="<?= site_url($value); ?>"><i class="fa fa-home"></i> <?= $value ?></a></li>
            <?php else : ?>
                <li class="active"><?= $index ?></li>
            <?php endif ?>
        <?php endforeach ?>
    </ol>
</section>