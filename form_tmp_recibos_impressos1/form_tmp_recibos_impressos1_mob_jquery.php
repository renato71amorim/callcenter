
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
  scEventControl_data["codigoidentificador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numerorecibo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numeroserie" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nomerecibo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emissao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["vencimento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["situacao_atual" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["situacao_ult_dia_mes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["referencia_emissao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["referencia_finalizado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mesmensal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["setores" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mesextenso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["codigoidentificador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigoidentificador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numerorecibo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numerorecibo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numeroserie" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numeroserie" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nomerecibo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nomerecibo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emissao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emissao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["vencimento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["vencimento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["situacao_atual" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["situacao_atual" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["situacao_ult_dia_mes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["situacao_ult_dia_mes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["referencia_emissao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["referencia_emissao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["referencia_finalizado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["referencia_finalizado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mesmensal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mesmensal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["setores" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["setores" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mesextenso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mesextenso" + iSeqRow]["change"]) {
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
  $('#id_sc_field_codigoidentificador' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_codigoidentificador_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_tmp_recibos_impressos1_codigoidentificador_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerorecibo' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_numerorecibo_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tmp_recibos_impressos1_numerorecibo_onfocus(this, iSeqRow) });
  $('#id_sc_field_numeroserie' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_numeroserie_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tmp_recibos_impressos1_numeroserie_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigo' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_codigo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tmp_recibos_impressos1_codigo_onfocus(this, iSeqRow) });
  $('#id_sc_field_nomerecibo' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_nomerecibo_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tmp_recibos_impressos1_nomerecibo_onfocus(this, iSeqRow) });
  $('#id_sc_field_emissao' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_emissao_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tmp_recibos_impressos1_emissao_onfocus(this, iSeqRow) });
  $('#id_sc_field_emissao_hora' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_emissao_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tmp_recibos_impressos1_emissao_onfocus(this, iSeqRow) });
  $('#id_sc_field_vencimento' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_vencimento_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tmp_recibos_impressos1_vencimento_onfocus(this, iSeqRow) });
  $('#id_sc_field_vencimento_hora' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_vencimento_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_tmp_recibos_impressos1_vencimento_onfocus(this, iSeqRow) });
  $('#id_sc_field_valor' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_valor_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tmp_recibos_impressos1_valor_onfocus(this, iSeqRow) });
  $('#id_sc_field_situacao_atual' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_situacao_atual_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_tmp_recibos_impressos1_situacao_atual_onfocus(this, iSeqRow) });
  $('#id_sc_field_situacao_ult_dia_mes' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_situacao_ult_dia_mes_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_tmp_recibos_impressos1_situacao_ult_dia_mes_onfocus(this, iSeqRow) });
  $('#id_sc_field_referencia_emissao' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_referencia_emissao_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_tmp_recibos_impressos1_referencia_emissao_onfocus(this, iSeqRow) });
  $('#id_sc_field_referencia_finalizado' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_referencia_finalizado_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_tmp_recibos_impressos1_referencia_finalizado_onfocus(this, iSeqRow) });
  $('#id_sc_field_mesmensal' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_mesmensal_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tmp_recibos_impressos1_mesmensal_onfocus(this, iSeqRow) });
  $('#id_sc_field_setores' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_setores_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tmp_recibos_impressos1_setores_onfocus(this, iSeqRow) });
  $('#id_sc_field_mesextenso' + iSeqRow).bind('blur', function() { sc_form_tmp_recibos_impressos1_mesextenso_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tmp_recibos_impressos1_mesextenso_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tmp_recibos_impressos1_codigoidentificador_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_codigoidentificador();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_codigoidentificador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_numerorecibo_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_numerorecibo();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_numerorecibo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_numeroserie_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_numeroserie();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_numeroserie_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_codigo_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_codigo();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_codigo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_nomerecibo_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_nomerecibo();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_nomerecibo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_emissao_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_emissao();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_emissao_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_emissao();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_emissao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_emissao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_vencimento_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_vencimento();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_vencimento_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_vencimento();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_vencimento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_vencimento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_valor_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_valor();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_valor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_situacao_atual_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_situacao_atual();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_situacao_atual_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_situacao_ult_dia_mes_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_situacao_ult_dia_mes();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_situacao_ult_dia_mes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_referencia_emissao_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_referencia_emissao();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_referencia_emissao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_referencia_finalizado_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_referencia_finalizado();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_referencia_finalizado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_mesmensal_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_mesmensal();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_mesmensal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_setores_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_setores();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_setores_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tmp_recibos_impressos1_mesextenso_onblur(oThis, iSeqRow) {
  do_ajax_form_tmp_recibos_impressos1_mob_validate_mesextenso();
  scCssBlur(oThis);
}

function sc_form_tmp_recibos_impressos1_mesextenso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("codigoidentificador", "", status);
	displayChange_field("numerorecibo", "", status);
	displayChange_field("numeroserie", "", status);
	displayChange_field("codigo", "", status);
	displayChange_field("nomerecibo", "", status);
	displayChange_field("emissao", "", status);
	displayChange_field("vencimento", "", status);
	displayChange_field("valor", "", status);
	displayChange_field("situacao_atual", "", status);
	displayChange_field("situacao_ult_dia_mes", "", status);
	displayChange_field("referencia_emissao", "", status);
	displayChange_field("referencia_finalizado", "", status);
	displayChange_field("mesmensal", "", status);
	displayChange_field("setores", "", status);
	displayChange_field("mesextenso", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_codigoidentificador(row, status);
	displayChange_field_numerorecibo(row, status);
	displayChange_field_numeroserie(row, status);
	displayChange_field_codigo(row, status);
	displayChange_field_nomerecibo(row, status);
	displayChange_field_emissao(row, status);
	displayChange_field_vencimento(row, status);
	displayChange_field_valor(row, status);
	displayChange_field_situacao_atual(row, status);
	displayChange_field_situacao_ult_dia_mes(row, status);
	displayChange_field_referencia_emissao(row, status);
	displayChange_field_referencia_finalizado(row, status);
	displayChange_field_mesmensal(row, status);
	displayChange_field_setores(row, status);
	displayChange_field_mesextenso(row, status);
}

function displayChange_field(field, row, status) {
	if ("codigoidentificador" == field) {
		displayChange_field_codigoidentificador(row, status);
	}
	if ("numerorecibo" == field) {
		displayChange_field_numerorecibo(row, status);
	}
	if ("numeroserie" == field) {
		displayChange_field_numeroserie(row, status);
	}
	if ("codigo" == field) {
		displayChange_field_codigo(row, status);
	}
	if ("nomerecibo" == field) {
		displayChange_field_nomerecibo(row, status);
	}
	if ("emissao" == field) {
		displayChange_field_emissao(row, status);
	}
	if ("vencimento" == field) {
		displayChange_field_vencimento(row, status);
	}
	if ("valor" == field) {
		displayChange_field_valor(row, status);
	}
	if ("situacao_atual" == field) {
		displayChange_field_situacao_atual(row, status);
	}
	if ("situacao_ult_dia_mes" == field) {
		displayChange_field_situacao_ult_dia_mes(row, status);
	}
	if ("referencia_emissao" == field) {
		displayChange_field_referencia_emissao(row, status);
	}
	if ("referencia_finalizado" == field) {
		displayChange_field_referencia_finalizado(row, status);
	}
	if ("mesmensal" == field) {
		displayChange_field_mesmensal(row, status);
	}
	if ("setores" == field) {
		displayChange_field_setores(row, status);
	}
	if ("mesextenso" == field) {
		displayChange_field_mesextenso(row, status);
	}
}

function displayChange_field_codigoidentificador(row, status) {
}

function displayChange_field_numerorecibo(row, status) {
}

function displayChange_field_numeroserie(row, status) {
}

function displayChange_field_codigo(row, status) {
}

function displayChange_field_nomerecibo(row, status) {
}

function displayChange_field_emissao(row, status) {
}

function displayChange_field_vencimento(row, status) {
}

function displayChange_field_valor(row, status) {
}

function displayChange_field_situacao_atual(row, status) {
}

function displayChange_field_situacao_ult_dia_mes(row, status) {
}

function displayChange_field_referencia_emissao(row, status) {
}

function displayChange_field_referencia_finalizado(row, status) {
}

function displayChange_field_mesmensal(row, status) {
}

function displayChange_field_setores(row, status) {
}

function displayChange_field_mesextenso(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_tmp_recibos_impressos1_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(39);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_emissao" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_emissao" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['emissao']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['emissao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_tmp_recibos_impressos1_mob_validate_emissao(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['emissao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
  $("#id_sc_field_vencimento" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_vencimento" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['vencimento']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['vencimento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_tmp_recibos_impressos1_mob_validate_vencimento(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['vencimento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
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
