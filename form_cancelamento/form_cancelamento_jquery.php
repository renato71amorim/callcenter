
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
  scEventControl_data["dia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ano" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["operador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipocobranca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["data" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["motivocancelamento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["codigo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ano" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ano" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["operador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["operador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipocobranca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipocobranca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["data" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["data" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["motivocancelamento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["motivocancelamento" + iSeqRow]["change"]) {
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
  $('#id_sc_field_codigo' + iSeqRow).bind('blur', function() { sc_form_cancelamento_codigo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cancelamento_codigo_onfocus(this, iSeqRow) });
  $('#id_sc_field_dia' + iSeqRow).bind('blur', function() { sc_form_cancelamento_dia_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_cancelamento_dia_onfocus(this, iSeqRow) });
  $('#id_sc_field_mes' + iSeqRow).bind('blur', function() { sc_form_cancelamento_mes_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_cancelamento_mes_onfocus(this, iSeqRow) });
  $('#id_sc_field_ano' + iSeqRow).bind('blur', function() { sc_form_cancelamento_ano_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_cancelamento_ano_onfocus(this, iSeqRow) });
  $('#id_sc_field_valor' + iSeqRow).bind('blur', function() { sc_form_cancelamento_valor_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_cancelamento_valor_onfocus(this, iSeqRow) });
  $('#id_sc_field_operador' + iSeqRow).bind('blur', function() { sc_form_cancelamento_operador_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_cancelamento_operador_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipocobranca' + iSeqRow).bind('blur', function() { sc_form_cancelamento_tipocobranca_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_cancelamento_tipocobranca_onfocus(this, iSeqRow) });
  $('#id_sc_field_data' + iSeqRow).bind('blur', function() { sc_form_cancelamento_data_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cancelamento_data_onfocus(this, iSeqRow) });
  $('#id_sc_field_data_hora' + iSeqRow).bind('blur', function() { sc_form_cancelamento_data_hora_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_cancelamento_data_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_motivocancelamento' + iSeqRow).bind('blur', function() { sc_form_cancelamento_motivocancelamento_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_cancelamento_motivocancelamento_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_cancelamento_codigo_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_codigo();
  scCssBlur(oThis);
}

function sc_form_cancelamento_codigo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_dia_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_dia();
  scCssBlur(oThis);
}

function sc_form_cancelamento_dia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_mes_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_mes();
  scCssBlur(oThis);
}

function sc_form_cancelamento_mes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_ano_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_ano();
  scCssBlur(oThis);
}

function sc_form_cancelamento_ano_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_valor_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_valor();
  scCssBlur(oThis);
}

function sc_form_cancelamento_valor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_operador_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_operador();
  scCssBlur(oThis);
}

function sc_form_cancelamento_operador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_tipocobranca_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_tipocobranca();
  scCssBlur(oThis);
}

function sc_form_cancelamento_tipocobranca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_data_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_data();
  scCssBlur(oThis);
}

function sc_form_cancelamento_data_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_data();
  scCssBlur(oThis);
}

function sc_form_cancelamento_data_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_data_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cancelamento_motivocancelamento_onblur(oThis, iSeqRow) {
  do_ajax_form_cancelamento_validate_motivocancelamento();
  scCssBlur(oThis);
}

function sc_form_cancelamento_motivocancelamento_onfocus(oThis, iSeqRow) {
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
	displayChange_field("dia", "", status);
	displayChange_field("mes", "", status);
	displayChange_field("ano", "", status);
	displayChange_field("valor", "", status);
	displayChange_field("operador", "", status);
	displayChange_field("tipocobranca", "", status);
	displayChange_field("data", "", status);
	displayChange_field("motivocancelamento", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_codigo(row, status);
	displayChange_field_dia(row, status);
	displayChange_field_mes(row, status);
	displayChange_field_ano(row, status);
	displayChange_field_valor(row, status);
	displayChange_field_operador(row, status);
	displayChange_field_tipocobranca(row, status);
	displayChange_field_data(row, status);
	displayChange_field_motivocancelamento(row, status);
}

function displayChange_field(field, row, status) {
	if ("codigo" == field) {
		displayChange_field_codigo(row, status);
	}
	if ("dia" == field) {
		displayChange_field_dia(row, status);
	}
	if ("mes" == field) {
		displayChange_field_mes(row, status);
	}
	if ("ano" == field) {
		displayChange_field_ano(row, status);
	}
	if ("valor" == field) {
		displayChange_field_valor(row, status);
	}
	if ("operador" == field) {
		displayChange_field_operador(row, status);
	}
	if ("tipocobranca" == field) {
		displayChange_field_tipocobranca(row, status);
	}
	if ("data" == field) {
		displayChange_field_data(row, status);
	}
	if ("motivocancelamento" == field) {
		displayChange_field_motivocancelamento(row, status);
	}
}

function displayChange_field_codigo(row, status) {
}

function displayChange_field_dia(row, status) {
}

function displayChange_field_mes(row, status) {
}

function displayChange_field_ano(row, status) {
}

function displayChange_field_valor(row, status) {
}

function displayChange_field_operador(row, status) {
}

function displayChange_field_tipocobranca(row, status) {
}

function displayChange_field_data(row, status) {
}

function displayChange_field_motivocancelamento(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_cancelamento_form" + pageNo).hide();
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
  $("#id_sc_field_data" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_data" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['data']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['data']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_cancelamento_validate_data(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['data']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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

