<?php

namespace PHPMaker2025\new2025;

// Page object
$MatakuliahEdit = &$Page;
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
<form name="fmatakuliahedit" id="fmatakuliahedit" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { matakuliah: currentTable } });
var currentPageID = ew.PAGE_ID = "edit";
var currentForm;
var fmatakuliahedit;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fmatakuliahedit")
        .setPageId("edit")

        // Add fields
        .setFields([
            ["id", [fields.id.visible && fields.id.required ? ew.Validators.required(fields.id.caption) : null], fields.id.isInvalid],
            ["kode_mk", [fields.kode_mk.visible && fields.kode_mk.required ? ew.Validators.required(fields.kode_mk.caption) : null], fields.kode_mk.isInvalid],
            ["nama_mk", [fields.nama_mk.visible && fields.nama_mk.required ? ew.Validators.required(fields.nama_mk.caption) : null], fields.nama_mk.isInvalid],
            ["sks", [fields.sks.visible && fields.sks.required ? ew.Validators.required(fields.sks.caption) : null, ew.Validators.integer], fields.sks.isInvalid],
            ["prodi_id", [fields.prodi_id.visible && fields.prodi_id.required ? ew.Validators.required(fields.prodi_id.caption) : null, ew.Validators.integer], fields.prodi_id.isInvalid],
            ["dosen_id", [fields.dosen_id.visible && fields.dosen_id.required ? ew.Validators.required(fields.dosen_id.caption) : null, ew.Validators.integer], fields.dosen_id.isInvalid]
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
<input type="hidden" name="t" value="matakuliah">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<?php if (IsJsonResponse()) { ?>
<input type="hidden" name="json" value="1">
<?php } ?>
<input type="hidden" name="<?= $Page->getFormOldKeyName() ?>" value="<?= $Page->OldKey ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($Page->id->Visible) { // id ?>
    <div id="r_id"<?= $Page->id->rowAttributes() ?>>
        <label id="elh_matakuliah_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->id->caption() ?><?= $Page->id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->id->cellAttributes() ?>>
<span id="el_matakuliah_id">
<span<?= $Page->id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?= HtmlEncode(RemoveHtml($Page->id->getDisplayValue($Page->id->getEditValue()))) ?>"></span>
<input type="hidden" data-table="matakuliah" data-field="x_id" data-hidden="1" name="x_id" id="x_id" value="<?= HtmlEncode($Page->id->CurrentValue) ?>">
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->kode_mk->Visible) { // kode_mk ?>
    <div id="r_kode_mk"<?= $Page->kode_mk->rowAttributes() ?>>
        <label id="elh_matakuliah_kode_mk" for="x_kode_mk" class="<?= $Page->LeftColumnClass ?>"><?= $Page->kode_mk->caption() ?><?= $Page->kode_mk->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->kode_mk->cellAttributes() ?>>
<span id="el_matakuliah_kode_mk">
<input type="<?= $Page->kode_mk->getInputTextType() ?>" name="x_kode_mk" id="x_kode_mk" data-table="matakuliah" data-field="x_kode_mk" value="<?= $Page->kode_mk->getEditValue() ?>" size="30" maxlength="10" placeholder="<?= HtmlEncode($Page->kode_mk->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->kode_mk->formatPattern()) ?>"<?= $Page->kode_mk->editAttributes() ?> aria-describedby="x_kode_mk_help">
<?= $Page->kode_mk->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->kode_mk->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->nama_mk->Visible) { // nama_mk ?>
    <div id="r_nama_mk"<?= $Page->nama_mk->rowAttributes() ?>>
        <label id="elh_matakuliah_nama_mk" for="x_nama_mk" class="<?= $Page->LeftColumnClass ?>"><?= $Page->nama_mk->caption() ?><?= $Page->nama_mk->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->nama_mk->cellAttributes() ?>>
<span id="el_matakuliah_nama_mk">
<input type="<?= $Page->nama_mk->getInputTextType() ?>" name="x_nama_mk" id="x_nama_mk" data-table="matakuliah" data-field="x_nama_mk" value="<?= $Page->nama_mk->getEditValue() ?>" size="30" maxlength="100" placeholder="<?= HtmlEncode($Page->nama_mk->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->nama_mk->formatPattern()) ?>"<?= $Page->nama_mk->editAttributes() ?> aria-describedby="x_nama_mk_help">
<?= $Page->nama_mk->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->nama_mk->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->sks->Visible) { // sks ?>
    <div id="r_sks"<?= $Page->sks->rowAttributes() ?>>
        <label id="elh_matakuliah_sks" for="x_sks" class="<?= $Page->LeftColumnClass ?>"><?= $Page->sks->caption() ?><?= $Page->sks->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->sks->cellAttributes() ?>>
<span id="el_matakuliah_sks">
<input type="<?= $Page->sks->getInputTextType() ?>" name="x_sks" id="x_sks" data-table="matakuliah" data-field="x_sks" value="<?= $Page->sks->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->sks->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->sks->formatPattern()) ?>"<?= $Page->sks->editAttributes() ?> aria-describedby="x_sks_help">
<?= $Page->sks->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->sks->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fmatakuliahedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fmatakuliahedit", "x_sks", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->prodi_id->Visible) { // prodi_id ?>
    <div id="r_prodi_id"<?= $Page->prodi_id->rowAttributes() ?>>
        <label id="elh_matakuliah_prodi_id" for="x_prodi_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->prodi_id->caption() ?><?= $Page->prodi_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->prodi_id->cellAttributes() ?>>
<span id="el_matakuliah_prodi_id">
<input type="<?= $Page->prodi_id->getInputTextType() ?>" name="x_prodi_id" id="x_prodi_id" data-table="matakuliah" data-field="x_prodi_id" value="<?= $Page->prodi_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->prodi_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->prodi_id->formatPattern()) ?>"<?= $Page->prodi_id->editAttributes() ?> aria-describedby="x_prodi_id_help">
<?= $Page->prodi_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->prodi_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fmatakuliahedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fmatakuliahedit", "x_prodi_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->dosen_id->Visible) { // dosen_id ?>
    <div id="r_dosen_id"<?= $Page->dosen_id->rowAttributes() ?>>
        <label id="elh_matakuliah_dosen_id" for="x_dosen_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->dosen_id->caption() ?><?= $Page->dosen_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->dosen_id->cellAttributes() ?>>
<span id="el_matakuliah_dosen_id">
<input type="<?= $Page->dosen_id->getInputTextType() ?>" name="x_dosen_id" id="x_dosen_id" data-table="matakuliah" data-field="x_dosen_id" value="<?= $Page->dosen_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->dosen_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->dosen_id->formatPattern()) ?>"<?= $Page->dosen_id->editAttributes() ?> aria-describedby="x_dosen_id_help">
<?= $Page->dosen_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->dosen_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fmatakuliahedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fmatakuliahedit", "x_dosen_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?= $Page->IsModal ? '<template class="ew-modal-buttons">' : '<div class="row ew-buttons">' ?><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit" form="fmatakuliahedit"><?= $Language->phrase("SaveBtn") ?></button>
<?php if (IsJsonResponse()) { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-bs-dismiss="modal"><?= $Language->phrase("CancelBtn") ?></button>
<?php } else { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" form="fmatakuliahedit" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
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
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fmatakuliahedit.validateFields()){ew.prompt({title: ew.language.phrase("MessageEditConfirm"),icon:'question',showCancelButton:true},result=>{if(result)$("#fmatakuliahedit").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("matakuliah");
});
</script>
<?php if (Config("MS_ENTER_MOVING_CURSOR_TO_NEXT_FIELD")) { ?>
<script>
loadjs.ready("head", function() { $("#fmatakuliahedit:first *:input[type!=hidden]:first").focus(),$("input").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("select").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("radio").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()})});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
