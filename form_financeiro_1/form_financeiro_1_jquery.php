
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
  scEventControl_data["operadormensal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valormensal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["operadoravulso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valoravulso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cobrador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dataemissao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["datavencimento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["obstemp" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["obs" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nomerecibo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipocobranca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mesmensal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["parceiro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["timestamp" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigocompanhia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["autorizado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["audioautorizacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ultimocontato" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["motivocancelamento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["agradecimento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["auditado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipodoacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["parcelas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigoparcelas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["servidoraudio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
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
  if (scEventControl_data["operadormensal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["operadormensal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valormensal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valormensal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["operadoravulso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["operadoravulso" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valoravulso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valoravulso" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cobrador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cobrador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dataemissao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dataemissao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["datavencimento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["datavencimento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["obstemp" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["obstemp" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["obs" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["obs" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nomerecibo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nomerecibo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipocobranca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipocobranca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mesmensal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mesmensal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parceiro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parceiro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["timestamp" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["timestamp" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigocompanhia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigocompanhia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["autorizado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["autorizado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["audioautorizacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["audioautorizacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ultimocontato" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ultimocontato" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["motivocancelamento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["motivocancelamento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["agradecimento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["agradecimento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["auditado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["auditado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipodoacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipodoacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parcelas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parcelas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigoparcelas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigoparcelas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["servidoraudio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["servidoraudio" + iSeqRow]["change"]) {
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
  $('#id_sc_field_codigoidentificador' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_codigoidentificador_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_financeiro_1_codigoidentificador_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerorecibo' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_numerorecibo_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_financeiro_1_numerorecibo_onfocus(this, iSeqRow) });
  $('#id_sc_field_numeroserie' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_numeroserie_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_financeiro_1_numeroserie_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigo' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_codigo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_financeiro_1_codigo_onfocus(this, iSeqRow) });
  $('#id_sc_field_operadormensal' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_operadormensal_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_financeiro_1_operadormensal_onfocus(this, iSeqRow) });
  $('#id_sc_field_valormensal' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_valormensal_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_financeiro_1_valormensal_onfocus(this, iSeqRow) });
  $('#id_sc_field_operadoravulso' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_operadoravulso_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_financeiro_1_operadoravulso_onfocus(this, iSeqRow) });
  $('#id_sc_field_valoravulso' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_valoravulso_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_financeiro_1_valoravulso_onfocus(this, iSeqRow) });
  $('#id_sc_field_cobrador' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_cobrador_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_financeiro_1_cobrador_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataemissao' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_dataemissao_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_financeiro_1_dataemissao_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataemissao_hora' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_dataemissao_hora_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_financeiro_1_dataemissao_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_datavencimento' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_datavencimento_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_financeiro_1_datavencimento_onfocus(this, iSeqRow) });
  $('#id_sc_field_datavencimento_hora' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_datavencimento_hora_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_financeiro_1_datavencimento_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_obstemp' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_obstemp_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_financeiro_1_obstemp_onfocus(this, iSeqRow) });
  $('#id_sc_field_status' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_status_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_financeiro_1_status_onfocus(this, iSeqRow) });
  $('#id_sc_field_obs' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_obs_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_financeiro_1_obs_onfocus(this, iSeqRow) });
  $('#id_sc_field_nomerecibo' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_nomerecibo_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_financeiro_1_nomerecibo_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipocobranca' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_tipocobranca_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_financeiro_1_tipocobranca_onfocus(this, iSeqRow) });
  $('#id_sc_field_mesmensal' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_mesmensal_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_financeiro_1_mesmensal_onfocus(this, iSeqRow) });
  $('#id_sc_field_usuario' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_usuario_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_financeiro_1_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_parceiro' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_parceiro_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_financeiro_1_parceiro_onfocus(this, iSeqRow) });
  $('#id_sc_field_timestamp' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_timestamp_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_financeiro_1_timestamp_onfocus(this, iSeqRow) });
  $('#id_sc_field_timestamp_hora' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_timestamp_hora_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_financeiro_1_timestamp_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigocompanhia' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_codigocompanhia_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_financeiro_1_codigocompanhia_onfocus(this, iSeqRow) });
  $('#id_sc_field_autorizado' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_autorizado_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_financeiro_1_autorizado_onfocus(this, iSeqRow) });
  $('#id_sc_field_audioautorizacao' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_audioautorizacao_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_financeiro_1_audioautorizacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_ultimocontato' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_ultimocontato_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_financeiro_1_ultimocontato_onfocus(this, iSeqRow) });
  $('#id_sc_field_ultimocontato_hora' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_ultimocontato_hora_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_financeiro_1_ultimocontato_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_motivocancelamento' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_motivocancelamento_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_financeiro_1_motivocancelamento_onfocus(this, iSeqRow) });
  $('#id_sc_field_agradecimento' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_agradecimento_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_financeiro_1_agradecimento_onfocus(this, iSeqRow) });
  $('#id_sc_field_auditado' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_auditado_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_financeiro_1_auditado_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipodoacao' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_tipodoacao_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_financeiro_1_tipodoacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_parcelas' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_parcelas_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_financeiro_1_parcelas_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigoparcelas' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_codigoparcelas_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_financeiro_1_codigoparcelas_onfocus(this, iSeqRow) });
  $('#id_sc_field_servidoraudio' + iSeqRow).bind('blur', function() { sc_form_financeiro_1_servidoraudio_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_financeiro_1_servidoraudio_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_financeiro_1_codigoidentificador_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_codigoidentificador();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_codigoidentificador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_numerorecibo_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_numerorecibo();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_numerorecibo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_numeroserie_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_numeroserie();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_numeroserie_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_codigo_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_codigo();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_codigo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_operadormensal_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_operadormensal();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_operadormensal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_valormensal_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_valormensal();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_valormensal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_operadoravulso_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_operadoravulso();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_operadoravulso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_valoravulso_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_valoravulso();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_valoravulso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_cobrador_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_cobrador();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_cobrador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_dataemissao_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_dataemissao();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_dataemissao_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_dataemissao();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_dataemissao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_dataemissao_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_datavencimento_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_datavencimento();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_datavencimento_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_datavencimento();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_datavencimento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_datavencimento_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_obstemp_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_obstemp();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_obstemp_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_status_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_status();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_obs_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_obs();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_obs_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_nomerecibo_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_nomerecibo();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_nomerecibo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_tipocobranca_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_tipocobranca();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_tipocobranca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_mesmensal_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_mesmensal();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_mesmensal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_usuario();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_parceiro_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_parceiro();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_parceiro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_timestamp_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_timestamp();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_timestamp_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_timestamp();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_timestamp_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_timestamp_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_codigocompanhia_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_codigocompanhia();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_codigocompanhia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_autorizado_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_autorizado();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_autorizado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_audioautorizacao_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_audioautorizacao();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_audioautorizacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_ultimocontato_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_ultimocontato();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_ultimocontato_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_ultimocontato();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_ultimocontato_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_ultimocontato_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_motivocancelamento_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_motivocancelamento();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_motivocancelamento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_agradecimento_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_agradecimento();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_agradecimento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_auditado_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_auditado();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_auditado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_tipodoacao_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_tipodoacao();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_tipodoacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_parcelas_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_parcelas();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_parcelas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_codigoparcelas_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_codigoparcelas();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_codigoparcelas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_financeiro_1_servidoraudio_onblur(oThis, iSeqRow) {
  do_ajax_form_financeiro_1_validate_servidoraudio();
  scCssBlur(oThis);
}

function sc_form_financeiro_1_servidoraudio_onfocus(oThis, iSeqRow) {
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
	displayChange_field("operadormensal", "", status);
	displayChange_field("valormensal", "", status);
	displayChange_field("operadoravulso", "", status);
	displayChange_field("valoravulso", "", status);
	displayChange_field("cobrador", "", status);
	displayChange_field("dataemissao", "", status);
	displayChange_field("datavencimento", "", status);
	displayChange_field("obstemp", "", status);
	displayChange_field("status", "", status);
	displayChange_field("obs", "", status);
	displayChange_field("nomerecibo", "", status);
	displayChange_field("tipocobranca", "", status);
	displayChange_field("mesmensal", "", status);
	displayChange_field("usuario", "", status);
	displayChange_field("parceiro", "", status);
	displayChange_field("timestamp", "", status);
	displayChange_field("codigocompanhia", "", status);
	displayChange_field("autorizado", "", status);
	displayChange_field("audioautorizacao", "", status);
	displayChange_field("ultimocontato", "", status);
	displayChange_field("motivocancelamento", "", status);
	displayChange_field("agradecimento", "", status);
	displayChange_field("auditado", "", status);
	displayChange_field("tipodoacao", "", status);
	displayChange_field("parcelas", "", status);
	displayChange_field("codigoparcelas", "", status);
	displayChange_field("servidoraudio", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_codigoidentificador(row, status);
	displayChange_field_numerorecibo(row, status);
	displayChange_field_numeroserie(row, status);
	displayChange_field_codigo(row, status);
	displayChange_field_operadormensal(row, status);
	displayChange_field_valormensal(row, status);
	displayChange_field_operadoravulso(row, status);
	displayChange_field_valoravulso(row, status);
	displayChange_field_cobrador(row, status);
	displayChange_field_dataemissao(row, status);
	displayChange_field_datavencimento(row, status);
	displayChange_field_obstemp(row, status);
	displayChange_field_status(row, status);
	displayChange_field_obs(row, status);
	displayChange_field_nomerecibo(row, status);
	displayChange_field_tipocobranca(row, status);
	displayChange_field_mesmensal(row, status);
	displayChange_field_usuario(row, status);
	displayChange_field_parceiro(row, status);
	displayChange_field_timestamp(row, status);
	displayChange_field_codigocompanhia(row, status);
	displayChange_field_autorizado(row, status);
	displayChange_field_audioautorizacao(row, status);
	displayChange_field_ultimocontato(row, status);
	displayChange_field_motivocancelamento(row, status);
	displayChange_field_agradecimento(row, status);
	displayChange_field_auditado(row, status);
	displayChange_field_tipodoacao(row, status);
	displayChange_field_parcelas(row, status);
	displayChange_field_codigoparcelas(row, status);
	displayChange_field_servidoraudio(row, status);
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
	if ("operadormensal" == field) {
		displayChange_field_operadormensal(row, status);
	}
	if ("valormensal" == field) {
		displayChange_field_valormensal(row, status);
	}
	if ("operadoravulso" == field) {
		displayChange_field_operadoravulso(row, status);
	}
	if ("valoravulso" == field) {
		displayChange_field_valoravulso(row, status);
	}
	if ("cobrador" == field) {
		displayChange_field_cobrador(row, status);
	}
	if ("dataemissao" == field) {
		displayChange_field_dataemissao(row, status);
	}
	if ("datavencimento" == field) {
		displayChange_field_datavencimento(row, status);
	}
	if ("obstemp" == field) {
		displayChange_field_obstemp(row, status);
	}
	if ("status" == field) {
		displayChange_field_status(row, status);
	}
	if ("obs" == field) {
		displayChange_field_obs(row, status);
	}
	if ("nomerecibo" == field) {
		displayChange_field_nomerecibo(row, status);
	}
	if ("tipocobranca" == field) {
		displayChange_field_tipocobranca(row, status);
	}
	if ("mesmensal" == field) {
		displayChange_field_mesmensal(row, status);
	}
	if ("usuario" == field) {
		displayChange_field_usuario(row, status);
	}
	if ("parceiro" == field) {
		displayChange_field_parceiro(row, status);
	}
	if ("timestamp" == field) {
		displayChange_field_timestamp(row, status);
	}
	if ("codigocompanhia" == field) {
		displayChange_field_codigocompanhia(row, status);
	}
	if ("autorizado" == field) {
		displayChange_field_autorizado(row, status);
	}
	if ("audioautorizacao" == field) {
		displayChange_field_audioautorizacao(row, status);
	}
	if ("ultimocontato" == field) {
		displayChange_field_ultimocontato(row, status);
	}
	if ("motivocancelamento" == field) {
		displayChange_field_motivocancelamento(row, status);
	}
	if ("agradecimento" == field) {
		displayChange_field_agradecimento(row, status);
	}
	if ("auditado" == field) {
		displayChange_field_auditado(row, status);
	}
	if ("tipodoacao" == field) {
		displayChange_field_tipodoacao(row, status);
	}
	if ("parcelas" == field) {
		displayChange_field_parcelas(row, status);
	}
	if ("codigoparcelas" == field) {
		displayChange_field_codigoparcelas(row, status);
	}
	if ("servidoraudio" == field) {
		displayChange_field_servidoraudio(row, status);
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

function displayChange_field_operadormensal(row, status) {
}

function displayChange_field_valormensal(row, status) {
}

function displayChange_field_operadoravulso(row, status) {
}

function displayChange_field_valoravulso(row, status) {
}

function displayChange_field_cobrador(row, status) {
}

function displayChange_field_dataemissao(row, status) {
}

function displayChange_field_datavencimento(row, status) {
}

function displayChange_field_obstemp(row, status) {
}

function displayChange_field_status(row, status) {
}

function displayChange_field_obs(row, status) {
}

function displayChange_field_nomerecibo(row, status) {
}

function displayChange_field_tipocobranca(row, status) {
}

function displayChange_field_mesmensal(row, status) {
}

function displayChange_field_usuario(row, status) {
}

function displayChange_field_parceiro(row, status) {
}

function displayChange_field_timestamp(row, status) {
}

function displayChange_field_codigocompanhia(row, status) {
}

function displayChange_field_autorizado(row, status) {
}

function displayChange_field_audioautorizacao(row, status) {
}

function displayChange_field_ultimocontato(row, status) {
}

function displayChange_field_motivocancelamento(row, status) {
}

function displayChange_field_agradecimento(row, status) {
}

function displayChange_field_auditado(row, status) {
}

function displayChange_field_tipodoacao(row, status) {
}

function displayChange_field_parcelas(row, status) {
}

function displayChange_field_codigoparcelas(row, status) {
}

function displayChange_field_servidoraudio(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_financeiro_1_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(25);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dataemissao" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dataemissao" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['dataemissao']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dataemissao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_financeiro_1_validate_dataemissao(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dataemissao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_datavencimento" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_datavencimento" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['datavencimento']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['datavencimento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_financeiro_1_validate_datavencimento(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['datavencimento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_timestamp" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_timestamp" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['timestamp']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['timestamp']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_financeiro_1_validate_timestamp(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['timestamp']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_ultimocontato" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_ultimocontato" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['ultimocontato']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['ultimocontato']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_financeiro_1_validate_ultimocontato(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['ultimocontato']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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

