<?php

namespace PHPMaker2025\new2025;

// Page object
$KrsEdit = &$Page;
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
<form name="fkrsedit" id="fkrsedit" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { krs: currentTable } });
var currentPageID = ew.PAGE_ID = "edit";
var currentForm;
var fkrsedit;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fkrsedit")
        .setPageId("edit")

        // Add fields
        .setFields([
            ["id", [fields.id.visible && fields.id.required ? ew.Validators.required(fields.id.caption) : null], fields.id.isInvalid],
            ["mahasiswa_id", [fields.mahasiswa_id.visible && fields.mahasiswa_id.required ? ew.Validators.required(fields.mahasiswa_id.caption) : null, ew.Validators.integer], fields.mahasiswa_id.isInvalid],
            ["tahun_akademik_id", [fields.tahun_akademik_id.visible && fields.tahun_akademik_id.required ? ew.Validators.required(fields.tahun_akademik_id.caption) : null, ew.Validators.integer], fields.tahun_akademik_id.isInvalid],
            ["tanggal_pengisian", [fields.tanggal_pengisian.visible && fields.tanggal_pengisian.required ? ew.Validators.required(fields.tanggal_pengisian.caption) : null, ew.Validators.datetime(fields.tanggal_pengisian.clientFormatPattern)], fields.tanggal_pengisian.isInvalid]
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
<input type="hidden" name="t" value="krs">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<?php if (IsJsonResponse()) { ?>
<input type="hidden" name="json" value="1">
<?php } ?>
<input type="hidden" name="<?= $Page->getFormOldKeyName() ?>" value="<?= $Page->OldKey ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($Page->id->Visible) { // id ?>
    <div id="r_id"<?= $Page->id->rowAttributes() ?>>
        <label id="elh_krs_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->id->caption() ?><?= $Page->id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->id->cellAttributes() ?>>
<span id="el_krs_id">
<span<?= $Page->id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?= HtmlEncode(RemoveHtml($Page->id->getDisplayValue($Page->id->getEditValue()))) ?>"></span>
<input type="hidden" data-table="krs" data-field="x_id" data-hidden="1" name="x_id" id="x_id" value="<?= HtmlEncode($Page->id->CurrentValue) ?>">
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->mahasiswa_id->Visible) { // mahasiswa_id ?>
    <div id="r_mahasiswa_id"<?= $Page->mahasiswa_id->rowAttributes() ?>>
        <label id="elh_krs_mahasiswa_id" for="x_mahasiswa_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->mahasiswa_id->caption() ?><?= $Page->mahasiswa_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->mahasiswa_id->cellAttributes() ?>>
<span id="el_krs_mahasiswa_id">
<input type="<?= $Page->mahasiswa_id->getInputTextType() ?>" name="x_mahasiswa_id" id="x_mahasiswa_id" data-table="krs" data-field="x_mahasiswa_id" value="<?= $Page->mahasiswa_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->mahasiswa_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->mahasiswa_id->formatPattern()) ?>"<?= $Page->mahasiswa_id->editAttributes() ?> aria-describedby="x_mahasiswa_id_help">
<?= $Page->mahasiswa_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->mahasiswa_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fkrsedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkrsedit", "x_mahasiswa_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->tahun_akademik_id->Visible) { // tahun_akademik_id ?>
    <div id="r_tahun_akademik_id"<?= $Page->tahun_akademik_id->rowAttributes() ?>>
        <label id="elh_krs_tahun_akademik_id" for="x_tahun_akademik_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->tahun_akademik_id->caption() ?><?= $Page->tahun_akademik_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->tahun_akademik_id->cellAttributes() ?>>
<span id="el_krs_tahun_akademik_id">
<input type="<?= $Page->tahun_akademik_id->getInputTextType() ?>" name="x_tahun_akademik_id" id="x_tahun_akademik_id" data-table="krs" data-field="x_tahun_akademik_id" value="<?= $Page->tahun_akademik_id->getEditValue() ?>" size="30" placeholder="<?= HtmlEncode($Page->tahun_akademik_id->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->tahun_akademik_id->formatPattern()) ?>"<?= $Page->tahun_akademik_id->editAttributes() ?> aria-describedby="x_tahun_akademik_id_help">
<?= $Page->tahun_akademik_id->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->tahun_akademik_id->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fkrsedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkrsedit", "x_tahun_akademik_id", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->tanggal_pengisian->Visible) { // tanggal_pengisian ?>
    <div id="r_tanggal_pengisian"<?= $Page->tanggal_pengisian->rowAttributes() ?>>
        <label id="elh_krs_tanggal_pengisian" for="x_tanggal_pengisian" class="<?= $Page->LeftColumnClass ?>"><?= $Page->tanggal_pengisian->caption() ?><?= $Page->tanggal_pengisian->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->tanggal_pengisian->cellAttributes() ?>>
<span id="el_krs_tanggal_pengisian">
<input type="<?= $Page->tanggal_pengisian->getInputTextType() ?>" name="x_tanggal_pengisian" id="x_tanggal_pengisian" data-table="krs" data-field="x_tanggal_pengisian" value="<?= $Page->tanggal_pengisian->getEditValue() ?>" placeholder="<?= HtmlEncode($Page->tanggal_pengisian->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->tanggal_pengisian->formatPattern()) ?>"<?= $Page->tanggal_pengisian->editAttributes() ?> aria-describedby="x_tanggal_pengisian_help">
<?= $Page->tanggal_pengisian->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->tanggal_pengisian->getErrorMessage() ?></div>
<?php if (!$Page->tanggal_pengisian->ReadOnly && !$Page->tanggal_pengisian->Disabled && !isset($Page->tanggal_pengisian->EditAttrs["readonly"]) && !isset($Page->tanggal_pengisian->EditAttrs["disabled"])) { ?>
<script<?= Nonce() ?>>
loadjs.ready(["fkrsedit", "datetimepicker"], function () {
    let format = "<?= DateFormat(0) ?>",
        options = {
            localization: {
                locale: ew.LANGUAGE_ID + "-u-nu-" + ew.getNumberingSystem(),
                hourCycle: format.match(/H/) ? "h24" : "h12",
                format,
                ...ew.language.phrase("datetimepicker")
            },
            display: {
                icons: {
                    previous: ew.IS_RTL ? "fa-solid fa-chevron-right" : "fa-solid fa-chevron-left",
                    next: ew.IS_RTL ? "fa-solid fa-chevron-left" : "fa-solid fa-chevron-right"
                },
                components: {
                    clock: !!format.match(/h/i) || !!format.match(/m/) || !!format.match(/s/i),
                    hours: !!format.match(/h/i),
                    minutes: !!format.match(/m/),
                    seconds: !!format.match(/s/i)
                },
                theme: ew.getPreferredTheme()
            }
        };
    ew.createDateTimePicker(
        "fkrsedit",
        "x_tanggal_pengisian",
        ew.deepAssign({"useCurrent":false,"display":{"sideBySide":false}}, options),
        {"inputGroup":true}
    );
});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready(['fkrsedit', 'jqueryinputmask'], function() {
	options = {
		'jitMasking': false,
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fkrsedit", "x_tanggal_pengisian", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?= $Page->IsModal ? '<template class="ew-modal-buttons">' : '<div class="row ew-buttons">' ?><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit" form="fkrsedit"><?= $Language->phrase("SaveBtn") ?></button>
<?php if (IsJsonResponse()) { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-bs-dismiss="modal"><?= $Language->phrase("CancelBtn") ?></button>
<?php } else { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" form="fkrsedit" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
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
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fkrsedit.validateFields()){ew.prompt({title: ew.language.phrase("MessageEditConfirm"),icon:'question',showCancelButton:true},result=>{if(result)$("#fkrsedit").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("krs");
});
</script>
<?php if (Config("MS_ENTER_MOVING_CURSOR_TO_NEXT_FIELD")) { ?>
<script>
loadjs.ready("head", function() { $("#fkrsedit:first *:input[type!=hidden]:first").focus(),$("input").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("select").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("radio").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()})});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
