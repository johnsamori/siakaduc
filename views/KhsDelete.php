<?php

namespace PHPMaker2025\new2025;

// Page object
$KhsDelete = &$Page;
?>
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { khs: currentTable } });
var currentPageID = ew.PAGE_ID = "delete";
var currentForm;
var fkhsdelete;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fkhsdelete")
        .setPageId("delete")
        .build();
    window[form.id] = form;
    currentForm = form;
    loadjs.done(form.id);
});
</script>
<script<?= Nonce() ?>>
loadjs.ready("head", function () {
    // Write your table-specific client script here, no need to add script tags.
});
</script>
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<form name="fkhsdelete" id="fkhsdelete" class="ew-form ew-delete-form" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<?php if (Config("CSRF_PROTECTION") && Csrf()->isEnabled()) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" id="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" id="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="khs">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($Page->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?= HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid <?= $Page->TableGridClass ?>">
<div class="card-body ew-grid-middle-panel <?= $Page->TableContainerClass ?>" style="<?= $Page->TableContainerStyle ?>">
<table class="<?= $Page->TableClass ?>">
    <thead>
    <tr class="ew-table-header">
<?php if ($Page->id->Visible) { // id ?>
        <th class="<?= $Page->id->headerCellClass() ?>"><span id="elh_khs_id" class="khs_id"><?= $Page->id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->mahasiswa_id->Visible) { // mahasiswa_id ?>
        <th class="<?= $Page->mahasiswa_id->headerCellClass() ?>"><span id="elh_khs_mahasiswa_id" class="khs_mahasiswa_id"><?= $Page->mahasiswa_id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->matakuliah_id->Visible) { // matakuliah_id ?>
        <th class="<?= $Page->matakuliah_id->headerCellClass() ?>"><span id="elh_khs_matakuliah_id" class="khs_matakuliah_id"><?= $Page->matakuliah_id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->tahun_akademik_id->Visible) { // tahun_akademik_id ?>
        <th class="<?= $Page->tahun_akademik_id->headerCellClass() ?>"><span id="elh_khs_tahun_akademik_id" class="khs_tahun_akademik_id"><?= $Page->tahun_akademik_id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->nilai_huruf->Visible) { // nilai_huruf ?>
        <th class="<?= $Page->nilai_huruf->headerCellClass() ?>"><span id="elh_khs_nilai_huruf" class="khs_nilai_huruf"><?= $Page->nilai_huruf->caption() ?></span></th>
<?php } ?>
<?php if ($Page->nilai_angka->Visible) { // nilai_angka ?>
        <th class="<?= $Page->nilai_angka->headerCellClass() ?>"><span id="elh_khs_nilai_angka" class="khs_nilai_angka"><?= $Page->nilai_angka->caption() ?></span></th>
<?php } ?>
    </tr>
    </thead>
    <tbody>
<?php
$Page->RecordCount = 0;
$i = 0;
while ($Page->fetch()) {
    $Page->RecordCount++;
    $Page->RowCount++;

    // Set row properties
    $Page->resetAttributes();
    $Page->RowType = RowType::VIEW; // View

    // Get the field contents
    $Page->loadRowValues($Page->CurrentRow);

    // Render row
    $Page->renderRow();
?>
    <tr <?= $Page->rowAttributes() ?>>
<?php if ($Page->id->Visible) { // id ?>
        <td<?= $Page->id->cellAttributes() ?>>
<span id="">
<span<?= $Page->id->viewAttributes() ?>>
<?= $Page->id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->mahasiswa_id->Visible) { // mahasiswa_id ?>
        <td<?= $Page->mahasiswa_id->cellAttributes() ?>>
<span id="">
<span<?= $Page->mahasiswa_id->viewAttributes() ?>>
<?= $Page->mahasiswa_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->matakuliah_id->Visible) { // matakuliah_id ?>
        <td<?= $Page->matakuliah_id->cellAttributes() ?>>
<span id="">
<span<?= $Page->matakuliah_id->viewAttributes() ?>>
<?= $Page->matakuliah_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->tahun_akademik_id->Visible) { // tahun_akademik_id ?>
        <td<?= $Page->tahun_akademik_id->cellAttributes() ?>>
<span id="">
<span<?= $Page->tahun_akademik_id->viewAttributes() ?>>
<?= $Page->tahun_akademik_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->nilai_huruf->Visible) { // nilai_huruf ?>
        <td<?= $Page->nilai_huruf->cellAttributes() ?>>
<span id="">
<span<?= $Page->nilai_huruf->viewAttributes() ?>>
<?= $Page->nilai_huruf->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->nilai_angka->Visible) { // nilai_angka ?>
        <td<?= $Page->nilai_angka->cellAttributes() ?>>
<span id="">
<span<?= $Page->nilai_angka->viewAttributes() ?>>
<?= $Page->nilai_angka->getViewValue() ?></span>
</span>
</td>
<?php } ?>
    </tr>
<?php
}
$Page->Result?->free();
?>
</tbody>
</table>
</div>
</div>
<div class="ew-buttons ew-desktop-buttons">
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?= $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$Page->showPageFooter();
?>
<?php if (!$Page->IsModal && !$Page->isExport()) { ?>
<script>
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fkhsdelete.validateFields()){ew.prompt({title: ew.language.phrase("MessageDeleteConfirm"),icon:'question',showCancelButton:true},result=>{if(result) $("#fkhsdelete").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
