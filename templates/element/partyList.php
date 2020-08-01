<div class="list-group">
<?php foreach ($pageData['partyList'] as $item): ?>
    <?php
        $path = $this->Url->build("/election/$activeElection[tag]/party/$item[short_name]", ['fullBase' => true])
    ?>
    <a href="<?= $path ?>" class="list-group-item"><?= $item['political_name'] ?></a>
<?php endforeach; ?>
</div>
