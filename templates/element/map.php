<br/>
<h3>НЭР ДЭВШИГЧИД (606)</h3>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="mn-tab" data-toggle="tab" href="#mn" role="tab" aria-controls="mn" aria-selected="true">Орон нутаг</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="ub-tab" data-toggle="tab" href="#ub" role="tab" aria-controls="ub" aria-selected="false">Нийслэл</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="mn" role="tabpanel" aria-labelledby="mn-tab">
        <div id="mapMn" style="width: 100%; height: 500px; padding:20px"></div>
    </div>
    <div class="tab-pane fade" id="ub" role="tabpanel" aria-labelledby="ub-tab">
        <div id="mapUb" style="width: 100%; height: 500px; padding:20px"></div>
    </div>
</div>
<?= $this->Html->script('../vendor/ammap/ammap') ?>
<?= $this->Html->script('map') ?>