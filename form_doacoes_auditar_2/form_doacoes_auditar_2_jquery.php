
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
  scEventControl_data["codigo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nome" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sexo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ddd" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["operador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigorua" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["logadouro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["complemento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pontodereferencia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["localidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["setor_rua" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dataemissao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["datavencimento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["timestamp" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["obs" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mesmensal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lead_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["codigoidentificador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigoidentificador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ddd" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ddd" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fone1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fone1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fone2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fone2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["operador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["operador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigorua" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigorua" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["logadouro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["logadouro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pontodereferencia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pontodereferencia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["localidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["localidade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["setor_rua" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["setor_rua" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["change"]) {
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
  if (scEventControl_data["timestamp" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["timestamp" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["obs" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["obs" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mesmensal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mesmensal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lead_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lead_id" + iSeqRow]["change"]) {
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
  $('#id_sc_field_codigoidentificador' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_codigoidentificador_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_doacoes_auditar_2_codigoidentificador_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigo' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_codigo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_doacoes_auditar_2_codigo_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_nome_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_doacoes_auditar_2_nome_onfocus(this, iSeqRow) });
  $('#id_sc_field_sexo' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_sexo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_doacoes_auditar_2_sexo_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_tipo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_doacoes_auditar_2_tipo_onfocus(this, iSeqRow) });
  $('#id_sc_field_ddd' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_ddd_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_doacoes_auditar_2_ddd_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone1' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_fone1_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_doacoes_auditar_2_fone1_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone2' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_fone2_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_doacoes_auditar_2_fone2_onfocus(this, iSeqRow) });
  $('#id_sc_field_operador' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_operador_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_doacoes_auditar_2_operador_onfocus(this, iSeqRow) });
  $('#id_sc_field_usuario' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_usuario_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_doacoes_auditar_2_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigorua' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_codigorua_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_doacoes_auditar_2_codigorua_onfocus(this, iSeqRow) });
  $('#id_sc_field_logadouro' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_logadouro_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_doacoes_auditar_2_logadouro_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_numero_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_doacoes_auditar_2_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_complemento' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_complemento_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_doacoes_auditar_2_complemento_onfocus(this, iSeqRow) });
  $('#id_sc_field_pontodereferencia' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_pontodereferencia_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_doacoes_auditar_2_pontodereferencia_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_bairro_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_doacoes_auditar_2_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_localidade' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_localidade_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_doacoes_auditar_2_localidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_setor_rua' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_setor_rua_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_doacoes_auditar_2_setor_rua_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_cep_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_doacoes_auditar_2_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataemissao' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_dataemissao_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_doacoes_auditar_2_dataemissao_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataemissao_hora' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_dataemissao_hora_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_doacoes_auditar_2_dataemissao_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_datavencimento' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_datavencimento_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_doacoes_auditar_2_datavencimento_onfocus(this, iSeqRow) });
  $('#id_sc_field_datavencimento_hora' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_datavencimento_hora_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_doacoes_auditar_2_datavencimento_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_timestamp' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_timestamp_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_doacoes_auditar_2_timestamp_onfocus(this, iSeqRow) });
  $('#id_sc_field_timestamp_hora' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_timestamp_hora_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_doacoes_auditar_2_timestamp_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_valor' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_valor_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_doacoes_auditar_2_valor_onfocus(this, iSeqRow) });
  $('#id_sc_field_obs' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_obs_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_doacoes_auditar_2_obs_onfocus(this, iSeqRow) });
  $('#id_sc_field_mesmensal' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_mesmensal_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_doacoes_auditar_2_mesmensal_onfocus(this, iSeqRow) });
  $('#id_sc_field_status' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_status_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_doacoes_auditar_2_status_onfocus(this, iSeqRow) });
  $('#id_sc_field_lead_id' + iSeqRow).bind('blur', function() { sc_form_doacoes_auditar_2_lead_id_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_doacoes_auditar_2_lead_id_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_doacoes_auditar_2_codigoidentificador_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_codigoidentificador();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_codigoidentificador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_codigo_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_codigo();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_codigo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_nome_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_nome();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_nome_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_sexo_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_sexo();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_sexo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_tipo_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_tipo();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_tipo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_ddd_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_ddd();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_ddd_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_fone1_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_fone1();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_fone1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_fone2_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_fone2();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_fone2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_operador_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_operador();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_operador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_usuario();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_codigorua_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_codigorua();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_codigorua_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_logadouro_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_logadouro();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_logadouro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_numero();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_complemento_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_complemento();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_complemento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_pontodereferencia_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_pontodereferencia();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_pontodereferencia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_localidade_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_localidade();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_localidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_setor_rua_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_setor_rua();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_setor_rua_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_cep();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_dataemissao_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_dataemissao();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_dataemissao_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_dataemissao();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_dataemissao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_dataemissao_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_datavencimento_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_datavencimento();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_datavencimento_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_datavencimento();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_datavencimento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_datavencimento_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_timestamp_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_timestamp();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_timestamp_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_timestamp();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_timestamp_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_timestamp_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_valor_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_valor();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_valor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_obs_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_obs();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_obs_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_mesmensal_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_mesmensal();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_mesmensal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_status_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_status();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_doacoes_auditar_2_lead_id_onblur(oThis, iSeqRow) {
  do_ajax_form_doacoes_auditar_2_validate_lead_id();
  scCssBlur(oThis);
}

function sc_form_doacoes_auditar_2_lead_id_onfocus(oThis, iSeqRow) {
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
	displayChange_field("codigo", "", status);
	displayChange_field("nome", "", status);
	displayChange_field("sexo", "", status);
	displayChange_field("tipo", "", status);
	displayChange_field("ddd", "", status);
	displayChange_field("fone1", "", status);
	displayChange_field("fone2", "", status);
	displayChange_field("operador", "", status);
	displayChange_field("usuario", "", status);
	displayChange_field("codigorua", "", status);
	displayChange_field("logadouro", "", status);
	displayChange_field("numero", "", status);
	displayChange_field("complemento", "", status);
	displayChange_field("pontodereferencia", "", status);
	displayChange_field("bairro", "", status);
	displayChange_field("localidade", "", status);
	displayChange_field("setor_rua", "", status);
	displayChange_field("cep", "", status);
	displayChange_field("dataemissao", "", status);
	displayChange_field("datavencimento", "", status);
	displayChange_field("timestamp", "", status);
	displayChange_field("valor", "", status);
	displayChange_field("obs", "", status);
	displayChange_field("mesmensal", "", status);
	displayChange_field("status", "", status);
	displayChange_field("lead_id", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_codigoidentificador(row, status);
	displayChange_field_codigo(row, status);
	displayChange_field_nome(row, status);
	displayChange_field_sexo(row, status);
	displayChange_field_tipo(row, status);
	displayChange_field_ddd(row, status);
	displayChange_field_fone1(row, status);
	displayChange_field_fone2(row, status);
	displayChange_field_operador(row, status);
	displayChange_field_usuario(row, status);
	displayChange_field_codigorua(row, status);
	displayChange_field_logadouro(row, status);
	displayChange_field_numero(row, status);
	displayChange_field_complemento(row, status);
	displayChange_field_pontodereferencia(row, status);
	displayChange_field_bairro(row, status);
	displayChange_field_localidade(row, status);
	displayChange_field_setor_rua(row, status);
	displayChange_field_cep(row, status);
	displayChange_field_dataemissao(row, status);
	displayChange_field_datavencimento(row, status);
	displayChange_field_timestamp(row, status);
	displayChange_field_valor(row, status);
	displayChange_field_obs(row, status);
	displayChange_field_mesmensal(row, status);
	displayChange_field_status(row, status);
	displayChange_field_lead_id(row, status);
}

function displayChange_field(field, row, status) {
	if ("codigoidentificador" == field) {
		displayChange_field_codigoidentificador(row, status);
	}
	if ("codigo" == field) {
		displayChange_field_codigo(row, status);
	}
	if ("nome" == field) {
		displayChange_field_nome(row, status);
	}
	if ("sexo" == field) {
		displayChange_field_sexo(row, status);
	}
	if ("tipo" == field) {
		displayChange_field_tipo(row, status);
	}
	if ("ddd" == field) {
		displayChange_field_ddd(row, status);
	}
	if ("fone1" == field) {
		displayChange_field_fone1(row, status);
	}
	if ("fone2" == field) {
		displayChange_field_fone2(row, status);
	}
	if ("operador" == field) {
		displayChange_field_operador(row, status);
	}
	if ("usuario" == field) {
		displayChange_field_usuario(row, status);
	}
	if ("codigorua" == field) {
		displayChange_field_codigorua(row, status);
	}
	if ("logadouro" == field) {
		displayChange_field_logadouro(row, status);
	}
	if ("numero" == field) {
		displayChange_field_numero(row, status);
	}
	if ("complemento" == field) {
		displayChange_field_complemento(row, status);
	}
	if ("pontodereferencia" == field) {
		displayChange_field_pontodereferencia(row, status);
	}
	if ("bairro" == field) {
		displayChange_field_bairro(row, status);
	}
	if ("localidade" == field) {
		displayChange_field_localidade(row, status);
	}
	if ("setor_rua" == field) {
		displayChange_field_setor_rua(row, status);
	}
	if ("cep" == field) {
		displayChange_field_cep(row, status);
	}
	if ("dataemissao" == field) {
		displayChange_field_dataemissao(row, status);
	}
	if ("datavencimento" == field) {
		displayChange_field_datavencimento(row, status);
	}
	if ("timestamp" == field) {
		displayChange_field_timestamp(row, status);
	}
	if ("valor" == field) {
		displayChange_field_valor(row, status);
	}
	if ("obs" == field) {
		displayChange_field_obs(row, status);
	}
	if ("mesmensal" == field) {
		displayChange_field_mesmensal(row, status);
	}
	if ("status" == field) {
		displayChange_field_status(row, status);
	}
	if ("lead_id" == field) {
		displayChange_field_lead_id(row, status);
	}
}

function displayChange_field_codigoidentificador(row, status) {
}

function displayChange_field_codigo(row, status) {
}

function displayChange_field_nome(row, status) {
}

function displayChange_field_sexo(row, status) {
}

function displayChange_field_tipo(row, status) {
}

function displayChange_field_ddd(row, status) {
}

function displayChange_field_fone1(row, status) {
}

function displayChange_field_fone2(row, status) {
}

function displayChange_field_operador(row, status) {
}

function displayChange_field_usuario(row, status) {
}

function displayChange_field_codigorua(row, status) {
}

function displayChange_field_logadouro(row, status) {
}

function displayChange_field_numero(row, status) {
}

function displayChange_field_complemento(row, status) {
}

function displayChange_field_pontodereferencia(row, status) {
}

function displayChange_field_bairro(row, status) {
}

function displayChange_field_localidade(row, status) {
}

function displayChange_field_setor_rua(row, status) {
}

function displayChange_field_cep(row, status) {
}

function displayChange_field_dataemissao(row, status) {
}

function displayChange_field_datavencimento(row, status) {
}

function displayChange_field_timestamp(row, status) {
}

function displayChange_field_valor(row, status) {
}

function displayChange_field_obs(row, status) {
}

function displayChange_field_mesmensal(row, status) {
}

function displayChange_field_status(row, status) {
}

function displayChange_field_lead_id(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_doacoes_auditar_2_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(30);
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
      do_ajax_form_doacoes_auditar_2_validate_dataemissao(iSeqRow);
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
      do_ajax_form_doacoes_auditar_2_validate_datavencimento(iSeqRow);
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
      do_ajax_form_doacoes_auditar_2_validate_timestamp(iSeqRow);
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
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

