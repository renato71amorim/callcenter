
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["codigosetor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descricao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ddd" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["defaltddd" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["codigosetor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigosetor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descricao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descricao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ddd" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ddd" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["defaltddd" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["defaltddd" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_codigosetor' + iSeqRow).bind('blur', function() { sc_form_setor_codigosetor_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_setor_codigosetor_onfocus(this, iSeqRow) });
  $('#id_sc_field_descricao' + iSeqRow).bind('blur', function() { sc_form_setor_descricao_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_setor_descricao_onfocus(this, iSeqRow) });
  $('#id_sc_field_ddd' + iSeqRow).bind('blur', function() { sc_form_setor_ddd_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_setor_ddd_onfocus(this, iSeqRow) });
  $('#id_sc_field_defaltddd' + iSeqRow).bind('blur', function() { sc_form_setor_defaltddd_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_setor_defaltddd_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_setor_codigosetor_onblur(oThis, iSeqRow) {
  do_ajax_form_setor_validate_codigosetor();
  scCssBlur(oThis);
}

function sc_form_setor_codigosetor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_setor_descricao_onblur(oThis, iSeqRow) {
  do_ajax_form_setor_validate_descricao();
  scCssBlur(oThis);
}

function sc_form_setor_descricao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_setor_ddd_onblur(oThis, iSeqRow) {
  do_ajax_form_setor_validate_ddd();
  scCssBlur(oThis);
}

function sc_form_setor_ddd_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_setor_defaltddd_onblur(oThis, iSeqRow) {
  do_ajax_form_setor_validate_defaltddd();
  scCssBlur(oThis);
}

function sc_form_setor_defaltddd_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("codigosetor", "", status);
	displayChange_field("descricao", "", status);
	displayChange_field("ddd", "", status);
	displayChange_field("defaltddd", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_codigosetor(row, status);
	displayChange_field_descricao(row, status);
	displayChange_field_ddd(row, status);
	displayChange_field_defaltddd(row, status);
}

function displayChange_field(field, row, status) {
	if ("codigosetor" == field) {
		displayChange_field_codigosetor(row, status);
	}
	if ("descricao" == field) {
		displayChange_field_descricao(row, status);
	}
	if ("ddd" == field) {
		displayChange_field_ddd(row, status);
	}
	if ("defaltddd" == field) {
		displayChange_field_defaltddd(row, status);
	}
}

function displayChange_field_codigosetor(row, status) {
}

function displayChange_field_descricao(row, status) {
}

function displayChange_field_ddd(row, status) {
}

function displayChange_field_defaltddd(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_setor_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(18);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

