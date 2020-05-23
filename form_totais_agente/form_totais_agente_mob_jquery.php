
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
  scEventControl_data["user" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ligacoes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["doacoes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ndoacoes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["outras" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tempo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["user" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["user" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ligacoes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ligacoes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["doacoes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["doacoes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ndoacoes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ndoacoes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["outras" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["outras" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tempo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tempo" + iSeqRow]["change"]) {
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
  $('#id_sc_field_user' + iSeqRow).bind('blur', function() { sc_form_totais_agente_user_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_totais_agente_user_onfocus(this, iSeqRow) });
  $('#id_sc_field_ligacoes' + iSeqRow).bind('blur', function() { sc_form_totais_agente_ligacoes_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_totais_agente_ligacoes_onfocus(this, iSeqRow) });
  $('#id_sc_field_doacoes' + iSeqRow).bind('blur', function() { sc_form_totais_agente_doacoes_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_totais_agente_doacoes_onfocus(this, iSeqRow) });
  $('#id_sc_field_ndoacoes' + iSeqRow).bind('blur', function() { sc_form_totais_agente_ndoacoes_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_totais_agente_ndoacoes_onfocus(this, iSeqRow) });
  $('#id_sc_field_outras' + iSeqRow).bind('blur', function() { sc_form_totais_agente_outras_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_totais_agente_outras_onfocus(this, iSeqRow) });
  $('#id_sc_field_tempo' + iSeqRow).bind('blur', function() { sc_form_totais_agente_tempo_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_totais_agente_tempo_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_totais_agente_user_onblur(oThis, iSeqRow) {
  do_ajax_form_totais_agente_mob_validate_user();
  scCssBlur(oThis);
}

function sc_form_totais_agente_user_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_totais_agente_ligacoes_onblur(oThis, iSeqRow) {
  do_ajax_form_totais_agente_mob_validate_ligacoes();
  scCssBlur(oThis);
}

function sc_form_totais_agente_ligacoes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_totais_agente_doacoes_onblur(oThis, iSeqRow) {
  do_ajax_form_totais_agente_mob_validate_doacoes();
  scCssBlur(oThis);
}

function sc_form_totais_agente_doacoes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_totais_agente_ndoacoes_onblur(oThis, iSeqRow) {
  do_ajax_form_totais_agente_mob_validate_ndoacoes();
  scCssBlur(oThis);
}

function sc_form_totais_agente_ndoacoes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_totais_agente_outras_onblur(oThis, iSeqRow) {
  do_ajax_form_totais_agente_mob_validate_outras();
  scCssBlur(oThis);
}

function sc_form_totais_agente_outras_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_totais_agente_tempo_onblur(oThis, iSeqRow) {
  do_ajax_form_totais_agente_mob_validate_tempo();
  scCssBlur(oThis);
}

function sc_form_totais_agente_tempo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("user", "", status);
	displayChange_field("ligacoes", "", status);
	displayChange_field("doacoes", "", status);
	displayChange_field("ndoacoes", "", status);
	displayChange_field("outras", "", status);
	displayChange_field("tempo", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_user(row, status);
	displayChange_field_ligacoes(row, status);
	displayChange_field_doacoes(row, status);
	displayChange_field_ndoacoes(row, status);
	displayChange_field_outras(row, status);
	displayChange_field_tempo(row, status);
}

function displayChange_field(field, row, status) {
	if ("user" == field) {
		displayChange_field_user(row, status);
	}
	if ("ligacoes" == field) {
		displayChange_field_ligacoes(row, status);
	}
	if ("doacoes" == field) {
		displayChange_field_doacoes(row, status);
	}
	if ("ndoacoes" == field) {
		displayChange_field_ndoacoes(row, status);
	}
	if ("outras" == field) {
		displayChange_field_outras(row, status);
	}
	if ("tempo" == field) {
		displayChange_field_tempo(row, status);
	}
}

function displayChange_field_user(row, status) {
}

function displayChange_field_ligacoes(row, status) {
}

function displayChange_field_doacoes(row, status) {
}

function displayChange_field_ndoacoes(row, status) {
}

function displayChange_field_outras(row, status) {
}

function displayChange_field_tempo(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_totais_agente_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(30);
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

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  if (typeof(scBtnGrpShowMobile) === typeof(function(){})) { return scBtnGrpShowMobile(sGroup); };
  $('#sc_btgp_btn_' + sGroup).addClass('selected');
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    scBtnGrpStatus[sGroup] = '';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  }).mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup, false);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup, bForce) {
  if (bForce || 'over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
    $('#sc_btgp_btn_' + sGroup).addClass('selected');
  }
}
