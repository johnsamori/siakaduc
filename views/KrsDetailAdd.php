<?php

namespace PHPMaker2025\new2025;

// Page object
$KrsDetailAdd = &$Page;
?>
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { krs_detail: currentTable } });
var currentPageID = ew.PAGE_ID = "add";
var currentForm;
var fkrs_detailadd;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fkrs_detailadd")
        .setPageId("add")

        // Add fields
        .setFields([
            ["krs_id", [fields.krs_id.visible && fields.krs_id.required ? ew.Validators.required(fields.krs_id.caption) : null, ew.Validators.integer], fields.krs_id.isInvalid],
            ["matakuliah_id", [fields.matakuliah_id.visible && fields.matakuliah_id.required ? ew.Validators.required(fields.matakuliah_id.caption) : null, ew.Validators.integer], fields.matakuliah_id.isInvalid]
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
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<?php // Begin of Card view by Masino Sinaga, September 10, 2023 ?>
<?php if (!$Page->IsModal) { ?>
<div class="col-md-12">
  <div class="card shadow-sm">
    <div class="card-header">
	  <h4 class="card-title"><?php echo Language()->phrase("AddCaption"); ?></h4>
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
<form name="fkrs_detailadd" id="fkrs_detailadd" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<?php if (Config("CSRF_PROTECTION") && Csrf()->isEnabled()) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" id="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" id="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="krs_detail">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<?php if (IsJsonResponse()) { ?>
<input type="hidden" name="json" value="1">
<?php } ?>
<input type="hidden" name="<?= $Page->getFormOldKeyName() ?>" value="<?= $Page->OldKey ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($Page->krs_id->Visible) { // krs_id ?>
    <div id="r_krs_id"<?= $Page->krs_id->rowAttributes() ?>>
        <label id="elh_krs_detail_krs_id" for="x_krs_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->krs_id->caption() ?><?= $Page->krs_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->krs_id->cellAttributes() ?>>
<span id="el_krs_detail_krs_id">
<input type="<?= $Page->krs_id->getInputTextType() ?>" name="x_krs_id" id="x_krs_id" data-table="krs_detail" data-field="x_krs_id" value="<?= $Page->krs_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->krs_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->krs_id->formatPattern()) ?>"<?= $Page->krs_id->editAttributes() ?> aria-describedby="x_krs_id_help">
<?= $Page->krs_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->krs_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fkrs_detailadd', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkrs_detailadd", "x_krs_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->matakuliah_id->Visible) { // matakuliah_id ?>
    <div id="r_matakuliah_id"<?= $Page->matakuliah_id->rowAttributes() ?>>
        <label id="elh_krs_detail_matakuliah_id" for="x_matakuliah_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->matakuliah_id->caption() ?><?= $Page->matakuliah_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->matakuliah_id->cellAttributes() ?>>
<span id="el_krs_detail_matakuliah_id">
<input type="<?= $Page->matakuliah_id->getInputTextType() ?>" name="x_matakuliah_id" id="x_matakuliah_id" data-table="krs_detail" data-field="x_matakuliah_id" value="<?= $Page->matakuliah_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->matakuliah_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->matakuliah_id->formatPattern()) ?>"<?= $Page->matakuliah_id->editAttributes() ?> aria-describedby="x_matakuliah_id_help">
<?= $Page->matakuliah_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->matakuliah_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fkrs_detailadd', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkrs_detailadd", "x_matakuliah_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?= $Page->IsModal ? '<template class="ew-modal-buttons">' : '<div class="row ew-buttons">' ?><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit" form="fkrs_detailadd"><?= $Language->phrase("AddBtn") ?></button>
<?php if (IsJsonResponse()) { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-bs-dismiss="modal"><?= $Language->phrase("CancelBtn") ?></button>
<?php } else { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" form="fkrs_detailadd" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
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
<?php
$Page->showPageFooter();
?>
<?php if (!$Page->IsModal && !$Page->isExport()) { ?>
<script>
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fkrs_detailadd.validateFields()){ew.prompt({title: ew.language.phrase("MessageAddConfirm"),icon:'question',showCancelButton:true},result=>{if(result)$("#fkrs_detailadd").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("krs_detail");
});
</script>
<?php if (Config("MS_ENTER_MOVING_CURSOR_TO_NEXT_FIELD")) { ?>
<script>
loadjs.ready("head", function() { $("#fkrs_detailadd:first *:input[type!=hidden]:first").focus(),$("input").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("select").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("radio").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()})});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
