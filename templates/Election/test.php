<div class="row">
    <div class="col-md-4 mb-4">
        <input type="text" class="form-control" id="search_candidate" aria-describedby="emailHelp" placeholder="Нэр дэвшигч хайх">
    </div>
    <div class="col-md-4 mb-4">
        <select class="custom-select">
            <option selected>Аймаг/Дүүрэг</option>
            <?php foreach ($pageData['districtList'] as $item): ?>
                <option value="<?= $item['id']?>"><?= $item['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-4 mb-4">
        <select class="custom-select">
            <option selected>Тойрог</option>
            <?php foreach ($pageData['electionDistrict'] as $item): ?>
                <option value="<?= $item['id']?>"><?= $item['district_name'].' | '.$item['district_mandate'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>