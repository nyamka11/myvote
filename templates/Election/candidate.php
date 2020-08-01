<br>
<div class="row">
   <div class="col-md-3">
      <div>
         <img style="width: 100%;" src="<?= $this->Url->build("/img/img_avatar.png", ['fullBase' => true]) ?>" alt=""/>
      </div>
   </div>
   <div class="col-md-9">
      <div class="profile-head">
         <h5><?= $candidateInfo['fullname'] ?> </h5>
      </div>
      <div class="row">
         <div class="col-md-6">
            <small>Нам, эвсэл:</small><br>
            <p class="font-weight-normal"><?=$candidateInfo['occupation'] ?></p>
            <small>Мэргэжил:</small><br>
            <p class="font-weight-normal"><?=$candidateInfo['occupation'] ?></p>
            <small>Одоо эрхэлж буй ажил:</small><br>
            <p class="font-weight-normal"><?=$candidateInfo['current_job'] ?></p>
            <small>Эрдмийн зэрэг, цол:</small><br>
            <p class="font-weight-normal"><?=$candidateInfo['degree'] ?></p>
         </div>
         <div class="col-md-6">
            <small>Вэб хаяг:</small><br>
            <p class="font-weight-normal"><?=$candidateInfo['web_site'] ?></p>
            <small>Фэйсбүүк хаяг:</small><br>
            <p class="font-weight-normal"><?=$candidateInfo['facebook'] ?></p>
            <small>Твиттер хаяг:</small><br>
            <p class="font-weight-normal"><?=$candidateInfo['twitter'] ?></p>
            <small>Инстаграм хаяг:</small><br>
            <p class="font-weight-normal"><?=$candidateInfo['instagramm'] ?></p>
         </div>
      </div>
   </div>
</div>
<br>
<dl class="row">
   <dt class="col-sm-3">БОЛОВСРОЛ</dt>
   <dd class="col-sm-9">
      <p><?=$candidateInfo['education'] ?></p>
   </dd>
   <dt class="col-sm-3">АЖЛЫН ТУРШЛАГА</dt>
   <dd class="col-sm-9">
      <p><?=$candidateInfo['experience'] ?></p>
   </dd>
   <dt class="col-sm-3">ОНЦЛОХ АЖЛУУД</dt>
   <dd class="col-sm-9">
      <p><?=$candidateInfo['occupation'] ?></p>
   </dd>
</dl>