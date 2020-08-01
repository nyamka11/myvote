<br/>
<div class="row">
    <div class="col-lg-3">
        <h3 style="margin: 5px 0px 24px 0px">ТОЙРОГ(<?= count($pageData['electionDistrict'])?>)</h3>
        <div class="list-group">
        <?php foreach ($pageData['electionDistrict'] as $item): ?>
            <?php
                $path = $this->Url->build("/election/$activeElection[tag]/district/$item[id]", ['fullBase' => true])
            ?>
            <a href="<?= $path ?>" class="list-group-item"><?= $item['district_name'].' | '.$item['district_mandate'] ?></a>
        <?php endforeach; ?>
        </div>
    </div>
    <div class="col-lg-9">
        <?= $this->element('electionDistrictInfo') ?>
    </div>
</div>
