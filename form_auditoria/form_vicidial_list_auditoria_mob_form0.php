<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - vicidial_list"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - vicidial_list"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/usr__NM__ico__NM__iconfinder_voicecall_6235.png">
<?php
header("X-XSS-Protection: 1; mode=block");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
<input type="hidden" id="sc-mobile-lock" value='true' />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/dropdown_check_list/css/ui.dropdownchecklist.standalone.css" type="text/css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/dropdown_check_list/js/ui.dropdownchecklist.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_modify_date button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_date_of_birth button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_entry_date button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_last_local_call_time button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_auditoria/form_vicidial_list_auditoria_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_vicidial_list_auditoria_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}

 function nm_field_disabled(Fields, Opt) {
  opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  if (opcao == "novo" && Opt == "U") {
      return;
  }
  if (opcao != "novo" && Opt == "I") {
      return;
  }
  Field = Fields.split(";");
  for (i=0; i < Field.length; i++)
  {
     F_temp = Field[i].split("=");
     F_name = F_temp[0];
     F_opc  = (F_temp[1] && ("disabled" == F_temp[1] || "true" == F_temp[1])) ? true : false;
     if (F_name == "modify_date")
     {
        $('input[name="modify_date"]').prop("disabled", F_opc);
        $('input[name="modify_date_hora"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="modify_date"]').addClass("scFormInputDisabled");
            $('input[name="modify_date_hora"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="modify_date"]').removeClass("scFormInputDisabled");
            $('input[name="modify_date_hora"]').removeClass("scFormInputDisabled");
        }
        $('input[id="calendar_modify_date"]').prop("disabled", F_opc);
        if (F_opc) {
            $("#id_sc_field_modify_date").datepicker("destroy");
        }
        else {
            scJQCalendarAdd("");
        }
     }
     if (F_name == "user")
     {
        $('input[name="user"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="user"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="user"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_vicidial_list_auditoria_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
     $(".scBtnGrpClick").mouseup(function(){
          event.preventDefault();
          if(event.target !== event.currentTarget) return;
          if($(this).find("a").prop('href') != '')
          {
              $(this).find("a").click();
          }
          else
          {
              eval($(this).find("a").prop('onclick'));
          }
  });
  scJQElementsAdd('');

  scJQGeneralAdd();

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
    scJQDDCheckBoxAdd('', false);
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_vicidial_list_auditoria']['error_buffer']) && '' != $_SESSION['scriptcase']['form_vicidial_list_auditoria']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_vicidial_list_auditoria']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/nm_rpc.js" ?>"> 
</script> 
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_vicidial_list_auditoria_mob_js0.php");
?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/nm_rpc.js" ?>"> 
</script> 
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="form_vicidial_list_auditoria_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="lead_id" value="<?php  echo $this->form_encode_input($this->lead_id) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_vicidial_list_auditoria_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_vicidial_list_auditoria_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><td class="scFormErrorMessage scFormToastMessage"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorMessageFont" style="padding: 0px; vertical-align: top; width: 100%"><span id="id_error_display_table_text"></span></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
        $sCondStyle = ($this->nmgp_botoes['new'] != 'off' || $this->nmgp_botoes['insert'] != 'off' || $this->nmgp_botoes['exit'] != 'off' || $this->nmgp_botoes['update'] != 'off' || $this->nmgp_botoes['delete'] != 'off' || $this->nmgp_botoes['copy'] != 'off') ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
        $NM_btn = true;
echo nmButtonGroupTableOutput($this->arr_buttons, "group_group_2", 'group_2', 't', '', 'ini');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-11", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-12", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "scBtnFn_sys_format_copy()", "scBtnFn_sys_format_copy()", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-14", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
echo nmButtonGroupTableOutput($this->arr_buttons, "", '', '', '', 'fim');
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-15", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-16", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-17", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">Informações</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['comments']))
    {
        $this->nm_new_label['comments'] = "Código";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $comments = $this->comments;
   $sStyleHidden_comments = '';
   if (isset($this->nmgp_cmp_hidden['comments']) && $this->nmgp_cmp_hidden['comments'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['comments']);
       $sStyleHidden_comments = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_comments = 'display: none;';
   $sStyleReadInp_comments = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['comments']) && $this->nmgp_cmp_readonly['comments'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['comments']);
       $sStyleReadLab_comments = '';
       $sStyleReadInp_comments = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['comments']) && $this->nmgp_cmp_hidden['comments'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="comments" value="<?php echo $this->form_encode_input($comments) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_comments_line" id="hidden_field_data_comments" style="<?php echo $sStyleHidden_comments; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_comments_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_comments_label"><span id="id_label_comments"><?php echo $this->nm_new_label['comments']; ?></span></span><br><input type="hidden" name="comments" value="<?php echo $this->form_encode_input($comments); ?>"><span id="id_ajax_label_comments"><?php echo nl2br($comments); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_comments_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_comments_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['modify_date']))
    {
        $this->nm_new_label['modify_date'] = "Atualizado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $modify_date = $this->modify_date;
   $modify_date_hora = $this->modify_date_hora;
   $guarda_datahora = $this->field_config['modify_date']['date_format'];
   $this->field_config['modify_date']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
   $sStyleHidden_modify_date = '';
   if (isset($this->nmgp_cmp_hidden['modify_date']) && $this->nmgp_cmp_hidden['modify_date'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['modify_date']);
       $sStyleHidden_modify_date = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_modify_date = 'display: none;';
   $sStyleReadInp_modify_date = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['modify_date']) && $this->nmgp_cmp_readonly['modify_date'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['modify_date']);
       $sStyleReadLab_modify_date = '';
       $sStyleReadInp_modify_date = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['modify_date']) && $this->nmgp_cmp_hidden['modify_date'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="modify_date" value="<?php echo $this->form_encode_input($modify_date) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_modify_date_hora_line" id="hidden_field_data_modify_date" style="<?php echo $sStyleHidden_modify_date; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_modify_date_hora_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_modify_date_label"><span id="id_label_modify_date"><?php echo $this->nm_new_label['modify_date']; ?></span></span><br><input type="hidden" name="modify_date" value="<?php echo $this->form_encode_input($modify_date); ?>"><span id="id_ajax_label_modify_date"><?php echo nl2br($modify_date); ?></span>
<?php
$tmp_form_data = $this->field_config['modify_date']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>

<input type="hidden" name="modify_date_hora" value="<?php echo $this->form_encode_input($modify_date_hora); ?>"><span id="id_ajax_label_modify_date_hora"><?php echo nl2br($modify_date_hora); ?></span>
<?php
$tmp_form_data = $this->field_config['modify_date_hora']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_modify_date_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_modify_date_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['user']))
    {
        $this->nm_new_label['user'] = "Usuário";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $user = $this->user;
   $sStyleHidden_user = '';
   if (isset($this->nmgp_cmp_hidden['user']) && $this->nmgp_cmp_hidden['user'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['user']);
       $sStyleHidden_user = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_user = 'display: none;';
   $sStyleReadInp_user = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['user']) && $this->nmgp_cmp_readonly['user'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['user']);
       $sStyleReadLab_user = '';
       $sStyleReadInp_user = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['user']) && $this->nmgp_cmp_hidden['user'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="user" value="<?php echo $this->form_encode_input($user) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_user_line" id="hidden_field_data_user" style="<?php echo $sStyleHidden_user; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_user_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_user_label"><span id="id_label_user"><?php echo $this->nm_new_label['user']; ?></span></span><br><input type="hidden" name="user" value="<?php echo $this->form_encode_input($user); ?>"><span id="id_ajax_label_user"><?php echo nl2br($user); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_user_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_user_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['phone_number']))
    {
        $this->nm_new_label['phone_number'] = "Telefone Principal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $phone_number = $this->phone_number;
   $sStyleHidden_phone_number = '';
   if (isset($this->nmgp_cmp_hidden['phone_number']) && $this->nmgp_cmp_hidden['phone_number'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['phone_number']);
       $sStyleHidden_phone_number = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_phone_number = 'display: none;';
   $sStyleReadInp_phone_number = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['phone_number']) && $this->nmgp_cmp_readonly['phone_number'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['phone_number']);
       $sStyleReadLab_phone_number = '';
       $sStyleReadInp_phone_number = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['phone_number']) && $this->nmgp_cmp_hidden['phone_number'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="phone_number" value="<?php echo $this->form_encode_input($phone_number) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_phone_number_line" id="hidden_field_data_phone_number" style="<?php echo $sStyleHidden_phone_number; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_phone_number_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_phone_number_label"><span id="id_label_phone_number"><?php echo $this->nm_new_label['phone_number']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["phone_number"]) &&  $this->nmgp_cmp_readonly["phone_number"] == "on") { 

 ?>
<input type="hidden" name="phone_number" value="<?php echo $this->form_encode_input($phone_number) . "\">" . $phone_number . ""; ?>
<?php } else { ?>
<span id="id_read_on_phone_number" class="sc-ui-readonly-phone_number css_phone_number_line" style="<?php echo $sStyleReadLab_phone_number; ?>"><?php echo $this->phone_number; ?></span><span id="id_read_off_phone_number" class="css_read_off_phone_number" style="white-space: nowrap;<?php echo $sStyleReadInp_phone_number; ?>">
 <input class="sc-js-input scFormObjectOdd css_phone_number_obj" style="" id="id_sc_field_phone_number" type=text name="phone_number" value="<?php echo $this->form_encode_input($phone_number) ?>"
 size=18 maxlength=33 alt="{datatype: 'mask', maxLength: 18, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '(99) 99999-9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_phone_number_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_phone_number_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['alt_phone']))
    {
        $this->nm_new_label['alt_phone'] = "Telefone Celular";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $alt_phone = $this->alt_phone;
   $sStyleHidden_alt_phone = '';
   if (isset($this->nmgp_cmp_hidden['alt_phone']) && $this->nmgp_cmp_hidden['alt_phone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['alt_phone']);
       $sStyleHidden_alt_phone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_alt_phone = 'display: none;';
   $sStyleReadInp_alt_phone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['alt_phone']) && $this->nmgp_cmp_readonly['alt_phone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['alt_phone']);
       $sStyleReadLab_alt_phone = '';
       $sStyleReadInp_alt_phone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['alt_phone']) && $this->nmgp_cmp_hidden['alt_phone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="alt_phone" value="<?php echo $this->form_encode_input($alt_phone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_alt_phone_line" id="hidden_field_data_alt_phone" style="<?php echo $sStyleHidden_alt_phone; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_alt_phone_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_alt_phone_label"><span id="id_label_alt_phone"><?php echo $this->nm_new_label['alt_phone']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["alt_phone"]) &&  $this->nmgp_cmp_readonly["alt_phone"] == "on") { 

 ?>
<input type="hidden" name="alt_phone" value="<?php echo $this->form_encode_input($alt_phone) . "\">" . $alt_phone . ""; ?>
<?php } else { ?>
<span id="id_read_on_alt_phone" class="sc-ui-readonly-alt_phone css_alt_phone_line" style="<?php echo $sStyleReadLab_alt_phone; ?>"><?php echo $this->alt_phone; ?></span><span id="id_read_off_alt_phone" class="css_read_off_alt_phone" style="white-space: nowrap;<?php echo $sStyleReadInp_alt_phone; ?>">
 <input class="sc-js-input scFormObjectOdd css_alt_phone_obj" style="" id="id_sc_field_alt_phone" type=text name="alt_phone" value="<?php echo $this->form_encode_input($alt_phone) ?>"
 size=12 maxlength=27 alt="{datatype: 'mask', maxLength: 12, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '(99) 99999-9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_alt_phone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_alt_phone_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['email']))
    {
        $this->nm_new_label['email'] = "Email";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $email = $this->email;
   $sStyleHidden_email = '';
   if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['email']);
       $sStyleHidden_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_email = 'display: none;';
   $sStyleReadInp_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['email']) && $this->nmgp_cmp_readonly['email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['email']);
       $sStyleReadLab_email = '';
       $sStyleReadInp_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_email_line" id="hidden_field_data_email" style="<?php echo $sStyleHidden_email; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_email_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_email_label"><span id="id_label_email"><?php echo $this->nm_new_label['email']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["email"]) &&  $this->nmgp_cmp_readonly["email"] == "on") { 

 ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">" . $email . ""; ?>
<?php } else { ?>
<span id="id_read_on_email" class="sc-ui-readonly-email css_email_line" style="<?php echo $sStyleReadLab_email; ?>"><?php echo $this->email; ?></span><span id="id_read_off_email" class="css_read_off_email" style="white-space: nowrap;<?php echo $sStyleReadInp_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_email_obj" style="" id="id_sc_field_email" type=text name="email" value="<?php echo $this->form_encode_input($email) ?>"
 size=50 maxlength=70 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.email.value != '') {window.open('mailto:' + document.F1.email.value); }", "if (document.F1.email.value != '') {window.open('mailto:' + document.F1.email.value); }", "email_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_email_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_email_dumb = ('' == $sStyleHidden_email) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_email_dumb" style="<?php echo $sStyleHidden_email_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sc_field_1']))
    {
        $this->nm_new_label['sc_field_1'] = "Aúdios";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sc_field_1 = $this->sc_field_1;
   $sStyleHidden_sc_field_1 = '';
   if (isset($this->nmgp_cmp_hidden['sc_field_1']) && $this->nmgp_cmp_hidden['sc_field_1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sc_field_1']);
       $sStyleHidden_sc_field_1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sc_field_1 = 'display: none;';
   $sStyleReadInp_sc_field_1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sc_field_1']) && $this->nmgp_cmp_readonly['sc_field_1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sc_field_1']);
       $sStyleReadLab_sc_field_1 = '';
       $sStyleReadInp_sc_field_1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sc_field_1']) && $this->nmgp_cmp_hidden['sc_field_1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sc_field_1" value="<?php echo $this->form_encode_input($sc_field_1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sc_field_1_line" id="hidden_field_data_sc_field_1" style="<?php echo $sStyleHidden_sc_field_1; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_sc_field_1_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_sc_field_1'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_sc_field_1'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_sc_field_1'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_form_full']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_pai']        = "form_vicidial_list_auditoria_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_form_parms'] = "lead_id*scin" . $this->nmgp_dados_form['lead_id'] . "*scoutcall_date*scin" . $this->nmgp_dados_form['modify_date'] . "*scoutuser*scin" . $this->nmgp_dados_form['user'] . "*scoutNMSC_inicial*scininicio*scout";
 if (isset($this->Ini->sc_lig_md5["grid_goautodial_recordings_views"]) && $this->Ini->sc_lig_md5["grid_goautodial_recordings_views"] == "S") {
     $Parms_Lig  = "lead_id*scin" . $this->nmgp_dados_form['lead_id'] . "*scoutcall_date*scin" . $this->nmgp_dados_form['modify_date'] . "*scoutuser*scin" . $this->nmgp_dados_form['user'] . "*scoutNMSC_inicial*scininicio*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_vicidial_list_auditoria_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "lead_id*scin" . $this->nmgp_dados_form['lead_id'] . "*scoutcall_date*scin" . $this->nmgp_dados_form['modify_date'] . "*scoutuser*scin" . $this->nmgp_dados_form['user'] . "*scoutNMSC_inicial*scininicio*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_vicidial_list_auditoria_mob_empty.htm' : $this->Ini->link_grid_goautodial_recordings_views_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_session=' . session_id() . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_sc_field_1']) && 'nmsc_iframe_liga_grid_goautodial_recordings_views' != $this->Ini->sc_lig_target['C_@scinf_sc_field_1'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_sc_field_1'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['grid_goautodial_recordings_views_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_sc_field_1'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_goautodial_recordings_views"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_goautodial_recordings_views"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sc_field_1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sc_field_1_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_sc_field_1_dumb = ('' == $sStyleHidden_sc_field_1) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_sc_field_1_dumb" style="<?php echo $sStyleHidden_sc_field_1_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">Dados</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['status']))
   {
       $this->nm_new_label['status'] = "Status";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $status = $this->status;
   $sStyleHidden_status = '';
   if (isset($this->nmgp_cmp_hidden['status']) && $this->nmgp_cmp_hidden['status'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['status']);
       $sStyleHidden_status = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_status = 'display: none;';
   $sStyleReadInp_status = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['status']) && $this->nmgp_cmp_readonly['status'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['status']);
       $sStyleReadLab_status = '';
       $sStyleReadInp_status = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['status']) && $this->nmgp_cmp_hidden['status'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="status" value="<?php echo $this->form_encode_input($this->status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_status_line" id="hidden_field_data_status" style="<?php echo $sStyleHidden_status; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_status_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_status_label"><span id="id_label_status"><?php echo $this->nm_new_label['status']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["status"]) &&  $this->nmgp_cmp_readonly["status"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status'] = array(); 
    }

   $old_value_modify_date = $this->modify_date;
   $old_value_modify_date_hora = $this->modify_date_hora;
   $old_value_phone_number = $this->phone_number;
   $old_value_alt_phone = $this->alt_phone;
   $old_value_postal_code = $this->postal_code;
   $old_value_province = $this->province;
   $old_value_date_of_birth = $this->date_of_birth;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_modify_date = $this->modify_date;
   $unformatted_value_modify_date_hora = $this->modify_date_hora;
   $unformatted_value_phone_number = $this->phone_number;
   $unformatted_value_alt_phone = $this->alt_phone;
   $unformatted_value_postal_code = $this->postal_code;
   $unformatted_value_province = $this->province;
   $unformatted_value_date_of_birth = $this->date_of_birth;

   $nm_comando = "SELECT status, status_name  FROM vicidial_statuses  ORDER BY status_name";

   $this->modify_date = $old_value_modify_date;
   $this->modify_date_hora = $old_value_modify_date_hora;
   $this->phone_number = $old_value_phone_number;
   $this->alt_phone = $old_value_alt_phone;
   $this->postal_code = $old_value_postal_code;
   $this->province = $old_value_province;
   $this->date_of_birth = $old_value_date_of_birth;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_status'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $status_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->status_1))
          {
              foreach ($this->status_1 as $tmp_status)
              {
                  if (trim($tmp_status) === trim($cadaselect[1])) { $status_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->status) === trim($cadaselect[1])) { $status_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="status" value="<?php echo $this->form_encode_input($status) . "\">" . $status_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_status();
   $x = 0 ; 
   $status_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->status_1))
          {
              foreach ($this->status_1 as $tmp_status)
              {
                  if (trim($tmp_status) === trim($cadaselect[1])) { $status_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->status) === trim($cadaselect[1])) { $status_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($status_look))
          {
              $status_look = $this->status;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_status\" class=\"css_status_line\" style=\"" .  $sStyleReadLab_status . "\">" . $this->form_encode_input($status_look) . "</span><span id=\"id_read_off_status\" class=\"css_read_off_status\" style=\"white-space: nowrap; " . $sStyleReadInp_status . "\">";
   echo " <span id=\"idAjaxSelect_status\"><select class=\"sc-js-input scFormObjectOdd css_status_obj\" style=\"\" id=\"id_sc_field_status\" name=\"status\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->status) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->status)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_status_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['gender']))
   {
       $this->nm_new_label['gender'] = "Sexo";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gender = $this->gender;
   $sStyleHidden_gender = '';
   if (isset($this->nmgp_cmp_hidden['gender']) && $this->nmgp_cmp_hidden['gender'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gender']);
       $sStyleHidden_gender = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gender = 'display: none;';
   $sStyleReadInp_gender = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gender']) && $this->nmgp_cmp_readonly['gender'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gender']);
       $sStyleReadLab_gender = '';
       $sStyleReadInp_gender = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gender']) && $this->nmgp_cmp_hidden['gender'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="gender" value="<?php echo $this->form_encode_input($this->gender) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gender_line" id="hidden_field_data_gender" style="<?php echo $sStyleHidden_gender; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gender_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gender_label"><span id="id_label_gender"><?php echo $this->nm_new_label['gender']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gender"]) &&  $this->nmgp_cmp_readonly["gender"] == "on") { 

$gender_look = "";
 if ($this->gender == "M") { $gender_look .= "Masculino" ;} 
 if ($this->gender == "F") { $gender_look .= "Feminino" ;} 
 if ($this->gender == "N") { $gender_look .= "Não se aplica" ;} 
 if (empty($gender_look)) { $gender_look = $this->gender; }
?>
<input type="hidden" name="gender" value="<?php echo $this->form_encode_input($gender) . "\">" . $gender_look . ""; ?>
<?php } else { ?>
<?php

$gender_look = "";
 if ($this->gender == "M") { $gender_look .= "Masculino" ;} 
 if ($this->gender == "F") { $gender_look .= "Feminino" ;} 
 if ($this->gender == "N") { $gender_look .= "Não se aplica" ;} 
 if (empty($gender_look)) { $gender_look = $this->gender; }
?>
<span id="id_read_on_gender" class="css_gender_line"  style="<?php echo $sStyleReadLab_gender; ?>"><?php echo $this->form_encode_input($gender_look); ?></span><span id="id_read_off_gender" class="css_read_off_gender" style="white-space: nowrap; <?php echo $sStyleReadInp_gender; ?>">
 <span id="idAjaxSelect_gender"><select class="sc-js-input scFormObjectOdd css_gender_obj" style="" id="id_sc_field_gender" name="gender" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="M" <?php  if ($this->gender == "M") { echo " selected" ;} ?>>Masculino</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_gender'][] = 'M'; ?>
 <option  value="F" <?php  if ($this->gender == "F") { echo " selected" ;} ?>>Feminino</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_gender'][] = 'F'; ?>
 <option  value="N" <?php  if ($this->gender == "N") { echo " selected" ;} ?>>Não se aplica</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_gender'][] = 'N'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gender_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gender_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['first_name']))
    {
        $this->nm_new_label['first_name'] = "Nome";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $first_name = $this->first_name;
   $sStyleHidden_first_name = '';
   if (isset($this->nmgp_cmp_hidden['first_name']) && $this->nmgp_cmp_hidden['first_name'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['first_name']);
       $sStyleHidden_first_name = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_first_name = 'display: none;';
   $sStyleReadInp_first_name = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['first_name']) && $this->nmgp_cmp_readonly['first_name'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['first_name']);
       $sStyleReadLab_first_name = '';
       $sStyleReadInp_first_name = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['first_name']) && $this->nmgp_cmp_hidden['first_name'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="first_name" value="<?php echo $this->form_encode_input($first_name) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_first_name_line" id="hidden_field_data_first_name" style="<?php echo $sStyleHidden_first_name; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_first_name_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_first_name_label"><span id="id_label_first_name"><?php echo $this->nm_new_label['first_name']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["first_name"]) &&  $this->nmgp_cmp_readonly["first_name"] == "on") { 

 ?>
<input type="hidden" name="first_name" value="<?php echo $this->form_encode_input($first_name) . "\">" . $first_name . ""; ?>
<?php } else { ?>
<span id="id_read_on_first_name" class="sc-ui-readonly-first_name css_first_name_line" style="<?php echo $sStyleReadLab_first_name; ?>"><?php echo $this->first_name; ?></span><span id="id_read_off_first_name" class="css_read_off_first_name" style="white-space: nowrap;<?php echo $sStyleReadInp_first_name; ?>">
 <input class="sc-js-input scFormObjectOdd css_first_name_obj" style="" id="id_sc_field_first_name" type=text name="first_name" value="<?php echo $this->form_encode_input($first_name) ?>"
 size=30 maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_first_name_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_first_name_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['postal_code']))
    {
        $this->nm_new_label['postal_code'] = "CEP";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $postal_code = $this->postal_code;
   $sStyleHidden_postal_code = '';
   if (isset($this->nmgp_cmp_hidden['postal_code']) && $this->nmgp_cmp_hidden['postal_code'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['postal_code']);
       $sStyleHidden_postal_code = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_postal_code = 'display: none;';
   $sStyleReadInp_postal_code = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['postal_code']) && $this->nmgp_cmp_readonly['postal_code'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['postal_code']);
       $sStyleReadLab_postal_code = '';
       $sStyleReadInp_postal_code = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['postal_code']) && $this->nmgp_cmp_hidden['postal_code'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="postal_code" value="<?php echo $this->form_encode_input($postal_code) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_postal_code_line" id="hidden_field_data_postal_code" style="<?php echo $sStyleHidden_postal_code; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_postal_code_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_postal_code_label"><span id="id_label_postal_code"><?php echo $this->nm_new_label['postal_code']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["postal_code"]) &&  $this->nmgp_cmp_readonly["postal_code"] == "on") { 

 ?>
<input type="hidden" name="postal_code" value="<?php echo $this->form_encode_input($postal_code) . "\">" . $postal_code . ""; ?>
<?php } else { ?>
<span id="id_read_on_postal_code" class="sc-ui-readonly-postal_code css_postal_code_line" style="<?php echo $sStyleReadLab_postal_code; ?>"><?php echo $this->postal_code; ?></span><span id="id_read_off_postal_code" class="css_read_off_postal_code" style="white-space: nowrap;<?php echo $sStyleReadInp_postal_code; ?>">
 <input class="sc-js-input scFormObjectOdd css_postal_code_obj" style="" id="id_sc_field_postal_code" type=text name="postal_code" value="<?php echo $this->form_encode_input($postal_code) ?>"
 size=8 alt="{datatype: 'cep', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "bzipcode", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_vicidial_list_auditoria'). "/form_vicidial_list_auditoria_mob_cep.php?cep=&form_origem=F1;CEP,postal_code;UF,state;CIDADE,city;BAIRRO,source_id;RUA,address1&TB_iframe=true&height=350&width=420&modal=true', '')", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_vicidial_list_auditoria'). "/form_vicidial_list_auditoria_mob_cep.php?cep=&form_origem=F1;CEP,postal_code;UF,state;CIDADE,city;BAIRRO,source_id;RUA,address1&TB_iframe=true&height=350&width=420&modal=true', '')", "postal_code_cep", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_postal_code_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_postal_code_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['address1']))
    {
        $this->nm_new_label['address1'] = "Endereço";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $address1 = $this->address1;
   $sStyleHidden_address1 = '';
   if (isset($this->nmgp_cmp_hidden['address1']) && $this->nmgp_cmp_hidden['address1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['address1']);
       $sStyleHidden_address1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_address1 = 'display: none;';
   $sStyleReadInp_address1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['address1']) && $this->nmgp_cmp_readonly['address1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['address1']);
       $sStyleReadLab_address1 = '';
       $sStyleReadInp_address1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['address1']) && $this->nmgp_cmp_hidden['address1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="address1" value="<?php echo $this->form_encode_input($address1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_address1_line" id="hidden_field_data_address1" style="<?php echo $sStyleHidden_address1; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_address1_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_address1_label"><span id="id_label_address1"><?php echo $this->nm_new_label['address1']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["address1"]) &&  $this->nmgp_cmp_readonly["address1"] == "on") { 

 ?>
<input type="hidden" name="address1" value="<?php echo $this->form_encode_input($address1) . "\">" . $address1 . ""; ?>
<?php } else { ?>
<span id="id_read_on_address1" class="sc-ui-readonly-address1 css_address1_line" style="<?php echo $sStyleReadLab_address1; ?>"><?php echo $this->address1; ?></span><span id="id_read_off_address1" class="css_read_off_address1" style="white-space: nowrap;<?php echo $sStyleReadInp_address1; ?>">
 <input class="sc-js-input scFormObjectOdd css_address1_obj" style="" id="id_sc_field_address1" type=text name="address1" value="<?php echo $this->form_encode_input($address1) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_address1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_address1_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['middle_initial']))
    {
        $this->nm_new_label['middle_initial'] = "Número";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $middle_initial = $this->middle_initial;
   $sStyleHidden_middle_initial = '';
   if (isset($this->nmgp_cmp_hidden['middle_initial']) && $this->nmgp_cmp_hidden['middle_initial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['middle_initial']);
       $sStyleHidden_middle_initial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_middle_initial = 'display: none;';
   $sStyleReadInp_middle_initial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['middle_initial']) && $this->nmgp_cmp_readonly['middle_initial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['middle_initial']);
       $sStyleReadLab_middle_initial = '';
       $sStyleReadInp_middle_initial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['middle_initial']) && $this->nmgp_cmp_hidden['middle_initial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="middle_initial" value="<?php echo $this->form_encode_input($middle_initial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_middle_initial_line" id="hidden_field_data_middle_initial" style="<?php echo $sStyleHidden_middle_initial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_middle_initial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_middle_initial_label"><span id="id_label_middle_initial"><?php echo $this->nm_new_label['middle_initial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["middle_initial"]) &&  $this->nmgp_cmp_readonly["middle_initial"] == "on") { 

 ?>
<input type="hidden" name="middle_initial" value="<?php echo $this->form_encode_input($middle_initial) . "\">" . $middle_initial . ""; ?>
<?php } else { ?>
<span id="id_read_on_middle_initial" class="sc-ui-readonly-middle_initial css_middle_initial_line" style="<?php echo $sStyleReadLab_middle_initial; ?>"><?php echo $this->middle_initial; ?></span><span id="id_read_off_middle_initial" class="css_read_off_middle_initial" style="white-space: nowrap;<?php echo $sStyleReadInp_middle_initial; ?>">
 <input class="sc-js-input scFormObjectOdd css_middle_initial_obj" style="" id="id_sc_field_middle_initial" type=text name="middle_initial" value="<?php echo $this->form_encode_input($middle_initial) ?>"
 size=30 maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_middle_initial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_middle_initial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['address2']))
    {
        $this->nm_new_label['address2'] = "Complemento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $address2 = $this->address2;
   $sStyleHidden_address2 = '';
   if (isset($this->nmgp_cmp_hidden['address2']) && $this->nmgp_cmp_hidden['address2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['address2']);
       $sStyleHidden_address2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_address2 = 'display: none;';
   $sStyleReadInp_address2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['address2']) && $this->nmgp_cmp_readonly['address2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['address2']);
       $sStyleReadLab_address2 = '';
       $sStyleReadInp_address2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['address2']) && $this->nmgp_cmp_hidden['address2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="address2" value="<?php echo $this->form_encode_input($address2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_address2_line" id="hidden_field_data_address2" style="<?php echo $sStyleHidden_address2; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_address2_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_address2_label"><span id="id_label_address2"><?php echo $this->nm_new_label['address2']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["address2"]) &&  $this->nmgp_cmp_readonly["address2"] == "on") { 

 ?>
<input type="hidden" name="address2" value="<?php echo $this->form_encode_input($address2) . "\">" . $address2 . ""; ?>
<?php } else { ?>
<span id="id_read_on_address2" class="sc-ui-readonly-address2 css_address2_line" style="<?php echo $sStyleReadLab_address2; ?>"><?php echo $this->address2; ?></span><span id="id_read_off_address2" class="css_read_off_address2" style="white-space: nowrap;<?php echo $sStyleReadInp_address2; ?>">
 <input class="sc-js-input scFormObjectOdd css_address2_obj" style="" id="id_sc_field_address2" type=text name="address2" value="<?php echo $this->form_encode_input($address2) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_address2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_address2_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['address3']))
    {
        $this->nm_new_label['address3'] = "Observação";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $address3 = $this->address3;
   $sStyleHidden_address3 = '';
   if (isset($this->nmgp_cmp_hidden['address3']) && $this->nmgp_cmp_hidden['address3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['address3']);
       $sStyleHidden_address3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_address3 = 'display: none;';
   $sStyleReadInp_address3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['address3']) && $this->nmgp_cmp_readonly['address3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['address3']);
       $sStyleReadLab_address3 = '';
       $sStyleReadInp_address3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['address3']) && $this->nmgp_cmp_hidden['address3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="address3" value="<?php echo $this->form_encode_input($address3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_address3_line" id="hidden_field_data_address3" style="<?php echo $sStyleHidden_address3; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_address3_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_address3_label"><span id="id_label_address3"><?php echo $this->nm_new_label['address3']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["address3"]) &&  $this->nmgp_cmp_readonly["address3"] == "on") { 

 ?>
<input type="hidden" name="address3" value="<?php echo $this->form_encode_input($address3) . "\">" . $address3 . ""; ?>
<?php } else { ?>
<span id="id_read_on_address3" class="sc-ui-readonly-address3 css_address3_line" style="<?php echo $sStyleReadLab_address3; ?>"><?php echo $this->address3; ?></span><span id="id_read_off_address3" class="css_read_off_address3" style="white-space: nowrap;<?php echo $sStyleReadInp_address3; ?>">
 <input class="sc-js-input scFormObjectOdd css_address3_obj" style="" id="id_sc_field_address3" type=text name="address3" value="<?php echo $this->form_encode_input($address3) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_address3_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_address3_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['source_id']))
    {
        $this->nm_new_label['source_id'] = "Bairro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $source_id = $this->source_id;
   $sStyleHidden_source_id = '';
   if (isset($this->nmgp_cmp_hidden['source_id']) && $this->nmgp_cmp_hidden['source_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['source_id']);
       $sStyleHidden_source_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_source_id = 'display: none;';
   $sStyleReadInp_source_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['source_id']) && $this->nmgp_cmp_readonly['source_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['source_id']);
       $sStyleReadLab_source_id = '';
       $sStyleReadInp_source_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['source_id']) && $this->nmgp_cmp_hidden['source_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="source_id" value="<?php echo $this->form_encode_input($source_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_source_id_line" id="hidden_field_data_source_id" style="<?php echo $sStyleHidden_source_id; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_source_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_source_id_label"><span id="id_label_source_id"><?php echo $this->nm_new_label['source_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["source_id"]) &&  $this->nmgp_cmp_readonly["source_id"] == "on") { 

 ?>
<input type="hidden" name="source_id" value="<?php echo $this->form_encode_input($source_id) . "\">" . $source_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_source_id" class="sc-ui-readonly-source_id css_source_id_line" style="<?php echo $sStyleReadLab_source_id; ?>"><?php echo $this->source_id; ?></span><span id="id_read_off_source_id" class="css_read_off_source_id" style="white-space: nowrap;<?php echo $sStyleReadInp_source_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_source_id_obj" style="" id="id_sc_field_source_id" type=text name="source_id" value="<?php echo $this->form_encode_input($source_id) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_source_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_source_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['city']))
    {
        $this->nm_new_label['city'] = "Cidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $city = $this->city;
   $sStyleHidden_city = '';
   if (isset($this->nmgp_cmp_hidden['city']) && $this->nmgp_cmp_hidden['city'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['city']);
       $sStyleHidden_city = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_city = 'display: none;';
   $sStyleReadInp_city = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['city']) && $this->nmgp_cmp_readonly['city'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['city']);
       $sStyleReadLab_city = '';
       $sStyleReadInp_city = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['city']) && $this->nmgp_cmp_hidden['city'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="city" value="<?php echo $this->form_encode_input($city) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_city_line" id="hidden_field_data_city" style="<?php echo $sStyleHidden_city; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_city_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_city_label"><span id="id_label_city"><?php echo $this->nm_new_label['city']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["city"]) &&  $this->nmgp_cmp_readonly["city"] == "on") { 

 ?>
<input type="hidden" name="city" value="<?php echo $this->form_encode_input($city) . "\">" . $city . ""; ?>
<?php } else { ?>
<span id="id_read_on_city" class="sc-ui-readonly-city css_city_line" style="<?php echo $sStyleReadLab_city; ?>"><?php echo $this->city; ?></span><span id="id_read_off_city" class="css_read_off_city" style="white-space: nowrap;<?php echo $sStyleReadInp_city; ?>">
 <input class="sc-js-input scFormObjectOdd css_city_obj" style="" id="id_sc_field_city" type=text name="city" value="<?php echo $this->form_encode_input($city) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_city_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_city_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['state']))
    {
        $this->nm_new_label['state'] = "UF";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $state = $this->state;
   $sStyleHidden_state = '';
   if (isset($this->nmgp_cmp_hidden['state']) && $this->nmgp_cmp_hidden['state'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['state']);
       $sStyleHidden_state = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_state = 'display: none;';
   $sStyleReadInp_state = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['state']) && $this->nmgp_cmp_readonly['state'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['state']);
       $sStyleReadLab_state = '';
       $sStyleReadInp_state = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['state']) && $this->nmgp_cmp_hidden['state'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="state" value="<?php echo $this->form_encode_input($state) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_state_line" id="hidden_field_data_state" style="<?php echo $sStyleHidden_state; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_state_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_state_label"><span id="id_label_state"><?php echo $this->nm_new_label['state']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["state"]) &&  $this->nmgp_cmp_readonly["state"] == "on") { 

 ?>
<input type="hidden" name="state" value="<?php echo $this->form_encode_input($state) . "\">" . $state . ""; ?>
<?php } else { ?>
<span id="id_read_on_state" class="sc-ui-readonly-state css_state_line" style="<?php echo $sStyleReadLab_state; ?>"><?php echo $this->state; ?></span><span id="id_read_off_state" class="css_read_off_state" style="white-space: nowrap;<?php echo $sStyleReadInp_state; ?>">
 <input class="sc-js-input scFormObjectOdd css_state_obj" style="" id="id_sc_field_state" type=text name="state" value="<?php echo $this->form_encode_input($state) ?>"
 size=2 maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_state_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_state_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['country_code']))
   {
       $this->nm_new_label['country_code'] = "Setor";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $country_code = $this->country_code;
   $sStyleHidden_country_code = '';
   if (isset($this->nmgp_cmp_hidden['country_code']) && $this->nmgp_cmp_hidden['country_code'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['country_code']);
       $sStyleHidden_country_code = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_country_code = 'display: none;';
   $sStyleReadInp_country_code = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['country_code']) && $this->nmgp_cmp_readonly['country_code'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['country_code']);
       $sStyleReadLab_country_code = '';
       $sStyleReadInp_country_code = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['country_code']) && $this->nmgp_cmp_hidden['country_code'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="country_code" value="<?php echo $this->form_encode_input($this->country_code) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_country_code_line" id="hidden_field_data_country_code" style="<?php echo $sStyleHidden_country_code; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_country_code_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_country_code_label"><span id="id_label_country_code"><?php echo $this->nm_new_label['country_code']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["country_code"]) &&  $this->nmgp_cmp_readonly["country_code"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code'] = array(); 
    }

   $old_value_modify_date = $this->modify_date;
   $old_value_modify_date_hora = $this->modify_date_hora;
   $old_value_phone_number = $this->phone_number;
   $old_value_alt_phone = $this->alt_phone;
   $old_value_postal_code = $this->postal_code;
   $old_value_province = $this->province;
   $old_value_date_of_birth = $this->date_of_birth;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_modify_date = $this->modify_date;
   $unformatted_value_modify_date_hora = $this->modify_date_hora;
   $unformatted_value_phone_number = $this->phone_number;
   $unformatted_value_alt_phone = $this->alt_phone;
   $unformatted_value_postal_code = $this->postal_code;
   $unformatted_value_province = $this->province;
   $unformatted_value_date_of_birth = $this->date_of_birth;

   $nm_comando = "SELECT CodigoSetor, Descricao  FROM setor  ORDER BY Descricao";

   $this->modify_date = $old_value_modify_date;
   $this->modify_date_hora = $old_value_modify_date_hora;
   $this->phone_number = $old_value_phone_number;
   $this->alt_phone = $old_value_alt_phone;
   $this->postal_code = $old_value_postal_code;
   $this->province = $old_value_province;
   $this->date_of_birth = $old_value_date_of_birth;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Ini->nm_db_unicep->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_country_code'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Ini->nm_db_unicep->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $country_code_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->country_code_1))
          {
              foreach ($this->country_code_1 as $tmp_country_code)
              {
                  if (trim($tmp_country_code) === trim($cadaselect[1])) { $country_code_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->country_code) === trim($cadaselect[1])) { $country_code_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="country_code" value="<?php echo $this->form_encode_input($country_code) . "\">" . $country_code_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_country_code();
   $x = 0 ; 
   $country_code_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->country_code_1))
          {
              foreach ($this->country_code_1 as $tmp_country_code)
              {
                  if (trim($tmp_country_code) === trim($cadaselect[1])) { $country_code_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->country_code) === trim($cadaselect[1])) { $country_code_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($country_code_look))
          {
              $country_code_look = $this->country_code;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_country_code\" class=\"css_country_code_line\" style=\"" .  $sStyleReadLab_country_code . "\">" . $this->form_encode_input($country_code_look) . "</span><span id=\"id_read_off_country_code\" class=\"css_read_off_country_code\" style=\"white-space: nowrap; " . $sStyleReadInp_country_code . "\">";
   echo " <span id=\"idAjaxSelect_country_code\"><select class=\"sc-js-input scFormObjectOdd css_country_code_obj\" style=\"\" id=\"id_sc_field_country_code\" name=\"country_code\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->country_code) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->country_code)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_country_code_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_country_code_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_country_code_dumb = ('' == $sStyleHidden_country_code) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_country_code_dumb" style="<?php echo $sStyleHidden_country_code_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">Doação</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['owner']))
   {
       $this->nm_new_label['owner'] = "Operador";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $owner = $this->owner;
   $sStyleHidden_owner = '';
   if (isset($this->nmgp_cmp_hidden['owner']) && $this->nmgp_cmp_hidden['owner'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['owner']);
       $sStyleHidden_owner = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_owner = 'display: none;';
   $sStyleReadInp_owner = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['owner']) && $this->nmgp_cmp_readonly['owner'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['owner']);
       $sStyleReadLab_owner = '';
       $sStyleReadInp_owner = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['owner']) && $this->nmgp_cmp_hidden['owner'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="owner" value="<?php echo $this->form_encode_input($this->owner) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_owner_line" id="hidden_field_data_owner" style="<?php echo $sStyleHidden_owner; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_owner_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_owner_label"><span id="id_label_owner"><?php echo $this->nm_new_label['owner']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["owner"]) &&  $this->nmgp_cmp_readonly["owner"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner'] = array(); 
    }

   $old_value_modify_date = $this->modify_date;
   $old_value_modify_date_hora = $this->modify_date_hora;
   $old_value_phone_number = $this->phone_number;
   $old_value_alt_phone = $this->alt_phone;
   $old_value_postal_code = $this->postal_code;
   $old_value_province = $this->province;
   $old_value_date_of_birth = $this->date_of_birth;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_modify_date = $this->modify_date;
   $unformatted_value_modify_date_hora = $this->modify_date_hora;
   $unformatted_value_phone_number = $this->phone_number;
   $unformatted_value_alt_phone = $this->alt_phone;
   $unformatted_value_postal_code = $this->postal_code;
   $unformatted_value_province = $this->province;
   $unformatted_value_date_of_birth = $this->date_of_birth;

   $nm_comando = "SELECT CodigoOperador, Nome FROM operador  WHERE Tipo = 'C'  AND Inativo = 0 ORDER BY Nome";

   $this->modify_date = $old_value_modify_date;
   $this->modify_date_hora = $old_value_modify_date_hora;
   $this->phone_number = $old_value_phone_number;
   $this->alt_phone = $old_value_alt_phone;
   $this->postal_code = $old_value_postal_code;
   $this->province = $old_value_province;
   $this->date_of_birth = $old_value_date_of_birth;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Ini->nm_db_unicep->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_owner'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Ini->nm_db_unicep->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $owner_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->owner_1))
          {
              foreach ($this->owner_1 as $tmp_owner)
              {
                  if (trim($tmp_owner) === trim($cadaselect[1])) { $owner_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->owner) === trim($cadaselect[1])) { $owner_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="owner" value="<?php echo $this->form_encode_input($owner) . "\">" . $owner_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_owner();
   $x = 0 ; 
   $owner_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->owner_1))
          {
              foreach ($this->owner_1 as $tmp_owner)
              {
                  if (trim($tmp_owner) === trim($cadaselect[1])) { $owner_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->owner) === trim($cadaselect[1])) { $owner_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($owner_look))
          {
              $owner_look = $this->owner;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_owner\" class=\"css_owner_line\" style=\"" .  $sStyleReadLab_owner . "\">" . $this->form_encode_input($owner_look) . "</span><span id=\"id_read_off_owner\" class=\"css_read_off_owner\" style=\"white-space: nowrap; " . $sStyleReadInp_owner . "\">";
   echo " <span id=\"idAjaxSelect_owner\"><select class=\"sc-js-input scFormObjectOdd css_owner_obj\" style=\"\" id=\"id_sc_field_owner\" name=\"owner\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->owner) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->owner)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_owner_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_owner_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['vendor_lead_code']))
   {
       $this->nm_new_label['vendor_lead_code'] = "Auditado";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $vendor_lead_code = $this->vendor_lead_code;
   $sStyleHidden_vendor_lead_code = '';
   if (isset($this->nmgp_cmp_hidden['vendor_lead_code']) && $this->nmgp_cmp_hidden['vendor_lead_code'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['vendor_lead_code']);
       $sStyleHidden_vendor_lead_code = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_vendor_lead_code = 'display: none;';
   $sStyleReadInp_vendor_lead_code = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['vendor_lead_code']) && $this->nmgp_cmp_readonly['vendor_lead_code'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['vendor_lead_code']);
       $sStyleReadLab_vendor_lead_code = '';
       $sStyleReadInp_vendor_lead_code = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['vendor_lead_code']) && $this->nmgp_cmp_hidden['vendor_lead_code'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="vendor_lead_code" value="<?php echo $this->form_encode_input($this->vendor_lead_code) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_vendor_lead_code_line" id="hidden_field_data_vendor_lead_code" style="<?php echo $sStyleHidden_vendor_lead_code; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_vendor_lead_code_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_vendor_lead_code_label"><span id="id_label_vendor_lead_code"><?php echo $this->nm_new_label['vendor_lead_code']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["vendor_lead_code"]) &&  $this->nmgp_cmp_readonly["vendor_lead_code"] == "on") { 

$vendor_lead_code_look = "";
 if ($this->vendor_lead_code == "1") { $vendor_lead_code_look .= "Agendado" ;} 
 if ($this->vendor_lead_code == "2") { $vendor_lead_code_look .= "Realizado" ;} 
 if ($this->vendor_lead_code == "3") { $vendor_lead_code_look .= "Descartado" ;} 
 if (empty($vendor_lead_code_look)) { $vendor_lead_code_look = $this->vendor_lead_code; }
?>
<input type="hidden" name="vendor_lead_code" value="<?php echo $this->form_encode_input($vendor_lead_code) . "\">" . $vendor_lead_code_look . ""; ?>
<?php } else { ?>
<?php

$vendor_lead_code_look = "";
 if ($this->vendor_lead_code == "1") { $vendor_lead_code_look .= "Agendado" ;} 
 if ($this->vendor_lead_code == "2") { $vendor_lead_code_look .= "Realizado" ;} 
 if ($this->vendor_lead_code == "3") { $vendor_lead_code_look .= "Descartado" ;} 
 if (empty($vendor_lead_code_look)) { $vendor_lead_code_look = $this->vendor_lead_code; }
?>
<span id="id_read_on_vendor_lead_code" class="css_vendor_lead_code_line"  style="<?php echo $sStyleReadLab_vendor_lead_code; ?>"><?php echo $this->form_encode_input($vendor_lead_code_look); ?></span><span id="id_read_off_vendor_lead_code" class="css_read_off_vendor_lead_code" style="white-space: nowrap; <?php echo $sStyleReadInp_vendor_lead_code; ?>">
 <span id="idAjaxSelect_vendor_lead_code"><select class="sc-js-input scFormObjectOdd css_vendor_lead_code_obj" style="" id="id_sc_field_vendor_lead_code" name="vendor_lead_code" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="1" <?php  if ($this->vendor_lead_code == "1") { echo " selected" ;} ?>>Agendado</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_vendor_lead_code'][] = '1'; ?>
 <option  value="2" <?php  if ($this->vendor_lead_code == "2") { echo " selected" ;} ?>>Realizado</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_vendor_lead_code'][] = '2'; ?>
 <option  value="3" <?php  if ($this->vendor_lead_code == "3") { echo " selected" ;} ?>>Descartado</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_vendor_lead_code'][] = '3'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_vendor_lead_code_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_vendor_lead_code_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['province']))
    {
        $this->nm_new_label['province'] = "Valor da doação";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $province = $this->province;
   $sStyleHidden_province = '';
   if (isset($this->nmgp_cmp_hidden['province']) && $this->nmgp_cmp_hidden['province'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['province']);
       $sStyleHidden_province = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_province = 'display: none;';
   $sStyleReadInp_province = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['province']) && $this->nmgp_cmp_readonly['province'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['province']);
       $sStyleReadLab_province = '';
       $sStyleReadInp_province = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['province']) && $this->nmgp_cmp_hidden['province'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="province" value="<?php echo $this->form_encode_input($province) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_province_line" id="hidden_field_data_province" style="<?php echo $sStyleHidden_province; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_province_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_province_label"><span id="id_label_province"><?php echo $this->nm_new_label['province']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["province"]) &&  $this->nmgp_cmp_readonly["province"] == "on") { 

 ?>
<input type="hidden" name="province" value="<?php echo $this->form_encode_input($province) . "\">" . $province . ""; ?>
<?php } else { ?>
<span id="id_read_on_province" class="sc-ui-readonly-province css_province_line" style="<?php echo $sStyleReadLab_province; ?>"><?php echo $this->province; ?></span><span id="id_read_off_province" class="css_read_off_province" style="white-space: nowrap;<?php echo $sStyleReadInp_province; ?>">
 <input class="sc-js-input scFormObjectOdd css_province_obj" style="" id="id_sc_field_province" type=text name="province" value="<?php echo $this->form_encode_input($province) ?>"
 size=6 alt="{datatype: 'decimal', maxLength: 6, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['province']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['province']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['province']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['province']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_province_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_province_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['date_of_birth']))
    {
        $this->nm_new_label['date_of_birth'] = "Data de Vencto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $date_of_birth = $this->date_of_birth;
   $sStyleHidden_date_of_birth = '';
   if (isset($this->nmgp_cmp_hidden['date_of_birth']) && $this->nmgp_cmp_hidden['date_of_birth'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['date_of_birth']);
       $sStyleHidden_date_of_birth = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_date_of_birth = 'display: none;';
   $sStyleReadInp_date_of_birth = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['date_of_birth']) && $this->nmgp_cmp_readonly['date_of_birth'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['date_of_birth']);
       $sStyleReadLab_date_of_birth = '';
       $sStyleReadInp_date_of_birth = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['date_of_birth']) && $this->nmgp_cmp_hidden['date_of_birth'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="date_of_birth" value="<?php echo $this->form_encode_input($date_of_birth) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_date_of_birth_line" id="hidden_field_data_date_of_birth" style="<?php echo $sStyleHidden_date_of_birth; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_date_of_birth_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_date_of_birth_label"><span id="id_label_date_of_birth"><?php echo $this->nm_new_label['date_of_birth']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["date_of_birth"]) &&  $this->nmgp_cmp_readonly["date_of_birth"] == "on") { 

 ?>
<input type="hidden" name="date_of_birth" value="<?php echo $this->form_encode_input($date_of_birth) . "\">" . $date_of_birth . ""; ?>
<?php } else { ?>
<span id="id_read_on_date_of_birth" class="sc-ui-readonly-date_of_birth css_date_of_birth_line" style="<?php echo $sStyleReadLab_date_of_birth; ?>"><?php echo $date_of_birth; ?></span><span id="id_read_off_date_of_birth" class="css_read_off_date_of_birth" style="white-space: nowrap;<?php echo $sStyleReadInp_date_of_birth; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_date_of_birth_obj" style="" id="id_sc_field_date_of_birth" type=text name="date_of_birth" value="<?php echo $this->form_encode_input($date_of_birth) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['date_of_birth']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['date_of_birth']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['date_of_birth']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_date_of_birth_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_date_of_birth_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['title']))
   {
       $this->nm_new_label['title'] = "Mensal?";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $title = $this->title;
   $sStyleHidden_title = '';
   if (isset($this->nmgp_cmp_hidden['title']) && $this->nmgp_cmp_hidden['title'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['title']);
       $sStyleHidden_title = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_title = 'display: none;';
   $sStyleReadInp_title = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['title']) && $this->nmgp_cmp_readonly['title'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['title']);
       $sStyleReadLab_title = '';
       $sStyleReadInp_title = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['title']) && $this->nmgp_cmp_hidden['title'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="title" value="<?php echo $this->form_encode_input($this->title) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_title_line" id="hidden_field_data_title" style="<?php echo $sStyleHidden_title; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_title_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_title_label"><span id="id_label_title"><?php echo $this->nm_new_label['title']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["title"]) &&  $this->nmgp_cmp_readonly["title"] == "on") { 

$title_look = "";
 if ($this->title == "S") { $title_look .= "Sim" ;} 
 if ($this->title == "N") { $title_look .= "Não" ;} 
 if (empty($title_look)) { $title_look = $this->title; }
?>
<input type="hidden" name="title" value="<?php echo $this->form_encode_input($title) . "\">" . $title_look . ""; ?>
<?php } else { ?>
<?php

$title_look = "";
 if ($this->title == "S") { $title_look .= "Sim" ;} 
 if ($this->title == "N") { $title_look .= "Não" ;} 
 if (empty($title_look)) { $title_look = $this->title; }
?>
<span id="id_read_on_title" class="css_title_line"  style="<?php echo $sStyleReadLab_title; ?>"><?php echo $this->form_encode_input($title_look); ?></span><span id="id_read_off_title" class="css_read_off_title" style="white-space: nowrap; <?php echo $sStyleReadInp_title; ?>">
 <span id="idAjaxSelect_title"><select class="sc-js-input scFormObjectOdd css_title_obj" style="" id="id_sc_field_title" name="title" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="S" <?php  if ($this->title == "S") { echo " selected" ;} ?>>Sim</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_title'][] = 'S'; ?>
 <option  value="N" <?php  if ($this->title == "N") { echo " selected" ;} ?><?php  if (empty($this->title)) { echo " selected" ;} ?>>Não</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['Lookup_title'][] = 'N'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_title_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_title_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-18", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-19", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-20", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-21", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = 'hidden';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
$(window).bind("load", function() {
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = '';";
      }
  }
?>
});
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_vicidial_list_auditoria_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_vicidial_list_auditoria_mob");
 parent.scAjaxDetailHeight("form_vicidial_list_auditoria_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_vicidial_list_auditoria_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_vicidial_list_auditoria_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-1").length && $("#sc_b_upd_t.sc-unique-btn-1").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-5").length && $("#sc_b_upd_b.sc-unique-btn-5").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-11").length && $("#sc_b_upd_t.sc-unique-btn-11").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-2").length && $("#sc_b_sai_t.sc-unique-btn-2").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-6").length && $("#sc_b_sai_b.sc-unique-btn-6").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-7").length && $("#sc_b_sai_b.sc-unique-btn-7").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-8").length && $("#sc_b_sai_b.sc-unique-btn-8").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-15").length && $("#sc_b_sai_t.sc-unique-btn-15").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-16").length && $("#sc_b_sai_t.sc-unique-btn-16").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-17").length && $("#sc_b_sai_t.sc-unique-btn-17").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-9").length && $("#sc_b_new_t.sc-unique-btn-9").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-10").length && $("#sc_b_ins_t.sc-unique-btn-10").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-12").length && $("#sc_b_del_t.sc-unique-btn-12").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-13").length && $("#sys_separator.sc-unique-btn-13").is(":visible")) {
			return false;
			 return;
		}
	}
	function scBtnFn_sys_format_copy() {
		if ($("#sc_b_clone_t.sc-unique-btn-14").length && $("#sc_b_clone_t.sc-unique-btn-14").is(":visible")) {
			nm_move ('clone');
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-18").length && $("#sc_b_ini_b.sc-unique-btn-18").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-19").length && $("#sc_b_ret_b.sc-unique-btn-19").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-20").length && $("#sc_b_avc_b.sc-unique-btn-20").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-21").length && $("#sc_b_fim_b.sc-unique-btn-21").is(":visible")) {
			nm_move ('final');
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
