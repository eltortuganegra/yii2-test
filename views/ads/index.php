<table id="myTable" class="tablesorter">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Link</th>
            <th>City</th>
            <th>Main image</th>
        </tr>
    </thead>
    <tbody>
        <?php use yii\web\View;

        foreach ($ads as $ad):?>
        <tr>
            <td><?= $ad->getId(); ?></td>
            <td><?= $ad->getTitle(); ?></td>
            <td><?= $ad->getLink(); ?></td>
            <td><?= $ad->getCity(); ?></td>
            <td><?= $ad->getMainImage(); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br/>
<button class="btn btn-primary" id="convert-table">Download as json</button>

<?php
$this->registerJsFile(
    '@web/js/site.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>



