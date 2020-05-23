
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
  scEventControl_data["idrequisicao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codcontribuinte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nomecontribuinte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fone4" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["operadora" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["finalizada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dtfinalizacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dtgerada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["setor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["comentario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["diamensal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tiporequisicao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idrequisicao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idrequisicao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codcontribuinte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codcontribuinte" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nomecontribuinte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nomecontribuinte" + iSeqRow]["change"]) {
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
  if (scEventControl_data["operadora" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["operadora" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["finalizada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["finalizada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dtfinalizacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dtfinalizacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dtgerada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dtgerada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["setor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["setor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["comentario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["comentario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["diamensal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["diamensal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tiporequisicao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tiporequisicao" + iSeqRow]["change"]) {
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
  $('#id_sc_field_idrequisicao' + iSeqRow).bind('blur', function() { sc_form_requisicoes_idrequisicao_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_requisicoes_idrequisicao_onfocus(this, iSeqRow) });
  $('#id_sc_field_codcontribuinte' + iSeqRow).bind('blur', function() { sc_form_requisicoes_codcontribuinte_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_requisicoes_codcontribuinte_onfocus(this, iSeqRow) });
  $('#id_sc_field_nomecontribuinte' + iSeqRow).bind('blur', function() { sc_form_requisicoes_nomecontribuinte_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_requisicoes_nomecontribuinte_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone1' + iSeqRow).bind('blur', function() { sc_form_requisicoes_fone1_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_requisicoes_fone1_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone2' + iSeqRow).bind('blur', function() { sc_form_requisicoes_fone2_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_requisicoes_fone2_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone3' + iSeqRow).bind('blur', function() { sc_form_requisicoes_fone3_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_requisicoes_fone3_onfocus(this, iSeqRow) });
  $('#id_sc_field_fone4' + iSeqRow).bind('blur', function() { sc_form_requisicoes_fone4_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_requisicoes_fone4_onfocus(this, iSeqRow) });
  $('#id_sc_field_operadora' + iSeqRow).bind('blur', function() { sc_form_requisicoes_operadora_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_requisicoes_operadora_onfocus(this, iSeqRow) });
  $('#id_sc_field_finalizada' + iSeqRow).bind('blur', function() { sc_form_requisicoes_finalizada_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_requisicoes_finalizada_onfocus(this, iSeqRow) });
  $('#id_sc_field_dtfinalizacao' + iSeqRow).bind('blur', function() { sc_form_requisicoes_dtfinalizacao_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_requisicoes_dtfinalizacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_dtfinalizacao_hora' + iSeqRow).bind('blur', function() { sc_form_requisicoes_dtfinalizacao_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_requisicoes_dtfinalizacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_dtgerada' + iSeqRow).bind('blur', function() { sc_form_requisicoes_dtgerada_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_requisicoes_dtgerada_onfocus(this, iSeqRow) });
  $('#id_sc_field_dtgerada_hora' + iSeqRow).bind('blur', function() { sc_form_requisicoes_dtgerada_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_requisicoes_dtgerada_onfocus(this, iSeqRow) });
  $('#id_sc_field_status' + iSeqRow).bind('blur', function() { sc_form_requisicoes_status_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_requisicoes_status_onfocus(this, iSeqRow) });
  $('#id_sc_field_setor' + iSeqRow).bind('blur', function() { sc_form_requisicoes_setor_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_requisicoes_setor_onfocus(this, iSeqRow) });
  $('#id_sc_field_comentario' + iSeqRow).bind('blur', function() { sc_form_requisicoes_comentario_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_requisicoes_comentario_onfocus(this, iSeqRow) });
  $('#id_sc_field_diamensal' + iSeqRow).bind('blur', function() { sc_form_requisicoes_diamensal_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_requisicoes_diamensal_onfocus(this, iSeqRow) });
  $('#id_sc_field_tiporequisicao' + iSeqRow).bind('blur', function() { sc_form_requisicoes_tiporequisicao_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_requisicoes_tiporequisicao_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_requisicoes_idrequisicao_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_idrequisicao();
  scCssBlur(oThis);
}

function sc_form_requisicoes_idrequisicao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_codcontribuinte_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_codcontribuinte();
  scCssBlur(oThis);
}

function sc_form_requisicoes_codcontribuinte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_nomecontribuinte_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_nomecontribuinte();
  scCssBlur(oThis);
}

function sc_form_requisicoes_nomecontribuinte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_fone1_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_fone1();
  scCssBlur(oThis);
}

function sc_form_requisicoes_fone1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_fone2_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_fone2();
  scCssBlur(oThis);
}

function sc_form_requisicoes_fone2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_fone3_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_fone3();
  scCssBlur(oThis);
}

function sc_form_requisicoes_fone3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_fone4_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_fone4();
  scCssBlur(oThis);
}

function sc_form_requisicoes_fone4_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_operadora_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_operadora();
  scCssBlur(oThis);
}

function sc_form_requisicoes_operadora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_finalizada_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_finalizada();
  scCssBlur(oThis);
}

function sc_form_requisicoes_finalizada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_dtfinalizacao_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_dtfinalizacao();
  scCssBlur(oThis);
}

function sc_form_requisicoes_dtfinalizacao_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_dtfinalizacao();
  scCssBlur(oThis);
}

function sc_form_requisicoes_dtfinalizacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_dtfinalizacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_dtgerada_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_dtgerada();
  scCssBlur(oThis);
}

function sc_form_requisicoes_dtgerada_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_dtgerada();
  scCssBlur(oThis);
}

function sc_form_requisicoes_dtgerada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_dtgerada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_status_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_status();
  scCssBlur(oThis);
}

function sc_form_requisicoes_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_setor_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_setor();
  scCssBlur(oThis);
}

function sc_form_requisicoes_setor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_comentario_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_comentario();
  scCssBlur(oThis);
}

function sc_form_requisicoes_comentario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_diamensal_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_diamensal();
  scCssBlur(oThis);
}

function sc_form_requisicoes_diamensal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_requisicoes_tiporequisicao_onblur(oThis, iSeqRow) {
  do_ajax_form_requisicoes_mob_validate_tiporequisicao();
  scCssBlur(oThis);
}

function sc_form_requisicoes_tiporequisicao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("idrequisicao", "", status);
	displayChange_field("codcontribuinte", "", status);
	displayChange_field("nomecontribuinte", "", status);
	displayChange_field("fone1", "", status);
	displayChange_field("fone2", "", status);
	displayChange_field("fone3", "", status);
	displayChange_field("fone4", "", status);
	displayChange_field("operadora", "", status);
	displayChange_field("finalizada", "", status);
	displayChange_field("dtfinalizacao", "", status);
	displayChange_field("dtgerada", "", status);
	displayChange_field("status", "", status);
	displayChange_field("setor", "", status);
	displayChange_field("comentario", "", status);
	displayChange_field("diamensal", "", status);
	displayChange_field("tiporequisicao", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_idrequisicao(row, status);
	displayChange_field_codcontribuinte(row, status);
	displayChange_field_nomecontribuinte(row, status);
	displayChange_field_fone1(row, status);
	displayChange_field_fone2(row, status);
	displayChange_field_fone3(row, status);
	displayChange_field_fone4(row, status);
	displayChange_field_operadora(row, status);
	displayChange_field_finalizada(row, status);
	displayChange_field_dtfinalizacao(row, status);
	displayChange_field_dtgerada(row, status);
	displayChange_field_status(row, status);
	displayChange_field_setor(row, status);
	displayChange_field_comentario(row, status);
	displayChange_field_diamensal(row, status);
	displayChange_field_tiporequisicao(row, status);
}

function displayChange_field(field, row, status) {
	if ("idrequisicao" == field) {
		displayChange_field_idrequisicao(row, status);
	}
	if ("codcontribuinte" == field) {
		displayChange_field_codcontribuinte(row, status);
	}
	if ("nomecontribuinte" == field) {
		displayChange_field_nomecontribuinte(row, status);
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
	if ("operadora" == field) {
		displayChange_field_operadora(row, status);
	}
	if ("finalizada" == field) {
		displayChange_field_finalizada(row, status);
	}
	if ("dtfinalizacao" == field) {
		displayChange_field_dtfinalizacao(row, status);
	}
	if ("dtgerada" == field) {
		displayChange_field_dtgerada(row, status);
	}
	if ("status" == field) {
		displayChange_field_status(row, status);
	}
	if ("setor" == field) {
		displayChange_field_setor(row, status);
	}
	if ("comentario" == field) {
		displayChange_field_comentario(row, status);
	}
	if ("diamensal" == field) {
		displayChange_field_diamensal(row, status);
	}
	if ("tiporequisicao" == field) {
		displayChange_field_tiporequisicao(row, status);
	}
}

function displayChange_field_idrequisicao(row, status) {
}

function displayChange_field_codcontribuinte(row, status) {
}

function displayChange_field_nomecontribuinte(row, status) {
}

function displayChange_field_fone1(row, status) {
}

function displayChange_field_fone2(row, status) {
}

function displayChange_field_fone3(row, status) {
}

function displayChange_field_fone4(row, status) {
}

function displayChange_field_operadora(row, status) {
}

function displayChange_field_finalizada(row, status) {
}

function displayChange_field_dtfinalizacao(row, status) {
}

function displayChange_field_dtgerada(row, status) {
}

function displayChange_field_status(row, status) {
}

function displayChange_field_setor(row, status) {
}

function displayChange_field_comentario(row, status) {
}

function displayChange_field_diamensal(row, status) {
}

function displayChange_field_tiporequisicao(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_requisicoes_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(28);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dtfinalizacao" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dtfinalizacao" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['dtfinalizacao']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dtfinalizacao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_requisicoes_mob_validate_dtfinalizacao(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dtfinalizacao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_dtgerada" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dtgerada" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['dtgerada']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dtgerada']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_requisicoes_mob_validate_dtgerada(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dtgerada']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
