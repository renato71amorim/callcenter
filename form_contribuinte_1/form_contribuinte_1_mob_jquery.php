
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
  scEventControl_data["codigo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nome" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["doador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigorua" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["complemento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["setor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dataaniv" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["datalistagem" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sexo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone4" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ddd" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["statusc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cpf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["operador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["classificacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipocobranca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idclientecompanhia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dgidclientecompanhia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idclientenosso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigocompanhia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["produtoincluido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["statusinclusaoproduto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["parceiro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["permiteemail" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ultimoaudiocampanha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["datainclusaoproduto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["reajustedata" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["qtdinvalido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["data_higienizacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["status_higienizacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["higienizado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["categoria_requisicao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ligou" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
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
  if (scEventControl_data["doador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["doador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigorua" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigorua" + iSeqRow]["change"]) {
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
  if (scEventControl_data["setor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["setor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dataaniv" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dataaniv" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["datalistagem" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["datalistagem" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["change"]) {
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
  if (scEventControl_data["fone3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fone3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fone4" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fone4" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ddd" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ddd" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["statusc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["statusc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cpf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cpf" + iSeqRow]["change"]) {
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
  if (scEventControl_data["classificacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["classificacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipocobranca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipocobranca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idclientecompanhia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idclientecompanhia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dgidclientecompanhia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dgidclientecompanhia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idclientenosso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idclientenosso" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigocompanhia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigocompanhia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["produtoincluido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["produtoincluido" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["statusinclusaoproduto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["statusinclusaoproduto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parceiro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parceiro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["permiteemail" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["permiteemail" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ultimoaudiocampanha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ultimoaudiocampanha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["datainclusaoproduto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["datainclusaoproduto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["reajustedata" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["reajustedata" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qtdinvalido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qtdinvalido" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["data_higienizacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["data_higienizacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["status_higienizacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["status_higienizacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["higienizado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["higienizado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["categoria_requisicao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["categoria_requisicao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ligou" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ligou" + iSeqRow]["change"]) {
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
  $('#id_sc_field_codigo' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_codigo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_contribuinte_1_codigo_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_nome_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_contribuinte_1_nome_onfocus(this, iSeqRow) });
  $('#id_sc_field_doador' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_doador_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_contribuinte_1_doador_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigorua' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_codigorua_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_contribuinte_1_codigorua_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_numero_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_contribuinte_1_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_complemento' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_complemento_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_contribuinte_1_complemento_onfocus(this, iSeqRow) });
  $('#id_sc_field_setor' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_setor_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_contribuinte_1_setor_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_tipo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_contribuinte_1_tipo_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataaniv' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_dataaniv_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_contribuinte_1_dataaniv_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataaniv_hora' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_dataaniv_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_contribuinte_1_dataaniv_onfocus(this, iSeqRow) });
  $('#id_sc_field_datalistagem' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_datalistagem_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_contribuinte_1_datalistagem_onfocus(this, iSeqRow) });
  $('#id_sc_field_datalistagem_hora' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_datalistagem_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_contribuinte_1_datalistagem_onfocus(this, iSeqRow) });
  $('#id_sc_field_sexo' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_sexo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_contribuinte_1_sexo_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone1' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_fone1_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_contribuinte_1_fone1_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone2' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_fone2_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_contribuinte_1_fone2_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone3' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_fone3_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_contribuinte_1_fone3_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone4' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_fone4_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_contribuinte_1_fone4_onfocus(this, iSeqRow) });
  $('#id_sc_field_ddd' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_ddd_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_contribuinte_1_ddd_onfocus(this, iSeqRow) });
  $('#id_sc_field_statusc' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_statusc_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_contribuinte_1_statusc_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpf' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_cpf_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_contribuinte_1_cpf_onfocus(this, iSeqRow) });
  $('#id_sc_field_operador' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_operador_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_contribuinte_1_operador_onfocus(this, iSeqRow) });
  $('#id_sc_field_usuario' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_usuario_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_contribuinte_1_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_classificacao' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_classificacao_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_contribuinte_1_classificacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipocobranca' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_tipocobranca_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_contribuinte_1_tipocobranca_onfocus(this, iSeqRow) });
  $('#id_sc_field_idclientecompanhia' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_idclientecompanhia_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_contribuinte_1_idclientecompanhia_onfocus(this, iSeqRow) });
  $('#id_sc_field_dgidclientecompanhia' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_dgidclientecompanhia_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_contribuinte_1_dgidclientecompanhia_onfocus(this, iSeqRow) });
  $('#id_sc_field_idclientenosso' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_idclientenosso_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_contribuinte_1_idclientenosso_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigocompanhia' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_codigocompanhia_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_contribuinte_1_codigocompanhia_onfocus(this, iSeqRow) });
  $('#id_sc_field_produtoincluido' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_produtoincluido_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_contribuinte_1_produtoincluido_onfocus(this, iSeqRow) });
  $('#id_sc_field_statusinclusaoproduto' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_statusinclusaoproduto_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_contribuinte_1_statusinclusaoproduto_onfocus(this, iSeqRow) });
  $('#id_sc_field_parceiro' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_parceiro_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_contribuinte_1_parceiro_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_email_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_contribuinte_1_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_permiteemail' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_permiteemail_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_contribuinte_1_permiteemail_onfocus(this, iSeqRow) });
  $('#id_sc_field_ultimoaudiocampanha' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_ultimoaudiocampanha_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_contribuinte_1_ultimoaudiocampanha_onfocus(this, iSeqRow) });
  $('#id_sc_field_datainclusaoproduto' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_datainclusaoproduto_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_contribuinte_1_datainclusaoproduto_onfocus(this, iSeqRow) });
  $('#id_sc_field_datainclusaoproduto_hora' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_datainclusaoproduto_onblur(this, iSeqRow) })
                                                      .bind('focus', function() { sc_form_contribuinte_1_datainclusaoproduto_onfocus(this, iSeqRow) });
  $('#id_sc_field_reajustedata' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_reajustedata_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_contribuinte_1_reajustedata_onfocus(this, iSeqRow) });
  $('#id_sc_field_reajustedata_hora' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_reajustedata_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_contribuinte_1_reajustedata_onfocus(this, iSeqRow) });
  $('#id_sc_field_qtdinvalido' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_qtdinvalido_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_contribuinte_1_qtdinvalido_onfocus(this, iSeqRow) });
  $('#id_sc_field_data_higienizacao' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_data_higienizacao_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_contribuinte_1_data_higienizacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_data_higienizacao_hora' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_data_higienizacao_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_contribuinte_1_data_higienizacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_status_higienizacao' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_status_higienizacao_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_contribuinte_1_status_higienizacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_higienizado' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_higienizado_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_contribuinte_1_higienizado_onfocus(this, iSeqRow) });
  $('#id_sc_field_categoria_requisicao' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_categoria_requisicao_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_contribuinte_1_categoria_requisicao_onfocus(this, iSeqRow) });
  $('#id_sc_field_ligou' + iSeqRow).bind('blur', function() { sc_form_contribuinte_1_ligou_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_contribuinte_1_ligou_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_contribuinte_1_codigo_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_codigo();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_codigo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_nome_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_nome();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_nome_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_doador_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_doador();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_doador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_codigorua_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_codigorua();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_codigorua_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_numero();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_complemento_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_complemento();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_complemento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_setor_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_setor();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_setor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_tipo_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_tipo();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_tipo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_dataaniv_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_dataaniv();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_dataaniv_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_dataaniv();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_dataaniv_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_dataaniv_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_datalistagem_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_datalistagem();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_datalistagem_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_datalistagem();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_datalistagem_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_datalistagem_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_sexo_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_sexo();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_sexo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_fone1_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_fone1();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_fone1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_fone2_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_fone2();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_fone2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_fone3_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_fone3();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_fone3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_fone4_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_fone4();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_fone4_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_ddd_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_ddd();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_ddd_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_statusc_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_statusc();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_statusc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_cpf_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_cpf();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_cpf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_operador_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_operador();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_operador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_usuario();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_classificacao_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_classificacao();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_classificacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_tipocobranca_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_tipocobranca();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_tipocobranca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_idclientecompanhia_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_idclientecompanhia();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_idclientecompanhia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_dgidclientecompanhia_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_dgidclientecompanhia();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_dgidclientecompanhia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_idclientenosso_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_idclientenosso();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_idclientenosso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_codigocompanhia_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_codigocompanhia();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_codigocompanhia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_produtoincluido_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_produtoincluido();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_produtoincluido_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_statusinclusaoproduto_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_statusinclusaoproduto();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_statusinclusaoproduto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_parceiro_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_parceiro();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_parceiro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_email_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_email();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_permiteemail_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_permiteemail();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_permiteemail_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_ultimoaudiocampanha_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_ultimoaudiocampanha();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_ultimoaudiocampanha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_datainclusaoproduto_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_datainclusaoproduto();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_datainclusaoproduto_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_datainclusaoproduto();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_datainclusaoproduto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_datainclusaoproduto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_reajustedata_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_reajustedata();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_reajustedata_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_reajustedata();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_reajustedata_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_reajustedata_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_qtdinvalido_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_qtdinvalido();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_qtdinvalido_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_data_higienizacao_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_data_higienizacao();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_data_higienizacao_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_data_higienizacao();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_data_higienizacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_data_higienizacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_status_higienizacao_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_status_higienizacao();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_status_higienizacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_higienizado_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_higienizado();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_higienizado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_categoria_requisicao_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_categoria_requisicao();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_categoria_requisicao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_contribuinte_1_ligou_onblur(oThis, iSeqRow) {
  do_ajax_form_contribuinte_1_mob_validate_ligou();
  scCssBlur(oThis);
}

function sc_form_contribuinte_1_ligou_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("codigo", "", status);
	displayChange_field("nome", "", status);
	displayChange_field("doador", "", status);
	displayChange_field("codigorua", "", status);
	displayChange_field("numero", "", status);
	displayChange_field("complemento", "", status);
	displayChange_field("setor", "", status);
	displayChange_field("tipo", "", status);
	displayChange_field("dataaniv", "", status);
	displayChange_field("datalistagem", "", status);
	displayChange_field("sexo", "", status);
	displayChange_field("fone1", "", status);
	displayChange_field("fone2", "", status);
	displayChange_field("fone3", "", status);
	displayChange_field("fone4", "", status);
	displayChange_field("ddd", "", status);
	displayChange_field("statusc", "", status);
	displayChange_field("cpf", "", status);
	displayChange_field("operador", "", status);
	displayChange_field("usuario", "", status);
	displayChange_field("classificacao", "", status);
	displayChange_field("tipocobranca", "", status);
	displayChange_field("idclientecompanhia", "", status);
	displayChange_field("dgidclientecompanhia", "", status);
	displayChange_field("idclientenosso", "", status);
	displayChange_field("codigocompanhia", "", status);
	displayChange_field("produtoincluido", "", status);
	displayChange_field("statusinclusaoproduto", "", status);
	displayChange_field("parceiro", "", status);
	displayChange_field("email", "", status);
	displayChange_field("permiteemail", "", status);
	displayChange_field("ultimoaudiocampanha", "", status);
	displayChange_field("datainclusaoproduto", "", status);
	displayChange_field("reajustedata", "", status);
	displayChange_field("qtdinvalido", "", status);
	displayChange_field("data_higienizacao", "", status);
	displayChange_field("status_higienizacao", "", status);
	displayChange_field("higienizado", "", status);
	displayChange_field("categoria_requisicao", "", status);
	displayChange_field("ligou", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_codigo(row, status);
	displayChange_field_nome(row, status);
	displayChange_field_doador(row, status);
	displayChange_field_codigorua(row, status);
	displayChange_field_numero(row, status);
	displayChange_field_complemento(row, status);
	displayChange_field_setor(row, status);
	displayChange_field_tipo(row, status);
	displayChange_field_dataaniv(row, status);
	displayChange_field_datalistagem(row, status);
	displayChange_field_sexo(row, status);
	displayChange_field_fone1(row, status);
	displayChange_field_fone2(row, status);
	displayChange_field_fone3(row, status);
	displayChange_field_fone4(row, status);
	displayChange_field_ddd(row, status);
	displayChange_field_statusc(row, status);
	displayChange_field_cpf(row, status);
	displayChange_field_operador(row, status);
	displayChange_field_usuario(row, status);
	displayChange_field_classificacao(row, status);
	displayChange_field_tipocobranca(row, status);
	displayChange_field_idclientecompanhia(row, status);
	displayChange_field_dgidclientecompanhia(row, status);
	displayChange_field_idclientenosso(row, status);
	displayChange_field_codigocompanhia(row, status);
	displayChange_field_produtoincluido(row, status);
	displayChange_field_statusinclusaoproduto(row, status);
	displayChange_field_parceiro(row, status);
	displayChange_field_email(row, status);
	displayChange_field_permiteemail(row, status);
	displayChange_field_ultimoaudiocampanha(row, status);
	displayChange_field_datainclusaoproduto(row, status);
	displayChange_field_reajustedata(row, status);
	displayChange_field_qtdinvalido(row, status);
	displayChange_field_data_higienizacao(row, status);
	displayChange_field_status_higienizacao(row, status);
	displayChange_field_higienizado(row, status);
	displayChange_field_categoria_requisicao(row, status);
	displayChange_field_ligou(row, status);
}

function displayChange_field(field, row, status) {
	if ("codigo" == field) {
		displayChange_field_codigo(row, status);
	}
	if ("nome" == field) {
		displayChange_field_nome(row, status);
	}
	if ("doador" == field) {
		displayChange_field_doador(row, status);
	}
	if ("codigorua" == field) {
		displayChange_field_codigorua(row, status);
	}
	if ("numero" == field) {
		displayChange_field_numero(row, status);
	}
	if ("complemento" == field) {
		displayChange_field_complemento(row, status);
	}
	if ("setor" == field) {
		displayChange_field_setor(row, status);
	}
	if ("tipo" == field) {
		displayChange_field_tipo(row, status);
	}
	if ("dataaniv" == field) {
		displayChange_field_dataaniv(row, status);
	}
	if ("datalistagem" == field) {
		displayChange_field_datalistagem(row, status);
	}
	if ("sexo" == field) {
		displayChange_field_sexo(row, status);
	}
	if ("fone1" == field) {
		displayChange_field_fone1(row, status);
	}
	if ("fone2" == field) {
		displayChange_field_fone2(row, status);
	}
	if ("fone3" == field) {
		displayChange_field_fone3(row, status);
	}
	if ("fone4" == field) {
		displayChange_field_fone4(row, status);
	}
	if ("ddd" == field) {
		displayChange_field_ddd(row, status);
	}
	if ("statusc" == field) {
		displayChange_field_statusc(row, status);
	}
	if ("cpf" == field) {
		displayChange_field_cpf(row, status);
	}
	if ("operador" == field) {
		displayChange_field_operador(row, status);
	}
	if ("usuario" == field) {
		displayChange_field_usuario(row, status);
	}
	if ("classificacao" == field) {
		displayChange_field_classificacao(row, status);
	}
	if ("tipocobranca" == field) {
		displayChange_field_tipocobranca(row, status);
	}
	if ("idclientecompanhia" == field) {
		displayChange_field_idclientecompanhia(row, status);
	}
	if ("dgidclientecompanhia" == field) {
		displayChange_field_dgidclientecompanhia(row, status);
	}
	if ("idclientenosso" == field) {
		displayChange_field_idclientenosso(row, status);
	}
	if ("codigocompanhia" == field) {
		displayChange_field_codigocompanhia(row, status);
	}
	if ("produtoincluido" == field) {
		displayChange_field_produtoincluido(row, status);
	}
	if ("statusinclusaoproduto" == field) {
		displayChange_field_statusinclusaoproduto(row, status);
	}
	if ("parceiro" == field) {
		displayChange_field_parceiro(row, status);
	}
	if ("email" == field) {
		displayChange_field_email(row, status);
	}
	if ("permiteemail" == field) {
		displayChange_field_permiteemail(row, status);
	}
	if ("ultimoaudiocampanha" == field) {
		displayChange_field_ultimoaudiocampanha(row, status);
	}
	if ("datainclusaoproduto" == field) {
		displayChange_field_datainclusaoproduto(row, status);
	}
	if ("reajustedata" == field) {
		displayChange_field_reajustedata(row, status);
	}
	if ("qtdinvalido" == field) {
		displayChange_field_qtdinvalido(row, status);
	}
	if ("data_higienizacao" == field) {
		displayChange_field_data_higienizacao(row, status);
	}
	if ("status_higienizacao" == field) {
		displayChange_field_status_higienizacao(row, status);
	}
	if ("higienizado" == field) {
		displayChange_field_higienizado(row, status);
	}
	if ("categoria_requisicao" == field) {
		displayChange_field_categoria_requisicao(row, status);
	}
	if ("ligou" == field) {
		displayChange_field_ligou(row, status);
	}
}

function displayChange_field_codigo(row, status) {
}

function displayChange_field_nome(row, status) {
}

function displayChange_field_doador(row, status) {
}

function displayChange_field_codigorua(row, status) {
}

function displayChange_field_numero(row, status) {
}

function displayChange_field_complemento(row, status) {
}

function displayChange_field_setor(row, status) {
}

function displayChange_field_tipo(row, status) {
}

function displayChange_field_dataaniv(row, status) {
}

function displayChange_field_datalistagem(row, status) {
}

function displayChange_field_sexo(row, status) {
}

function displayChange_field_fone1(row, status) {
}

function displayChange_field_fone2(row, status) {
}

function displayChange_field_fone3(row, status) {
}

function displayChange_field_fone4(row, status) {
}

function displayChange_field_ddd(row, status) {
}

function displayChange_field_statusc(row, status) {
}

function displayChange_field_cpf(row, status) {
}

function displayChange_field_operador(row, status) {
}

function displayChange_field_usuario(row, status) {
}

function displayChange_field_classificacao(row, status) {
}

function displayChange_field_tipocobranca(row, status) {
}

function displayChange_field_idclientecompanhia(row, status) {
}

function displayChange_field_dgidclientecompanhia(row, status) {
}

function displayChange_field_idclientenosso(row, status) {
}

function displayChange_field_codigocompanhia(row, status) {
}

function displayChange_field_produtoincluido(row, status) {
}

function displayChange_field_statusinclusaoproduto(row, status) {
}

function displayChange_field_parceiro(row, status) {
}

function displayChange_field_email(row, status) {
}

function displayChange_field_permiteemail(row, status) {
}

function displayChange_field_ultimoaudiocampanha(row, status) {
}

function displayChange_field_datainclusaoproduto(row, status) {
}

function displayChange_field_reajustedata(row, status) {
}

function displayChange_field_qtdinvalido(row, status) {
}

function displayChange_field_data_higienizacao(row, status) {
}

function displayChange_field_status_higienizacao(row, status) {
}

function displayChange_field_higienizado(row, status) {
}

function displayChange_field_categoria_requisicao(row, status) {
}

function displayChange_field_ligou(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_contribuinte_1_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(31);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dataaniv" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dataaniv" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['dataaniv']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dataaniv']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_contribuinte_1_mob_validate_dataaniv(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dataaniv']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_datalistagem" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_datalistagem" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['datalistagem']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['datalistagem']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_contribuinte_1_mob_validate_datalistagem(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['datalistagem']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_datainclusaoproduto" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_datainclusaoproduto" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['datainclusaoproduto']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['datainclusaoproduto']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_contribuinte_1_mob_validate_datainclusaoproduto(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['datainclusaoproduto']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_reajustedata" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_reajustedata" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['reajustedata']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['reajustedata']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_contribuinte_1_mob_validate_reajustedata(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['reajustedata']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_data_higienizacao" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_data_higienizacao" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['data_higienizacao']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['data_higienizacao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_contribuinte_1_mob_validate_data_higienizacao(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['data_higienizacao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
