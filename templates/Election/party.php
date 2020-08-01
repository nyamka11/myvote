<br/>
<div class="row">
    <div class="col-lg-3">
        <h3 style="margin: 5px 0px 24px 0px">НАМ, ЭВСЭЛ</h3>
        <div class="list-group">
        <?php foreach ($pageData['partyList'] as $item): ?>
            <?php
                $path = $this->Url->build("/election/$activeElection[tag]/party/$item[short_name]", ['fullBase' => true])
            ?>
            <a href="<?= $path ?>" class="list-group-item"><?= $item['political_name'] ?></a>
        <?php endforeach; ?>
        </div>
    </div>
    <div class="col-lg-9">
        <?= $this->element('electionDistrictInfo') ?>
    </div>
</div>
