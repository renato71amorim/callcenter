
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
  scEventControl_data["nomerua" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["uf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipologradouro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ok" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["setores" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["codigorua" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigorua" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nomerua" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nomerua" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cidade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["uf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["uf" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipologradouro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipologradouro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ok" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ok" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["setores" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["setores" + iSeqRow]["change"]) {
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
  $('#id_sc_field_codigorua' + iSeqRow).bind('blur', function() { sc_form_ruas_1_codigorua_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ruas_1_codigorua_onfocus(this, iSeqRow) });
  $('#id_sc_field_nomerua' + iSeqRow).bind('blur', function() { sc_form_ruas_1_nomerua_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_ruas_1_nomerua_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_ruas_1_bairro_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ruas_1_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_cidade' + iSeqRow).bind('blur', function() { sc_form_ruas_1_cidade_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ruas_1_cidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_uf' + iSeqRow).bind('blur', function() { sc_form_ruas_1_uf_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_ruas_1_uf_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_ruas_1_cep_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_ruas_1_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipologradouro' + iSeqRow).bind('blur', function() { sc_form_ruas_1_tipologradouro_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_ruas_1_tipologradouro_onfocus(this, iSeqRow) });
  $('#id_sc_field_ok' + iSeqRow).bind('blur', function() { sc_form_ruas_1_ok_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_ruas_1_ok_onfocus(this, iSeqRow) });
  $('#id_sc_field_setores' + iSeqRow).bind('blur', function() { sc_form_ruas_1_setores_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_ruas_1_setores_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_ruas_1_codigorua_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_codigorua();
  scCssBlur(oThis);
}

function sc_form_ruas_1_codigorua_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ruas_1_nomerua_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_nomerua();
  scCssBlur(oThis);
}

function sc_form_ruas_1_nomerua_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ruas_1_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_ruas_1_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ruas_1_cidade_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_cidade();
  scCssBlur(oThis);
}

function sc_form_ruas_1_cidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ruas_1_uf_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_uf();
  scCssBlur(oThis);
}

function sc_form_ruas_1_uf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ruas_1_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_cep();
  scCssBlur(oThis);
}

function sc_form_ruas_1_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ruas_1_tipologradouro_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_tipologradouro();
  scCssBlur(oThis);
}

function sc_form_ruas_1_tipologradouro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ruas_1_ok_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_ok();
  scCssBlur(oThis);
}

function sc_form_ruas_1_ok_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ruas_1_setores_onblur(oThis, iSeqRow) {
  do_ajax_form_ruas_1_mob_validate_setores();
  scCssBlur(oThis);
}

function sc_form_ruas_1_setores_onfocus(oThis, iSeqRow) {
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
	displayChange_field("nomerua", "", status);
	displayChange_field("bairro", "", status);
	displayChange_field("cidade", "", status);
	displayChange_field("uf", "", status);
	displayChange_field("cep", "", status);
	displayChange_field("tipologradouro", "", status);
	displayChange_field("ok", "", status);
	displayChange_field("setores", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_codigorua(row, status);
	displayChange_field_nomerua(row, status);
	displayChange_field_bairro(row, status);
	displayChange_field_cidade(row, status);
	displayChange_field_uf(row, status);
	displayChange_field_cep(row, status);
	displayChange_field_tipologradouro(row, status);
	displayChange_field_ok(row, status);
	displayChange_field_setores(row, status);
}

function displayChange_field(field, row, status) {
	if ("codigorua" == field) {
		displayChange_field_codigorua(row, status);
	}
	if ("nomerua" == field) {
		displayChange_field_nomerua(row, status);
	}
	if ("bairro" == field) {
		displayChange_field_bairro(row, status);
	}
	if ("cidade" == field) {
		displayChange_field_cidade(row, status);
	}
	if ("uf" == field) {
		displayChange_field_uf(row, status);
	}
	if ("cep" == field) {
		displayChange_field_cep(row, status);
	}
	if ("tipologradouro" == field) {
		displayChange_field_tipologradouro(row, status);
	}
	if ("ok" == field) {
		displayChange_field_ok(row, status);
	}
	if ("setores" == field) {
		displayChange_field_setores(row, status);
	}
}

function displayChange_field_codigorua(row, status) {
}

function displayChange_field_nomerua(row, status) {
}

function displayChange_field_bairro(row, status) {
}

function displayChange_field_cidade(row, status) {
}

function displayChange_field_uf(row, status) {
}

function displayChange_field_cep(row, status) {
}

function displayChange_field_tipologradouro(row, status) {
}

function displayChange_field_ok(row, status) {
}

function displayChange_field_setores(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_ruas_1_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(23);
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
