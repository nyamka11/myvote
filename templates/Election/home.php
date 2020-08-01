<!-- Heading Row -->
<?= $this->element('map') ?>
<br/>
<h3>НАМ, ЭВСЭЛ (<?= count($pageData['partyList']) ?>)</h3>
<?php
$col1='';
$col2='';
foreach ($pageData['partyList'] as $ind => $item) {
    $path = $this->Url->build("/election/$activeElection[tag]/party/$item[short_name]", ['fullBase' => true]);
    if ($ind%2 == 0) {
        $col1 .= '<a href="'.$path .'" class="list-group-item list-group-item-action">'.$item['political_name'].'</a>';
    } else {
        $col2 .= '<a href="'.$path .'" class="list-group-item list-group-item-action">'.$item['political_name'].'</a>';
    }
}
?>
<div class="row">
    <div class="col">
        <div class="list-group">
        <?= $col1 ?>
        </div>
    </div>
    <div class="col">
        <div class="list-group">
        <?= $col2 ?>
        </div>
    </div>
</div>
<br/>