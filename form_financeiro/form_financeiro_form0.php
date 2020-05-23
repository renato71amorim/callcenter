<?php
class form_financeiro_form extends form_financeiro_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - financeiro"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - financeiro"); } ?></TITLE>
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
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
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
.css_read_off_dataemissao_ button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_datavencimento_ button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_timestamp_ button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_ultimocontato_ button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['embutida_pdf']))
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
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_financeiro/form_financeiro_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_financeiro_sajax_js.php");
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
<?php

include_once('form_financeiro_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {


  scJQGeneralAdd();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
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
 include_once("form_financeiro_js0.php");
?>
<script type="text/javascript"> 
  sc_quant_excl = <?php echo count($sc_check_excl); ?>; 
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
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
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
<?php
$_SESSION['scriptcase']['error_span_title']['form_financeiro'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_financeiro'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($this->Embutida_form) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-1", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-2", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-3", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-4", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-5", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-6", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "R")
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
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
   if (!isset($this->nmgp_cmp_hidden['codigoidentificador_']))
   {
       $this->nmgp_cmp_hidden['codigoidentificador_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
$labelRowCount = 0;
?>
   <tr class="sc-ui-header-row" id="sc-id-fixed-headers-row-<?php echo $labelRowCount++ ?>">
<?php
$orderColName = '';
$orderColOrient = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


       if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") { $Col_span = " colspan=2"; }
    if (!$this->Embutida_form && $this->nmgp_opcao == "novo") { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="scFormLabelOddMult"  width="10">  </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="scFormLabelOddMult"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['codigoidentificador_']) && $this->nmgp_cmp_hidden['codigoidentificador_'] == 'off') { $sStyleHidden_codigoidentificador_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['codigoidentificador_']) || $this->nmgp_cmp_hidden['codigoidentificador_'] == 'on') {
      if (!isset($this->nm_new_label['codigoidentificador_'])) {
          $this->nm_new_label['codigoidentificador_'] = "Codigo Identificador"; } ?>

    <TD class="scFormLabelOddMult css_codigoidentificador__label" id="hidden_field_label_codigoidentificador_" style="<?php echo $sStyleHidden_codigoidentificador_; ?>" > <?php echo $this->nm_new_label['codigoidentificador_'] ?> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['codigo_']) && $this->nmgp_cmp_hidden['codigo_'] == 'off') { $sStyleHidden_codigo_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['codigo_']) || $this->nmgp_cmp_hidden['codigo_'] == 'on') {
      if (!isset($this->nm_new_label['codigo_'])) {
          $this->nm_new_label['codigo_'] = "Codigo"; } ?>

    <TD class="scFormLabelOddMult css_codigo__label" id="hidden_field_label_codigo_" style="<?php echo $sStyleHidden_codigo_; ?>" > <?php echo $this->nm_new_label['codigo_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['operadoravulso_']) && $this->nmgp_cmp_hidden['operadoravulso_'] == 'off') { $sStyleHidden_operadoravulso_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['operadoravulso_']) || $this->nmgp_cmp_hidden['operadoravulso_'] == 'on') {
      if (!isset($this->nm_new_label['operadoravulso_'])) {
          $this->nm_new_label['operadoravulso_'] = "Op Avulso"; } ?>

    <TD class="scFormLabelOddMult css_operadoravulso__label" id="hidden_field_label_operadoravulso_" style="<?php echo $sStyleHidden_operadoravulso_; ?>" > <?php echo $this->nm_new_label['operadoravulso_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['valoravulso_']) && $this->nmgp_cmp_hidden['valoravulso_'] == 'off') { $sStyleHidden_valoravulso_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['valoravulso_']) || $this->nmgp_cmp_hidden['valoravulso_'] == 'on') {
      if (!isset($this->nm_new_label['valoravulso_'])) {
          $this->nm_new_label['valoravulso_'] = "Vlr Avulso"; } ?>

    <TD class="scFormLabelOddMult css_valoravulso__label" id="hidden_field_label_valoravulso_" style="<?php echo $sStyleHidden_valoravulso_; ?>" > <?php echo $this->nm_new_label['valoravulso_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['dataemissao_']) && $this->nmgp_cmp_hidden['dataemissao_'] == 'off') { $sStyleHidden_dataemissao_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['dataemissao_']) || $this->nmgp_cmp_hidden['dataemissao_'] == 'on') {
      if (!isset($this->nm_new_label['dataemissao_'])) {
          $this->nm_new_label['dataemissao_'] = "Emissão"; } ?>

    <TD class="scFormLabelOddMult css_dataemissao__label" id="hidden_field_label_dataemissao_" style="<?php echo $sStyleHidden_dataemissao_; ?>" > <?php echo $this->nm_new_label['dataemissao_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['datavencimento_']) && $this->nmgp_cmp_hidden['datavencimento_'] == 'off') { $sStyleHidden_datavencimento_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['datavencimento_']) || $this->nmgp_cmp_hidden['datavencimento_'] == 'on') {
      if (!isset($this->nm_new_label['datavencimento_'])) {
          $this->nm_new_label['datavencimento_'] = "Vencto"; } ?>

    <TD class="scFormLabelOddMult css_datavencimento__label" id="hidden_field_label_datavencimento_" style="<?php echo $sStyleHidden_datavencimento_; ?>" > <?php echo $this->nm_new_label['datavencimento_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['obstemp_']) && $this->nmgp_cmp_hidden['obstemp_'] == 'off') { $sStyleHidden_obstemp_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['obstemp_']) || $this->nmgp_cmp_hidden['obstemp_'] == 'on') {
      if (!isset($this->nm_new_label['obstemp_'])) {
          $this->nm_new_label['obstemp_'] = "Obs Temp"; } ?>

    <TD class="scFormLabelOddMult css_obstemp__label" id="hidden_field_label_obstemp_" style="<?php echo $sStyleHidden_obstemp_; ?>" > <?php echo $this->nm_new_label['obstemp_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['status_']) && $this->nmgp_cmp_hidden['status_'] == 'off') { $sStyleHidden_status_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['status_']) || $this->nmgp_cmp_hidden['status_'] == 'on') {
      if (!isset($this->nm_new_label['status_'])) {
          $this->nm_new_label['status_'] = "Status"; } ?>

    <TD class="scFormLabelOddMult css_status__label" id="hidden_field_label_status_" style="<?php echo $sStyleHidden_status_; ?>" > <?php echo $this->nm_new_label['status_'] ?> </TD>
   <?php } ?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert; 
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_form_financeiro);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_financeiro = $this->form_vert_form_financeiro;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_financeiro))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['codigoidentificador_']))
           {
               $this->nmgp_cmp_readonly['codigoidentificador_'] = 'on';
           }
   foreach ($this->form_vert_form_financeiro as $sc_seq_vert => $sc_lixo)
   {
       $this->loadRecordState($sc_seq_vert);
       $this->numerorecibo_ = $this->form_vert_form_financeiro[$sc_seq_vert]['numerorecibo_'];
       $this->numeroserie_ = $this->form_vert_form_financeiro[$sc_seq_vert]['numeroserie_'];
       $this->operadormensal_ = $this->form_vert_form_financeiro[$sc_seq_vert]['operadormensal_'];
       $this->valormensal_ = $this->form_vert_form_financeiro[$sc_seq_vert]['valormensal_'];
       $this->cobrador_ = $this->form_vert_form_financeiro[$sc_seq_vert]['cobrador_'];
       $this->obs_ = $this->form_vert_form_financeiro[$sc_seq_vert]['obs_'];
       $this->nomerecibo_ = $this->form_vert_form_financeiro[$sc_seq_vert]['nomerecibo_'];
       $this->tipocobranca_ = $this->form_vert_form_financeiro[$sc_seq_vert]['tipocobranca_'];
       $this->mesmensal_ = $this->form_vert_form_financeiro[$sc_seq_vert]['mesmensal_'];
       $this->usuario_ = $this->form_vert_form_financeiro[$sc_seq_vert]['usuario_'];
       $this->parceiro_ = $this->form_vert_form_financeiro[$sc_seq_vert]['parceiro_'];
       $this->timestamp_ = $this->form_vert_form_financeiro[$sc_seq_vert]['timestamp_'];
       $this->codigocompanhia_ = $this->form_vert_form_financeiro[$sc_seq_vert]['codigocompanhia_'];
       $this->autorizado_ = $this->form_vert_form_financeiro[$sc_seq_vert]['autorizado_'];
       $this->audioautorizacao_ = $this->form_vert_form_financeiro[$sc_seq_vert]['audioautorizacao_'];
       $this->ultimocontato_ = $this->form_vert_form_financeiro[$sc_seq_vert]['ultimocontato_'];
       $this->motivocancelamento_ = $this->form_vert_form_financeiro[$sc_seq_vert]['motivocancelamento_'];
       $this->agradecimento_ = $this->form_vert_form_financeiro[$sc_seq_vert]['agradecimento_'];
       $this->auditado_ = $this->form_vert_form_financeiro[$sc_seq_vert]['auditado_'];
       $this->tipodoacao_ = $this->form_vert_form_financeiro[$sc_seq_vert]['tipodoacao_'];
       $this->parcelas_ = $this->form_vert_form_financeiro[$sc_seq_vert]['parcelas_'];
       $this->codigoparcelas_ = $this->form_vert_form_financeiro[$sc_seq_vert]['codigoparcelas_'];
       $this->servidoraudio_ = $this->form_vert_form_financeiro[$sc_seq_vert]['servidoraudio_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['codigoidentificador_'] = true;
           $this->nmgp_cmp_readonly['codigo_'] = true;
           $this->nmgp_cmp_readonly['operadoravulso_'] = true;
           $this->nmgp_cmp_readonly['valoravulso_'] = true;
           $this->nmgp_cmp_readonly['dataemissao_'] = true;
           $this->nmgp_cmp_readonly['datavencimento_'] = true;
           $this->nmgp_cmp_readonly['obstemp_'] = true;
           $this->nmgp_cmp_readonly['status_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['codigoidentificador_']) || $this->nmgp_cmp_readonly['codigoidentificador_'] != "on") {$this->nmgp_cmp_readonly['codigoidentificador_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['codigo_']) || $this->nmgp_cmp_readonly['codigo_'] != "on") {$this->nmgp_cmp_readonly['codigo_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['operadoravulso_']) || $this->nmgp_cmp_readonly['operadoravulso_'] != "on") {$this->nmgp_cmp_readonly['operadoravulso_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['valoravulso_']) || $this->nmgp_cmp_readonly['valoravulso_'] != "on") {$this->nmgp_cmp_readonly['valoravulso_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dataemissao_']) || $this->nmgp_cmp_readonly['dataemissao_'] != "on") {$this->nmgp_cmp_readonly['dataemissao_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['datavencimento_']) || $this->nmgp_cmp_readonly['datavencimento_'] != "on") {$this->nmgp_cmp_readonly['datavencimento_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['obstemp_']) || $this->nmgp_cmp_readonly['obstemp_'] != "on") {$this->nmgp_cmp_readonly['obstemp_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['status_']) || $this->nmgp_cmp_readonly['status_'] != "on") {$this->nmgp_cmp_readonly['status_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->codigoidentificador_ = $this->form_vert_form_financeiro[$sc_seq_vert]['codigoidentificador_']; 
       $codigoidentificador_ = $this->codigoidentificador_; 
       if (!isset($this->nmgp_cmp_hidden['codigoidentificador_']))
       {
           $this->nmgp_cmp_hidden['codigoidentificador_'] = 'off';
       }
       $sStyleHidden_codigoidentificador_ = '';
       if (isset($sCheckRead_codigoidentificador_))
       {
           unset($sCheckRead_codigoidentificador_);
       }
       if (isset($this->nmgp_cmp_readonly['codigoidentificador_']))
       {
           $sCheckRead_codigoidentificador_ = $this->nmgp_cmp_readonly['codigoidentificador_'];
       }
       if (isset($this->nmgp_cmp_hidden['codigoidentificador_']) && $this->nmgp_cmp_hidden['codigoidentificador_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['codigoidentificador_']);
           $sStyleHidden_codigoidentificador_ = 'display: none;';
       }
       $bTestReadOnly_codigoidentificador_ = true;
       $sStyleReadLab_codigoidentificador_ = 'display: none;';
       $sStyleReadInp_codigoidentificador_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["codigoidentificador_"]) &&  $this->nmgp_cmp_readonly["codigoidentificador_"] == "on"))
       {
           $bTestReadOnly_codigoidentificador_ = false;
           unset($this->nmgp_cmp_readonly['codigoidentificador_']);
           $sStyleReadLab_codigoidentificador_ = '';
           $sStyleReadInp_codigoidentificador_ = 'display: none;';
       }
       $this->codigo_ = $this->form_vert_form_financeiro[$sc_seq_vert]['codigo_']; 
       $codigo_ = $this->codigo_; 
       $sStyleHidden_codigo_ = '';
       if (isset($sCheckRead_codigo_))
       {
           unset($sCheckRead_codigo_);
       }
       if (isset($this->nmgp_cmp_readonly['codigo_']))
       {
           $sCheckRead_codigo_ = $this->nmgp_cmp_readonly['codigo_'];
       }
       if (isset($this->nmgp_cmp_hidden['codigo_']) && $this->nmgp_cmp_hidden['codigo_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['codigo_']);
           $sStyleHidden_codigo_ = 'display: none;';
       }
       $bTestReadOnly_codigo_ = true;
       $sStyleReadLab_codigo_ = 'display: none;';
       $sStyleReadInp_codigo_ = '';
       if (isset($this->nmgp_cmp_readonly['codigo_']) && $this->nmgp_cmp_readonly['codigo_'] == 'on')
       {
           $bTestReadOnly_codigo_ = false;
           unset($this->nmgp_cmp_readonly['codigo_']);
           $sStyleReadLab_codigo_ = '';
           $sStyleReadInp_codigo_ = 'display: none;';
       }
       $this->operadoravulso_ = $this->form_vert_form_financeiro[$sc_seq_vert]['operadoravulso_']; 
       $operadoravulso_ = $this->operadoravulso_; 
       $sStyleHidden_operadoravulso_ = '';
       if (isset($sCheckRead_operadoravulso_))
       {
           unset($sCheckRead_operadoravulso_);
       }
       if (isset($this->nmgp_cmp_readonly['operadoravulso_']))
       {
           $sCheckRead_operadoravulso_ = $this->nmgp_cmp_readonly['operadoravulso_'];
       }
       if (isset($this->nmgp_cmp_hidden['operadoravulso_']) && $this->nmgp_cmp_hidden['operadoravulso_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['operadoravulso_']);
           $sStyleHidden_operadoravulso_ = 'display: none;';
       }
       $bTestReadOnly_operadoravulso_ = true;
       $sStyleReadLab_operadoravulso_ = 'display: none;';
       $sStyleReadInp_operadoravulso_ = '';
       if (isset($this->nmgp_cmp_readonly['operadoravulso_']) && $this->nmgp_cmp_readonly['operadoravulso_'] == 'on')
       {
           $bTestReadOnly_operadoravulso_ = false;
           unset($this->nmgp_cmp_readonly['operadoravulso_']);
           $sStyleReadLab_operadoravulso_ = '';
           $sStyleReadInp_operadoravulso_ = 'display: none;';
       }
       $this->valoravulso_ = $this->form_vert_form_financeiro[$sc_seq_vert]['valoravulso_']; 
       $valoravulso_ = $this->valoravulso_; 
       $sStyleHidden_valoravulso_ = '';
       if (isset($sCheckRead_valoravulso_))
       {
           unset($sCheckRead_valoravulso_);
       }
       if (isset($this->nmgp_cmp_readonly['valoravulso_']))
       {
           $sCheckRead_valoravulso_ = $this->nmgp_cmp_readonly['valoravulso_'];
       }
       if (isset($this->nmgp_cmp_hidden['valoravulso_']) && $this->nmgp_cmp_hidden['valoravulso_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['valoravulso_']);
           $sStyleHidden_valoravulso_ = 'display: none;';
       }
       $bTestReadOnly_valoravulso_ = true;
       $sStyleReadLab_valoravulso_ = 'display: none;';
       $sStyleReadInp_valoravulso_ = '';
       if (isset($this->nmgp_cmp_readonly['valoravulso_']) && $this->nmgp_cmp_readonly['valoravulso_'] == 'on')
       {
           $bTestReadOnly_valoravulso_ = false;
           unset($this->nmgp_cmp_readonly['valoravulso_']);
           $sStyleReadLab_valoravulso_ = '';
           $sStyleReadInp_valoravulso_ = 'display: none;';
       }
       $this->dataemissao_ = $this->form_vert_form_financeiro[$sc_seq_vert]['dataemissao_']; 
       $dataemissao_ = $this->dataemissao_; 
       $sStyleHidden_dataemissao_ = '';
       if (isset($sCheckRead_dataemissao_))
       {
           unset($sCheckRead_dataemissao_);
       }
       if (isset($this->nmgp_cmp_readonly['dataemissao_']))
       {
           $sCheckRead_dataemissao_ = $this->nmgp_cmp_readonly['dataemissao_'];
       }
       if (isset($this->nmgp_cmp_hidden['dataemissao_']) && $this->nmgp_cmp_hidden['dataemissao_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dataemissao_']);
           $sStyleHidden_dataemissao_ = 'display: none;';
       }
       $bTestReadOnly_dataemissao_ = true;
       $sStyleReadLab_dataemissao_ = 'display: none;';
       $sStyleReadInp_dataemissao_ = '';
       if (isset($this->nmgp_cmp_readonly['dataemissao_']) && $this->nmgp_cmp_readonly['dataemissao_'] == 'on')
       {
           $bTestReadOnly_dataemissao_ = false;
           unset($this->nmgp_cmp_readonly['dataemissao_']);
           $sStyleReadLab_dataemissao_ = '';
           $sStyleReadInp_dataemissao_ = 'display: none;';
       }
       $this->datavencimento_ = $this->form_vert_form_financeiro[$sc_seq_vert]['datavencimento_']; 
       $datavencimento_ = $this->datavencimento_; 
       $sStyleHidden_datavencimento_ = '';
       if (isset($sCheckRead_datavencimento_))
       {
           unset($sCheckRead_datavencimento_);
       }
       if (isset($this->nmgp_cmp_readonly['datavencimento_']))
       {
           $sCheckRead_datavencimento_ = $this->nmgp_cmp_readonly['datavencimento_'];
       }
       if (isset($this->nmgp_cmp_hidden['datavencimento_']) && $this->nmgp_cmp_hidden['datavencimento_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['datavencimento_']);
           $sStyleHidden_datavencimento_ = 'display: none;';
       }
       $bTestReadOnly_datavencimento_ = true;
       $sStyleReadLab_datavencimento_ = 'display: none;';
       $sStyleReadInp_datavencimento_ = '';
       if (isset($this->nmgp_cmp_readonly['datavencimento_']) && $this->nmgp_cmp_readonly['datavencimento_'] == 'on')
       {
           $bTestReadOnly_datavencimento_ = false;
           unset($this->nmgp_cmp_readonly['datavencimento_']);
           $sStyleReadLab_datavencimento_ = '';
           $sStyleReadInp_datavencimento_ = 'display: none;';
       }
       $this->obstemp_ = $this->form_vert_form_financeiro[$sc_seq_vert]['obstemp_']; 
       $obstemp_ = $this->obstemp_; 
       $sStyleHidden_obstemp_ = '';
       if (isset($sCheckRead_obstemp_))
       {
           unset($sCheckRead_obstemp_);
       }
       if (isset($this->nmgp_cmp_readonly['obstemp_']))
       {
           $sCheckRead_obstemp_ = $this->nmgp_cmp_readonly['obstemp_'];
       }
       if (isset($this->nmgp_cmp_hidden['obstemp_']) && $this->nmgp_cmp_hidden['obstemp_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['obstemp_']);
           $sStyleHidden_obstemp_ = 'display: none;';
       }
       $bTestReadOnly_obstemp_ = true;
       $sStyleReadLab_obstemp_ = 'display: none;';
       $sStyleReadInp_obstemp_ = '';
       if (isset($this->nmgp_cmp_readonly['obstemp_']) && $this->nmgp_cmp_readonly['obstemp_'] == 'on')
       {
           $bTestReadOnly_obstemp_ = false;
           unset($this->nmgp_cmp_readonly['obstemp_']);
           $sStyleReadLab_obstemp_ = '';
           $sStyleReadInp_obstemp_ = 'display: none;';
       }
       $this->status_ = $this->form_vert_form_financeiro[$sc_seq_vert]['status_']; 
       $status_ = $this->status_; 
       $sStyleHidden_status_ = '';
       if (isset($sCheckRead_status_))
       {
           unset($sCheckRead_status_);
       }
       if (isset($this->nmgp_cmp_readonly['status_']))
       {
           $sCheckRead_status_ = $this->nmgp_cmp_readonly['status_'];
       }
       if (isset($this->nmgp_cmp_hidden['status_']) && $this->nmgp_cmp_hidden['status_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['status_']);
           $sStyleHidden_status_ = 'display: none;';
       }
       $bTestReadOnly_status_ = true;
       $sStyleReadLab_status_ = 'display: none;';
       $sStyleReadInp_status_ = '';
       if (isset($this->nmgp_cmp_readonly['status_']) && $this->nmgp_cmp_readonly['status_'] == 'on')
       {
           $bTestReadOnly_status_ = false;
           unset($this->nmgp_cmp_readonly['status_']);
           $sStyleReadLab_status_ = '';
           $sStyleReadInp_status_ = 'display: none;';
       }

       $nm_cor_fun_vert = ($nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?>>


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\""; if (in_array($sc_seq_vert, $sc_check_excl)) { echo " checked";} ?> onclick="if (this.checked) {sc_quant_excl++; } else {sc_quant_excl--; }" class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if (!$this->Embutida_form && $this->nmgp_opcao == "novo") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\"" ; if (in_array($sc_seq_vert, $sc_check_incl) || !empty($this->nm_todas_criticas)) { echo " checked ";} ?> class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['delete'] == "off") {
        $sDisplayDelete = 'display: none';
    }
    else {
        $sDisplayDelete = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayDelete. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['update'] == "off") {
        $sDisplayUpdate = 'display: none';
    }
    else {
        $sDisplayUpdate = '';
    }
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayUpdate. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = $sDisplayUpdate;
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_financeiro_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_financeiro_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_financeiro_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_financeiro_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_financeiro_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_financeiro_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['codigoidentificador_']) && $this->nmgp_cmp_hidden['codigoidentificador_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigoidentificador_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($codigoidentificador_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_codigoidentificador__line" id="hidden_field_data_codigoidentificador_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_codigoidentificador_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_codigoidentificador__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_codigoidentificador_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["codigoidentificador_"]) &&  $this->nmgp_cmp_readonly["codigoidentificador_"] == "on")) { 

 ?>
<input type="hidden" name="codigoidentificador_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($codigoidentificador_) . "\"><span id=\"id_ajax_label_codigoidentificador_" . $sc_seq_vert . "\">" . $codigoidentificador_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_codigoidentificador_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-codigoidentificador_<?php echo $sc_seq_vert ?> css_codigoidentificador__line" style="<?php echo $sStyleReadLab_codigoidentificador_; ?>"><?php echo $this->codigoidentificador_; ?></span><span id="id_read_off_codigoidentificador_<?php echo $sc_seq_vert ?>" class="css_read_off_codigoidentificador_" style="white-space: nowrap;<?php echo $sStyleReadInp_codigoidentificador_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_codigoidentificador__obj" style="" id="id_sc_field_codigoidentificador_<?php echo $sc_seq_vert ?>" type=text name="codigoidentificador_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($codigoidentificador_) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigoidentificador_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigoidentificador_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigoidentificador_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigoidentificador_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigoidentificador_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['codigo_']) && $this->nmgp_cmp_hidden['codigo_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($codigo_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_codigo__line" id="hidden_field_data_codigo_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_codigo_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_codigo__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_codigo_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codigo_"]) &&  $this->nmgp_cmp_readonly["codigo_"] == "on") { 

 ?>
<input type="hidden" name="codigo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($codigo_) . "\">" . $codigo_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_codigo_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-codigo_<?php echo $sc_seq_vert ?> css_codigo__line" style="<?php echo $sStyleReadLab_codigo_; ?>"><?php echo $this->codigo_; ?></span><span id="id_read_off_codigo_<?php echo $sc_seq_vert ?>" class="css_read_off_codigo_" style="white-space: nowrap;<?php echo $sStyleReadInp_codigo_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_codigo__obj" style="" id="id_sc_field_codigo_<?php echo $sc_seq_vert ?>" type=text name="codigo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($codigo_) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigo_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigo_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigo_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigo_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigo_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['operadoravulso_']) && $this->nmgp_cmp_hidden['operadoravulso_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="operadoravulso_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->operadoravulso_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_operadoravulso__line" id="hidden_field_data_operadoravulso_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_operadoravulso_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_operadoravulso__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_operadoravulso_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["operadoravulso_"]) &&  $this->nmgp_cmp_readonly["operadoravulso_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_'] = array(); 
    }

   $old_value_codigoidentificador_ = $this->codigoidentificador_;
   $old_value_codigo_ = $this->codigo_;
   $old_value_valoravulso_ = $this->valoravulso_;
   $old_value_dataemissao_ = $this->dataemissao_;
   $old_value_datavencimento_ = $this->datavencimento_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_codigoidentificador_ = $this->codigoidentificador_;
   $unformatted_value_codigo_ = $this->codigo_;
   $unformatted_value_valoravulso_ = $this->valoravulso_;
   $unformatted_value_dataemissao_ = $this->dataemissao_;
   $unformatted_value_datavencimento_ = $this->datavencimento_;

   $nm_comando = "SELECT CodigoOperador, Nome  FROM operador  WHERE tipo = 'C' AND inativo = 0 ORDER BY CodigoOperador";

   $this->codigoidentificador_ = $old_value_codigoidentificador_;
   $this->codigo_ = $old_value_codigo_;
   $this->valoravulso_ = $old_value_valoravulso_;
   $this->dataemissao_ = $old_value_dataemissao_;
   $this->datavencimento_ = $old_value_datavencimento_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['Lookup_operadoravulso_'][] = $rs->fields[0];
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
   $operadoravulso__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->operadoravulso__1))
          {
              foreach ($this->operadoravulso__1 as $tmp_operadoravulso_)
              {
                  if (trim($tmp_operadoravulso_) === trim($cadaselect[1])) { $operadoravulso__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->operadoravulso_) === trim($cadaselect[1])) { $operadoravulso__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="operadoravulso_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($operadoravulso_) . "\">" . $operadoravulso__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_operadoravulso_();
   $x = 0 ; 
   $operadoravulso__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->operadoravulso__1))
          {
              foreach ($this->operadoravulso__1 as $tmp_operadoravulso_)
              {
                  if (trim($tmp_operadoravulso_) === trim($cadaselect[1])) { $operadoravulso__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->operadoravulso_) === trim($cadaselect[1])) { $operadoravulso__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($operadoravulso__look))
          {
              $operadoravulso__look = $this->operadoravulso_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_operadoravulso_" . $sc_seq_vert . "\" class=\"css_operadoravulso__line\" style=\"" .  $sStyleReadLab_operadoravulso_ . "\">" . $this->form_encode_input($operadoravulso__look) . "</span><span id=\"id_read_off_operadoravulso_" . $sc_seq_vert . "\" class=\"css_read_off_operadoravulso_\" style=\"white-space: nowrap; " . $sStyleReadInp_operadoravulso_ . "\">";
   echo " <span id=\"idAjaxSelect_operadoravulso_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_operadoravulso__obj\" style=\"\" id=\"id_sc_field_operadoravulso_" . $sc_seq_vert . "\" name=\"operadoravulso_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->operadoravulso_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->operadoravulso_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operadoravulso_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operadoravulso_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['valoravulso_']) && $this->nmgp_cmp_hidden['valoravulso_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valoravulso_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valoravulso_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_valoravulso__line" id="hidden_field_data_valoravulso_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_valoravulso_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_valoravulso__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_valoravulso_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valoravulso_"]) &&  $this->nmgp_cmp_readonly["valoravulso_"] == "on") { 

 ?>
<input type="hidden" name="valoravulso_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valoravulso_) . "\">" . $valoravulso_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_valoravulso_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-valoravulso_<?php echo $sc_seq_vert ?> css_valoravulso__line" style="<?php echo $sStyleReadLab_valoravulso_; ?>"><?php echo $this->valoravulso_; ?></span><span id="id_read_off_valoravulso_<?php echo $sc_seq_vert ?>" class="css_read_off_valoravulso_" style="white-space: nowrap;<?php echo $sStyleReadInp_valoravulso_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_valoravulso__obj" style="" id="id_sc_field_valoravulso_<?php echo $sc_seq_vert ?>" type=text name="valoravulso_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valoravulso_) ?>"
 size=12 alt="{datatype: 'decimal', maxLength: 12, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valoravulso_']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valoravulso_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valoravulso_']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valoravulso_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valoravulso_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valoravulso_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dataemissao_']) && $this->nmgp_cmp_hidden['dataemissao_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dataemissao_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dataemissao_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dataemissao__line" id="hidden_field_data_dataemissao_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dataemissao_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dataemissao__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dataemissao_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dataemissao_"]) &&  $this->nmgp_cmp_readonly["dataemissao_"] == "on") { 

 ?>
<input type="hidden" name="dataemissao_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dataemissao_) . "\">" . $dataemissao_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_dataemissao_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-dataemissao_<?php echo $sc_seq_vert ?> css_dataemissao__line" style="<?php echo $sStyleReadLab_dataemissao_; ?>"><?php echo $dataemissao_; ?></span><span id="id_read_off_dataemissao_<?php echo $sc_seq_vert ?>" class="css_read_off_dataemissao_" style="white-space: nowrap;<?php echo $sStyleReadInp_dataemissao_; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOddMult css_dataemissao__obj" style="" id="id_sc_field_dataemissao_<?php echo $sc_seq_vert ?>" type=text name="dataemissao_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dataemissao_) ?>"
 size=18 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['dataemissao_']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dataemissao_']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['dataemissao_']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dataemissao_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dataemissao_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['datavencimento_']) && $this->nmgp_cmp_hidden['datavencimento_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datavencimento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($datavencimento_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_datavencimento__line" id="hidden_field_data_datavencimento_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_datavencimento_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_datavencimento__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_datavencimento_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datavencimento_"]) &&  $this->nmgp_cmp_readonly["datavencimento_"] == "on") { 

 ?>
<input type="hidden" name="datavencimento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($datavencimento_) . "\">" . $datavencimento_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_datavencimento_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-datavencimento_<?php echo $sc_seq_vert ?> css_datavencimento__line" style="<?php echo $sStyleReadLab_datavencimento_; ?>"><?php echo $datavencimento_; ?></span><span id="id_read_off_datavencimento_<?php echo $sc_seq_vert ?>" class="css_read_off_datavencimento_" style="white-space: nowrap;<?php echo $sStyleReadInp_datavencimento_; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOddMult css_datavencimento__obj" style="" id="id_sc_field_datavencimento_<?php echo $sc_seq_vert ?>" type=text name="datavencimento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($datavencimento_) ?>"
 size=18 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['datavencimento_']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datavencimento_']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['datavencimento_']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datavencimento_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datavencimento_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['obstemp_']) && $this->nmgp_cmp_hidden['obstemp_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="obstemp_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($obstemp_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_obstemp__line" id="hidden_field_data_obstemp_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_obstemp_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_obstemp__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_obstemp_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["obstemp_"]) &&  $this->nmgp_cmp_readonly["obstemp_"] == "on") { 

 ?>
<input type="hidden" name="obstemp_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($obstemp_) . "\">" . $obstemp_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_obstemp_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-obstemp_<?php echo $sc_seq_vert ?> css_obstemp__line" style="<?php echo $sStyleReadLab_obstemp_; ?>"><?php echo $this->obstemp_; ?></span><span id="id_read_off_obstemp_<?php echo $sc_seq_vert ?>" class="css_read_off_obstemp_" style="white-space: nowrap;<?php echo $sStyleReadInp_obstemp_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_obstemp__obj" style="" id="id_sc_field_obstemp_<?php echo $sc_seq_vert ?>" type=text name="obstemp_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($obstemp_) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_obstemp_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_obstemp_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['status_']) && $this->nmgp_cmp_hidden['status_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="status_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($status_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_status__line" id="hidden_field_data_status_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_status_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_status__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_status_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["status_"]) &&  $this->nmgp_cmp_readonly["status_"] == "on") { 

 ?>
<input type="hidden" name="status_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($status_) . "\">" . $status_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_status_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-status_<?php echo $sc_seq_vert ?> css_status__line" style="<?php echo $sStyleReadLab_status_; ?>"><?php echo $this->status_; ?></span><span id="id_read_off_status_<?php echo $sc_seq_vert ?>" class="css_read_off_status_" style="white-space: nowrap;<?php echo $sStyleReadInp_status_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_status__obj" style="" id="id_sc_field_status_<?php echo $sc_seq_vert ?>" type=text name="status_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($status_) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_status_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_status_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_codigoidentificador_))
       {
           $this->nmgp_cmp_readonly['codigoidentificador_'] = $sCheckRead_codigoidentificador_;
       }
       if ('display: none;' == $sStyleHidden_codigoidentificador_)
       {
           $this->nmgp_cmp_hidden['codigoidentificador_'] = 'off';
       }
       if (isset($sCheckRead_codigo_))
       {
           $this->nmgp_cmp_readonly['codigo_'] = $sCheckRead_codigo_;
       }
       if ('display: none;' == $sStyleHidden_codigo_)
       {
           $this->nmgp_cmp_hidden['codigo_'] = 'off';
       }
       if (isset($sCheckRead_operadoravulso_))
       {
           $this->nmgp_cmp_readonly['operadoravulso_'] = $sCheckRead_operadoravulso_;
       }
       if ('display: none;' == $sStyleHidden_operadoravulso_)
       {
           $this->nmgp_cmp_hidden['operadoravulso_'] = 'off';
       }
       if (isset($sCheckRead_valoravulso_))
       {
           $this->nmgp_cmp_readonly['valoravulso_'] = $sCheckRead_valoravulso_;
       }
       if ('display: none;' == $sStyleHidden_valoravulso_)
       {
           $this->nmgp_cmp_hidden['valoravulso_'] = 'off';
       }
       if (isset($sCheckRead_dataemissao_))
       {
           $this->nmgp_cmp_readonly['dataemissao_'] = $sCheckRead_dataemissao_;
       }
       if ('display: none;' == $sStyleHidden_dataemissao_)
       {
           $this->nmgp_cmp_hidden['dataemissao_'] = 'off';
       }
       if (isset($sCheckRead_datavencimento_))
       {
           $this->nmgp_cmp_readonly['datavencimento_'] = $sCheckRead_datavencimento_;
       }
       if ('display: none;' == $sStyleHidden_datavencimento_)
       {
           $this->nmgp_cmp_hidden['datavencimento_'] = 'off';
       }
       if (isset($sCheckRead_obstemp_))
       {
           $this->nmgp_cmp_readonly['obstemp_'] = $sCheckRead_obstemp_;
       }
       if ('display: none;' == $sStyleHidden_obstemp_)
       {
           $this->nmgp_cmp_hidden['obstemp_'] = 'off';
       }
       if (isset($sCheckRead_status_))
       {
           $this->nmgp_cmp_readonly['status_'] = $sCheckRead_status_;
       }
       if ('display: none;' == $sStyleHidden_status_)
       {
           $this->nmgp_cmp_hidden['status_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_financeiro = $guarda_form_vert_form_financeiro;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div>
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; text-align: center; font-weight: bold">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColorMult">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($this->Embutida_form) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-11", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-12", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-13", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-14", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-15", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-16", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-17", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-18", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai_modal()", "scBtnFn_sys_format_sai_modal()", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-19", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_iframe'] != "R")
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
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_financeiro");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_financeiro");
 parent.scAjaxDetailHeight("form_financeiro", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_financeiro", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_financeiro", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['sc_modal'])
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
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
			do_ajax_form_financeiro_add_new_line(); return false;
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-2").length && $("#sc_b_new_t.sc-unique-btn-2").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-3").length && $("#sc_b_ins_t.sc-unique-btn-3").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_b.sc-unique-btn-10").length && $("#sc_b_new_b.sc-unique-btn-10").is(":visible")) {
			do_ajax_form_financeiro_add_new_line(); return false;
			 return;
		}
		if ($("#sc_b_new_b.sc-unique-btn-11").length && $("#sc_b_new_b.sc-unique-btn-11").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_b.sc-unique-btn-12").length && $("#sc_b_ins_b.sc-unique-btn-12").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-13").length && $("#sc_b_upd_b.sc-unique-btn-13").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-5").length && $("#sc_b_sai_t.sc-unique-btn-5").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-14").length && $("#sc_b_sai_b.sc-unique-btn-14").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_t.sc-unique-btn-6").length && $("#sc_b_ini_t.sc-unique-btn-6").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
		if ($("#sc_b_ini_b.sc-unique-btn-15").length && $("#sc_b_ini_b.sc-unique-btn-15").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_t.sc-unique-btn-7").length && $("#sc_b_ret_t.sc-unique-btn-7").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-16").length && $("#sc_b_ret_b.sc-unique-btn-16").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_t.sc-unique-btn-8").length && $("#sc_b_avc_t.sc-unique-btn-8").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-17").length && $("#sc_b_avc_b.sc-unique-btn-17").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_t.sc-unique-btn-9").length && $("#sc_b_fim_t.sc-unique-btn-9").is(":visible")) {
			nm_move ('final');
			 return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-18").length && $("#sc_b_fim_b.sc-unique-btn-18").is(":visible")) {
			nm_move ('final');
			 return;
		}
	}
	function scBtnFn_sys_format_sai_modal() {
		if ($("#sc_b_sai_b.sc-unique-btn-19").length && $("#sc_b_sai_b.sc-unique-btn-19").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro']['buttonStatus'] = $this->nmgp_botoes;
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
<?php 
 } 
} 
?> 
