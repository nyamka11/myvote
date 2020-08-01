<?php foreach ($pageData['candidatesList'] as $district): ?>
<div class="card">
    <h5 class="card-header"><?= $district['district_area_name'].' | '. $district['district_name'].' | '.$district['district_mandate'].' мандат'  ?> </h5>
    <div class="card-body">
        <!-- Content Row -->
        <div class="row">
        <?php foreach ($district['election_candidates'] as $candidate): ?>
            <div class="col-md-3 mb-4">
                <?= $this->element('candidate', json_decode(json_encode($candidate), true)) ?>
            </div>
        <?php endforeach; ?>
        </div>
        <!-- /.row -->
    </div>
</div>
<br>
<?php endforeach; ?>