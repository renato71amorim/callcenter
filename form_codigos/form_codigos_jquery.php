
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
  scEventControl_data["codigorua" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigocontribuinte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigooperador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigocobrador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["serie" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numerorecibo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["codigorua" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigorua" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigocontribuinte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigocontribuinte" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigooperador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigooperador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigocobrador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigocobrador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["serie" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["serie" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numerorecibo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numerorecibo" + iSeqRow]["change"]) {
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
  $('#id_sc_field_codigorua' + iSeqRow).bind('blur', function() { sc_form_codigos_codigorua_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_codigos_codigorua_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigocontribuinte' + iSeqRow).bind('blur', function() { sc_form_codigos_codigocontribuinte_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_codigos_codigocontribuinte_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigooperador' + iSeqRow).bind('blur', function() { sc_form_codigos_codigooperador_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_codigos_codigooperador_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigocobrador' + iSeqRow).bind('blur', function() { sc_form_codigos_codigocobrador_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_codigos_codigocobrador_onfocus(this, iSeqRow) });
  $('#id_sc_field_serie' + iSeqRow).bind('blur', function() { sc_form_codigos_serie_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_codigos_serie_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerorecibo' + iSeqRow).bind('blur', function() { sc_form_codigos_numerorecibo_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_codigos_numerorecibo_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_codigos_codigorua_onblur(oThis, iSeqRow) {
  do_ajax_form_codigos_validate_codigorua();
  scCssBlur(oThis);
}

function sc_form_codigos_codigorua_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_codigos_codigocontribuinte_onblur(oThis, iSeqRow) {
  do_ajax_form_codigos_validate_codigocontribuinte();
  scCssBlur(oThis);
}

function sc_form_codigos_codigocontribuinte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_codigos_codigooperador_onblur(oThis, iSeqRow) {
  do_ajax_form_codigos_validate_codigooperador();
  scCssBlur(oThis);
}

function sc_form_codigos_codigooperador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_codigos_codigocobrador_onblur(oThis, iSeqRow) {
  do_ajax_form_codigos_validate_codigocobrador();
  scCssBlur(oThis);
}

function sc_form_codigos_codigocobrador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_codigos_serie_onblur(oThis, iSeqRow) {
  do_ajax_form_codigos_validate_serie();
  scCssBlur(oThis);
}

function sc_form_codigos_serie_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_codigos_numerorecibo_onblur(oThis, iSeqRow) {
  do_ajax_form_codigos_validate_numerorecibo();
  scCssBlur(oThis);
}

function sc_form_codigos_numerorecibo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("codigorua", "", status);
	displayChange_field("codigocontribuinte", "", status);
	displayChange_field("codigooperador", "", status);
	displayChange_field("codigocobrador", "", status);
	displayChange_field("serie", "", status);
	displayChange_field("numerorecibo", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_codigorua(row, status);
	displayChange_field_codigocontribuinte(row, status);
	displayChange_field_codigooperador(row, status);
	displayChange_field_codigocobrador(row, status);
	displayChange_field_serie(row, status);
	displayChange_field_numerorecibo(row, status);
}

function displayChange_field(field, row, status) {
	if ("codigorua" == field) {
		displayChange_field_codigorua(row, status);
	}
	if ("codigocontribuinte" == field) {
		displayChange_field_codigocontribuinte(row, status);
	}
	if ("codigooperador" == field) {
		displayChange_field_codigooperador(row, status);
	}
	if ("codigocobrador" == field) {
		displayChange_field_codigocobrador(row, status);
	}
	if ("serie" == field) {
		displayChange_field_serie(row, status);
	}
	if ("numerorecibo" == field) {
		displayChange_field_numerorecibo(row, status);
	}
}

function displayChange_field_codigorua(row, status) {
}

function displayChange_field_codigocontribuinte(row, status) {
}

function displayChange_field_codigooperador(row, status) {
}

function displayChange_field_codigocobrador(row, status) {
}

function displayChange_field_serie(row, status) {
}

function displayChange_field_numerorecibo(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_codigos_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(20);
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

