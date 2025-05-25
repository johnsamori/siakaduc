<?php

namespace PHPMaker2025\new2025;

// Page object
$KhsEdit = &$Page;
?>
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<main class="edit">
<?php // Begin of Card view by Masino Sinaga, September 10, 2023 ?>
<?php if (!$Page->IsModal) { ?>
<div class="col-md-12">
  <div class="card shadow-sm">
    <div class="card-header">
	  <h4 class="card-title"><?php echo Language()->phrase("EditCaption"); ?></h4>
	  <div class="card-tools">
	  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
	  </button>
	  </div>
	  <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<?php } ?>
<?php // End of Card view by Masino Sinaga, September 10, 2023 ?>
<form name="fkhsedit" id="fkhsedit" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { khs: currentTable } });
var currentPageID = ew.PAGE_ID = "edit";
var currentForm;
var fkhsedit;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fkhsedit")
        .setPageId("edit")

        // Add fields
        .setFields([
            ["id", [fields.id.visible && fields.id.required ? ew.Validators.required(fields.id.caption) : null], fields.id.isInvalid],
            ["mahasiswa_id", [fields.mahasiswa_id.visible && fields.mahasiswa_id.required ? ew.Validators.required(fields.mahasiswa_id.caption) : null, ew.Validators.integer], fields.mahasiswa_id.isInvalid],
            ["matakuliah_id", [fields.matakuliah_id.visible && fields.matakuliah_id.required ? ew.Validators.required(fields.matakuliah_id.caption) : null, ew.Validators.integer], fields.matakuliah_id.isInvalid],
            ["tahun_akademik_id", [fields.tahun_akademik_id.visible && fields.tahun_akademik_id.required ? ew.Validators.required(fields.tahun_akademik_id.caption) : null, ew.Validators.integer], fields.tahun_akademik_id.isInvalid],
            ["nilai_huruf", [fields.nilai_huruf.visible && fields.nilai_huruf.required ? ew.Validators.required(fields.nilai_huruf.caption) : null], fields.nilai_huruf.isInvalid],
            ["nilai_angka", [fields.nilai_angka.visible && fields.nilai_angka.required ? ew.Validators.required(fields.nilai_angka.caption) : null, ew.Validators.float], fields.nilai_angka.isInvalid]
        ])

        // Form_CustomValidate
        .setCustomValidate(
            function (fobj) { // DO NOT CHANGE THIS LINE! (except for adding "async" keyword)
                    // Your custom validation code in JAVASCRIPT here, return false if invalid.
                    return true;
                }
        )

        // Use JavaScript validation or not
        .setValidateRequired(ew.CLIENT_VALIDATE)

        // Dynamic selection lists
        .setLists({
            "nilai_huruf": <?= $Page->nilai_huruf->toClientList($Page) ?>,
        })
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
<?php if (Config("CSRF_PROTECTION") && Csrf()->isEnabled()) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" id="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" id="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="khs">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<?php if (IsJsonResponse()) { ?>
<input type="hidden" name="json" value="1">
<?php } ?>
<input type="hidden" name="<?= $Page->getFormOldKeyName() ?>" value="<?= $Page->OldKey ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($Page->id->Visible) { // id ?>
    <div id="r_id"<?= $Page->id->rowAttributes() ?>>
        <label id="elh_khs_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->id->caption() ?><?= $Page->id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->id->cellAttributes() ?>>
<span id="el_khs_id">
<span<?= $Page->id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?= HtmlEncode(RemoveHtml($Page->id->getDisplayValue($Page->id->getEditValue()))) ?>"></span>
<input type="hidden" data-table="khs" data-field="x_id" data-hidden="1" name="x_id" id="x_id" value="<?= HtmlEncode($Page->id->CurrentValue) ?>">
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->mahasiswa_id->Visible) { // mahasiswa_id ?>
    <div id="r_mahasiswa_id"<?= $Page->mahasiswa_id->rowAttributes() ?>>
        <label id="elh_khs_mahasiswa_id" for="x_mahasiswa_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->mahasiswa_id->caption() ?><?= $Page->mahasiswa_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->mahasiswa_id->cellAttributes() ?>>
<span id="el_khs_mahasiswa_id">
<input type="<?= $Page->mahasiswa_id->getInputTextType() ?>" name="x_mahasiswa_id" id="x_mahasiswa_id" data-table="khs" data-field="x_mahasiswa_id" value="<?= $Page->mahasiswa_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->mahasiswa_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->mahasiswa_id->formatPattern()) ?>"<?= $Page->mahasiswa_id->editAttributes() ?> aria-describedby="x_mahasiswa_id_help">
<?= $Page->mahasiswa_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->mahasiswa_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fkhsedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkhsedit", "x_mahasiswa_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->matakuliah_id->Visible) { // matakuliah_id ?>
    <div id="r_matakuliah_id"<?= $Page->matakuliah_id->rowAttributes() ?>>
        <label id="elh_khs_matakuliah_id" for="x_matakuliah_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->matakuliah_id->caption() ?><?= $Page->matakuliah_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->matakuliah_id->cellAttributes() ?>>
<span id="el_khs_matakuliah_id">
<input type="<?= $Page->matakuliah_id->getInputTextType() ?>" name="x_matakuliah_id" id="x_matakuliah_id" data-table="khs" data-field="x_matakuliah_id" value="<?= $Page->matakuliah_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->matakuliah_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->matakuliah_id->formatPattern()) ?>"<?= $Page->matakuliah_id->editAttributes() ?> aria-describedby="x_matakuliah_id_help">
<?= $Page->matakuliah_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->matakuliah_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fkhsedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkhsedit", "x_matakuliah_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->tahun_akademik_id->Visible) { // tahun_akademik_id ?>
    <div id="r_tahun_akademik_id"<?= $Page->tahun_akademik_id->rowAttributes() ?>>
        <label id="elh_khs_tahun_akademik_id" for="x_tahun_akademik_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->tahun_akademik_id->caption() ?><?= $Page->tahun_akademik_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->tahun_akademik_id->cellAttributes() ?>>
<span id="el_khs_tahun_akademik_id">
<input type="<?= $Page->tahun_akademik_id->getInputTextType() ?>" name="x_tahun_akademik_id" id="x_tahun_akademik_id" data-table="khs" data-field="x_tahun_akademik_id" value="<?= $Page->tahun_akademik_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->tahun_akademik_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->tahun_akademik_id->formatPattern()) ?>"<?= $Page->tahun_akademik_id->editAttributes() ?> aria-describedby="x_tahun_akademik_id_help">
<?= $Page->tahun_akademik_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->tahun_akademik_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fkhsedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkhsedit", "x_tahun_akademik_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->nilai_huruf->Visible) { // nilai_huruf ?>
    <div id="r_nilai_huruf"<?= $Page->nilai_huruf->rowAttributes() ?>>
        <label id="elh_khs_nilai_huruf" class="<?= $Page->LeftColumnClass ?>"><?= $Page->nilai_huruf->caption() ?><?= $Page->nilai_huruf->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->nilai_huruf->cellAttributes() ?>>
<span id="el_khs_nilai_huruf">
<template id="tp_x_nilai_huruf">
    <div class="form-check">
        <input type="radio" class="form-check-input" data-table="khs" data-field="x_nilai_huruf" name="x_nilai_huruf" id="x_nilai_huruf"<?= $Page->nilai_huruf->editAttributes() ?>>
        <label class="form-check-label"></label>
    </div>
</template>
<div id="dsl_x_nilai_huruf" class="ew-item-list"></div>
<selection-list hidden
    id="x_nilai_huruf"
    name="x_nilai_huruf"
    value="<?= HtmlEncode($Page->nilai_huruf->CurrentValue) ?>"
    data-type="select-one"
    data-template="tp_x_nilai_huruf"
    data-target="dsl_x_nilai_huruf"
    data-repeatcolumn="5"
    class="form-control<?= $Page->nilai_huruf->isInvalidClass() ?>"
    data-table="khs"
    data-field="x_nilai_huruf"
    data-value-separator="<?= $Page->nilai_huruf->displayValueSeparatorAttribute() ?>"
    <?= $Page->nilai_huruf->editAttributes() ?>></selection-list>
<?= $Page->nilai_huruf->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->nilai_huruf->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->nilai_angka->Visible) { // nilai_angka ?>
    <div id="r_nilai_angka"<?= $Page->nilai_angka->rowAttributes() ?>>
        <label id="elh_khs_nilai_angka" for="x_nilai_angka" class="<?= $Page->LeftColumnClass ?>"><?= $Page->nilai_angka->caption() ?><?= $Page->nilai_angka->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->nilai_angka->cellAttributes() ?>>
<span id="el_khs_nilai_angka">
<input type="<?= $Page->nilai_angka->getInputTextType() ?>" name="x_nilai_angka" id="x_nilai_angka" data-table="khs" data-field="x_nilai_angka" value="<?= $Page->nilai_angka->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->nilai_angka->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->nilai_angka->formatPattern()) ?>"<?= $Page->nilai_angka->editAttributes() ?> aria-describedby="x_nilai_angka_help">
<?= $Page->nilai_angka->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->nilai_angka->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fkhsedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkhsedit", "x_nilai_angka", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?= $Page->IsModal ? '<template class="ew-modal-buttons">' : '<div class="row ew-buttons">' ?><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit" form="fkhsedit"><?= $Language->phrase("SaveBtn") ?></button>
<?php if (IsJsonResponse()) { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-bs-dismiss="modal"><?= $Language->phrase("CancelBtn") ?></button>
<?php } else { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" form="fkhsedit" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
<?php } ?>
    </div><!-- /buttons offset -->
<?= $Page->IsModal ? "</template>" : "</div>" ?><!-- /buttons .row -->
</form>
<?php // Begin of Card view by Masino Sinaga, September 10, 2023 ?>
<?php if (!$Page->IsModal) { ?>
		</div>
     <!-- /.card-body -->
     </div>
  <!-- /.card -->
</div>
<?php } ?>
<?php // End of Card view by Masino Sinaga, September 10, 2023 ?>
</main>
<?php
$Page->showPageFooter();
?>
<?php if (!$Page->IsModal && !$Page->isExport()) { ?>
<script>
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fkhsedit.validateFields()){ew.prompt({title: ew.language.phrase("MessageEditConfirm"),icon:'question',showCancelButton:true},result=>{if(result)$("#fkhsedit").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("khs");
});
</script>
<?php if (Config("MS_ENTER_MOVING_CURSOR_TO_NEXT_FIELD")) { ?>
<script>
loadjs.ready("head", function() { $("#fkhsedit:first *:input[type!=hidden]:first").focus(),$("input").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("select").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("radio").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()})});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
