<div class="card img-fluid no-border">
    <?php
        $path = $this->Url->build("/election/$activeElection[tag]/candidate/$candidate[id]", ['fullBase' => true])
    ?>
    <a href="<?= $path ?>">
        <img class="card-img-top" src="<?= $this->Url->build("/img/img_avatar.png", ['fullBase' => true]) ?>" alt="Card image" >
        <div class="card-img-overlay align-text-bottom">
            <h5 class="card-title align-text-bottom"><?= $candidate['fullname'] ?></h5>
        </div>
    </a>
</div>