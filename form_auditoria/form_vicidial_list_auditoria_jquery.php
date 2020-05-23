
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
  scEventControl_data["comments" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["modify_date" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["user" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["phone_number" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["alt_phone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sc_field_1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gender" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["first_name" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["postal_code" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["address1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["middle_initial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["address2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["address3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["source_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["city" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["state" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["country_code" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["owner" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["vendor_lead_code" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["province" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["date_of_birth" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["title" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["comments" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["comments" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["modify_date" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["modify_date" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["user" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["user" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["phone_number" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["phone_number" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["alt_phone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["alt_phone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sc_field_1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sc_field_1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gender" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gender" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["first_name" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["first_name" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["postal_code" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["postal_code" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["address1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["address1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["middle_initial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["middle_initial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["address2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["address2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["address3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["address3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["source_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["source_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["city" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["city" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["state" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["state" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["country_code" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["country_code" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["owner" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["owner" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["vendor_lead_code" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["vendor_lead_code" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["province" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["province" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["date_of_birth" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["date_of_birth" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["title" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["title" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("status" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("gender" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("country_code" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("owner" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("vendor_lead_code" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("title" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
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
  $('#id_sc_field_modify_date' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_modify_date_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_vicidial_list_auditoria_modify_date_onfocus(this, iSeqRow) });
  $('#id_sc_field_modify_date_hora' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_modify_date_hora_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_vicidial_list_auditoria_modify_date_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_status' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_status_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_vicidial_list_auditoria_status_onfocus(this, iSeqRow) });
  $('#id_sc_field_user' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_user_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_vicidial_list_auditoria_user_onfocus(this, iSeqRow) });
  $('#id_sc_field_vendor_lead_code' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_vendor_lead_code_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_vicidial_list_auditoria_vendor_lead_code_onfocus(this, iSeqRow) });
  $('#id_sc_field_source_id' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_source_id_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_vicidial_list_auditoria_source_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_phone_number' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_phone_number_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_vicidial_list_auditoria_phone_number_onfocus(this, iSeqRow) });
  $('#id_sc_field_title' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_title_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_vicidial_list_auditoria_title_onfocus(this, iSeqRow) });
  $('#id_sc_field_first_name' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_first_name_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_vicidial_list_auditoria_first_name_onfocus(this, iSeqRow) });
  $('#id_sc_field_middle_initial' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_middle_initial_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_vicidial_list_auditoria_middle_initial_onfocus(this, iSeqRow) });
  $('#id_sc_field_address1' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_address1_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_vicidial_list_auditoria_address1_onfocus(this, iSeqRow) });
  $('#id_sc_field_address2' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_address2_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_vicidial_list_auditoria_address2_onfocus(this, iSeqRow) });
  $('#id_sc_field_address3' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_address3_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_vicidial_list_auditoria_address3_onfocus(this, iSeqRow) });
  $('#id_sc_field_city' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_city_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_vicidial_list_auditoria_city_onfocus(this, iSeqRow) });
  $('#id_sc_field_state' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_state_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_vicidial_list_auditoria_state_onfocus(this, iSeqRow) });
  $('#id_sc_field_province' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_province_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_vicidial_list_auditoria_province_onfocus(this, iSeqRow) });
  $('#id_sc_field_postal_code' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_postal_code_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_vicidial_list_auditoria_postal_code_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_vicidial_list_auditoria_postal_code_onfocus(this, iSeqRow) });
  $('#id_sc_field_country_code' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_country_code_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_vicidial_list_auditoria_country_code_onfocus(this, iSeqRow) });
  $('#id_sc_field_gender' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_gender_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_vicidial_list_auditoria_gender_onfocus(this, iSeqRow) });
  $('#id_sc_field_date_of_birth' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_date_of_birth_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_vicidial_list_auditoria_date_of_birth_onfocus(this, iSeqRow) });
  $('#id_sc_field_alt_phone' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_alt_phone_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_vicidial_list_auditoria_alt_phone_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_email_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_vicidial_list_auditoria_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_comments' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_comments_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_vicidial_list_auditoria_comments_onfocus(this, iSeqRow) });
  $('#id_sc_field_owner' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_owner_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_vicidial_list_auditoria_owner_onfocus(this, iSeqRow) });
  $('#id_sc_field_sc_field_1' + iSeqRow).bind('blur', function() { sc_form_vicidial_list_auditoria_sc_field_1_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_vicidial_list_auditoria_sc_field_1_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_vicidial_list_auditoria_modify_date_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_modify_date();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_modify_date_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_modify_date();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_modify_date_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_modify_date_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_status_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_status();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_user_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_user();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_user_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_vendor_lead_code_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_vendor_lead_code();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_vendor_lead_code_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_source_id_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_source_id();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_source_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_phone_number_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_phone_number();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_phone_number_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_title_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_title();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_title_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_first_name_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_first_name();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_first_name_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_middle_initial_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_middle_initial();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_middle_initial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_address1_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_address1();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_address1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_address2_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_address2();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_address2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_address3_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_address3();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_address3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_city_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_city();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_city_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_state_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_state();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_state_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_province_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_province();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_province_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_postal_code_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_postal_code();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_postal_code_onchange(oThis, iSeqRow) {
  cep_postal_code(oThis.value, 'F1;CEP,postal_code;UF,state;CIDADE,city;BAIRRO,source_id;RUA,address1');
}

function sc_form_vicidial_list_auditoria_postal_code_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_country_code_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_country_code();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_country_code_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_gender_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_gender();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_gender_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_date_of_birth_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_date_of_birth();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_date_of_birth_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_alt_phone_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_alt_phone();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_alt_phone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_email_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_email();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_comments_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_comments();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_comments_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_owner_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_owner();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_owner_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_vicidial_list_auditoria_sc_field_1_onblur(oThis, iSeqRow) {
  do_ajax_form_vicidial_list_auditoria_validate_sc_field_1();
  scCssBlur(oThis);
}

function sc_form_vicidial_list_auditoria_sc_field_1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
	if ("1" == block) {
		displayChange_block_1(status);
	}
	if ("2" == block) {
		displayChange_block_2(status);
	}
	if ("3" == block) {
		displayChange_block_3(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("comments", "", status);
	displayChange_field("modify_date", "", status);
	displayChange_field("user", "", status);
	displayChange_field("phone_number", "", status);
	displayChange_field("alt_phone", "", status);
	displayChange_field("email", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("sc_field_1", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("status", "", status);
	displayChange_field("gender", "", status);
	displayChange_field("first_name", "", status);
	displayChange_field("postal_code", "", status);
	displayChange_field("address1", "", status);
	displayChange_field("middle_initial", "", status);
	displayChange_field("address2", "", status);
	displayChange_field("address3", "", status);
	displayChange_field("source_id", "", status);
	displayChange_field("city", "", status);
	displayChange_field("state", "", status);
	displayChange_field("country_code", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("owner", "", status);
	displayChange_field("vendor_lead_code", "", status);
	displayChange_field("province", "", status);
	displayChange_field("date_of_birth", "", status);
	displayChange_field("title", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_comments(row, status);
	displayChange_field_modify_date(row, status);
	displayChange_field_user(row, status);
	displayChange_field_phone_number(row, status);
	displayChange_field_alt_phone(row, status);
	displayChange_field_email(row, status);
	displayChange_field_sc_field_1(row, status);
	displayChange_field_status(row, status);
	displayChange_field_gender(row, status);
	displayChange_field_first_name(row, status);
	displayChange_field_postal_code(row, status);
	displayChange_field_address1(row, status);
	displayChange_field_middle_initial(row, status);
	displayChange_field_address2(row, status);
	displayChange_field_address3(row, status);
	displayChange_field_source_id(row, status);
	displayChange_field_city(row, status);
	displayChange_field_state(row, status);
	displayChange_field_country_code(row, status);
	displayChange_field_owner(row, status);
	displayChange_field_vendor_lead_code(row, status);
	displayChange_field_province(row, status);
	displayChange_field_date_of_birth(row, status);
	displayChange_field_title(row, status);
}

function displayChange_field(field, row, status) {
	if ("comments" == field) {
		displayChange_field_comments(row, status);
	}
	if ("modify_date" == field) {
		displayChange_field_modify_date(row, status);
	}
	if ("user" == field) {
		displayChange_field_user(row, status);
	}
	if ("phone_number" == field) {
		displayChange_field_phone_number(row, status);
	}
	if ("alt_phone" == field) {
		displayChange_field_alt_phone(row, status);
	}
	if ("email" == field) {
		displayChange_field_email(row, status);
	}
	if ("sc_field_1" == field) {
		displayChange_field_sc_field_1(row, status);
	}
	if ("status" == field) {
		displayChange_field_status(row, status);
	}
	if ("gender" == field) {
		displayChange_field_gender(row, status);
	}
	if ("first_name" == field) {
		displayChange_field_first_name(row, status);
	}
	if ("postal_code" == field) {
		displayChange_field_postal_code(row, status);
	}
	if ("address1" == field) {
		displayChange_field_address1(row, status);
	}
	if ("middle_initial" == field) {
		displayChange_field_middle_initial(row, status);
	}
	if ("address2" == field) {
		displayChange_field_address2(row, status);
	}
	if ("address3" == field) {
		displayChange_field_address3(row, status);
	}
	if ("source_id" == field) {
		displayChange_field_source_id(row, status);
	}
	if ("city" == field) {
		displayChange_field_city(row, status);
	}
	if ("state" == field) {
		displayChange_field_state(row, status);
	}
	if ("country_code" == field) {
		displayChange_field_country_code(row, status);
	}
	if ("owner" == field) {
		displayChange_field_owner(row, status);
	}
	if ("vendor_lead_code" == field) {
		displayChange_field_vendor_lead_code(row, status);
	}
	if ("province" == field) {
		displayChange_field_province(row, status);
	}
	if ("date_of_birth" == field) {
		displayChange_field_date_of_birth(row, status);
	}
	if ("title" == field) {
		displayChange_field_title(row, status);
	}
}

function displayChange_field_comments(row, status) {
}

function displayChange_field_modify_date(row, status) {
}

function displayChange_field_user(row, status) {
}

function displayChange_field_phone_number(row, status) {
}

function displayChange_field_alt_phone(row, status) {
}

function displayChange_field_email(row, status) {
}

function displayChange_field_sc_field_1(row, status) {
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_goautodial_recordings_views")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_goautodial_recordings_views")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_status(row, status) {
}

function displayChange_field_gender(row, status) {
}

function displayChange_field_first_name(row, status) {
}

function displayChange_field_postal_code(row, status) {
}

function displayChange_field_address1(row, status) {
}

function displayChange_field_middle_initial(row, status) {
}

function displayChange_field_address2(row, status) {
}

function displayChange_field_address3(row, status) {
}

function displayChange_field_source_id(row, status) {
}

function displayChange_field_city(row, status) {
}

function displayChange_field_state(row, status) {
}

function displayChange_field_country_code(row, status) {
}

function displayChange_field_owner(row, status) {
}

function displayChange_field_vendor_lead_code(row, status) {
}

function displayChange_field_province(row, status) {
}

function displayChange_field_date_of_birth(row, status) {
}

function displayChange_field_title(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_vicidial_list_auditoria_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(36);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_modify_date" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_modify_date" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_vicidial_list_auditoria_validate_modify_date(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['modify_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_date_of_birth" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_date_of_birth" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_vicidial_list_auditoria_validate_date_of_birth(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['date_of_birth']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_entry_date" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_entry_date" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['entry_date']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['entry_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_vicidial_list_auditoria_validate_entry_date(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['entry_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_last_local_call_time" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_last_local_call_time" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['last_local_call_time']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['last_local_call_time']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_vicidial_list_auditoria_validate_last_local_call_time(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['last_local_call_time']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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

var sc_ddfield_closed = {
};

function scJQDDCheckBoxAdd(iSeqRow, bForce) {
  scJQDDCheckBoxAdd_title(iSeqRow, bForce);
} // scJQDDCheckBoxAdd

function scJQDDCheckBoxAdd_title(iSeqRow, bForce) {
  if (bForce || null == sc_ddfield_closed["title" + iSeqRow]) {
    sc_ddfield_closed["title" + iSeqRow] = true;
  }
  if ($("#id_sc_field_title" + iSeqRow).filter(":visible").length > 0 && sc_ddfield_closed["title" + iSeqRow]) {
    sc_ddfield_closed["title" + iSeqRow] = false;
    $("#id_sc_field_title" + iSeqRow).dropdownchecklist({
      bgiframe: true,
      closeRadioOnClick: true,
      maxDropHeight: 150,
      icon: { placement: 'right' }
    });
  }
} // scJQDDCheckBoxAdd_title

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQDDCheckBoxAdd(iLine, false);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

