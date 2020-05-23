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
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
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
.css_read_off_dataemissao button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_datavencimento button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_timestamp button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_ultimocontato button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_financeiro_1/form_financeiro_1_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_financeiro_1_sajax_js.php");
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
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_financeiro_1_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

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
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   var fixedQuickSearchSize = {};
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     if ("boolean" == typeof fixedQuickSearchSize[sIdInput] && fixedQuickSearchSize[sIdInput]) {
       return;
     }
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     if (0 != oInput.height()) {
       oInput.css({
         'height': Math.max(oInput.height(), 16) + 'px',
       });
     }
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     fixedQuickSearchSize[sIdInput] = true;
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
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
 include_once("form_financeiro_1_js0.php");
?>
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
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['insert_validation']; ?>">
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
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_financeiro_1'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_financeiro_1'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['fast_search'][2] : "";
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
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-1", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-2", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-3", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-4", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-5", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-6", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['codigoidentificador']))
           {
               $this->nmgp_cmp_readonly['codigoidentificador'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codigoidentificador']))
    {
        $this->nm_new_label['codigoidentificador'] = "Codigo Identificador";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codigoidentificador = $this->codigoidentificador;
   $sStyleHidden_codigoidentificador = '';
   if (isset($this->nmgp_cmp_hidden['codigoidentificador']) && $this->nmgp_cmp_hidden['codigoidentificador'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codigoidentificador']);
       $sStyleHidden_codigoidentificador = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codigoidentificador = 'display: none;';
   $sStyleReadInp_codigoidentificador = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["codigoidentificador"]) &&  $this->nmgp_cmp_readonly["codigoidentificador"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codigoidentificador']);
       $sStyleReadLab_codigoidentificador = '';
       $sStyleReadInp_codigoidentificador = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codigoidentificador']) && $this->nmgp_cmp_hidden['codigoidentificador'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigoidentificador" value="<?php echo $this->form_encode_input($codigoidentificador) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_codigoidentificador_label" id="hidden_field_label_codigoidentificador" style="<?php echo $sStyleHidden_codigoidentificador; ?>"><span id="id_label_codigoidentificador"><?php echo $this->nm_new_label['codigoidentificador']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['php_cmp_required']['codigoidentificador']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['php_cmp_required']['codigoidentificador'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_codigoidentificador_line" id="hidden_field_data_codigoidentificador" style="<?php echo $sStyleHidden_codigoidentificador; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigoidentificador_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["codigoidentificador"]) &&  $this->nmgp_cmp_readonly["codigoidentificador"] == "on")) { 

 ?>
<input type="hidden" name="codigoidentificador" value="<?php echo $this->form_encode_input($codigoidentificador) . "\"><span id=\"id_ajax_label_codigoidentificador\">" . $codigoidentificador . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_codigoidentificador" class="sc-ui-readonly-codigoidentificador css_codigoidentificador_line" style="<?php echo $sStyleReadLab_codigoidentificador; ?>"><?php echo $this->codigoidentificador; ?></span><span id="id_read_off_codigoidentificador" class="css_read_off_codigoidentificador" style="white-space: nowrap;<?php echo $sStyleReadInp_codigoidentificador; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigoidentificador_obj" style="" id="id_sc_field_codigoidentificador" type=text name="codigoidentificador" value="<?php echo $this->form_encode_input($codigoidentificador) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigoidentificador']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigoidentificador']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigoidentificador']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigoidentificador_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigoidentificador_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numerorecibo']))
    {
        $this->nm_new_label['numerorecibo'] = "Numero Recibo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numerorecibo = $this->numerorecibo;
   $sStyleHidden_numerorecibo = '';
   if (isset($this->nmgp_cmp_hidden['numerorecibo']) && $this->nmgp_cmp_hidden['numerorecibo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numerorecibo']);
       $sStyleHidden_numerorecibo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numerorecibo = 'display: none;';
   $sStyleReadInp_numerorecibo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numerorecibo']) && $this->nmgp_cmp_readonly['numerorecibo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numerorecibo']);
       $sStyleReadLab_numerorecibo = '';
       $sStyleReadInp_numerorecibo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numerorecibo']) && $this->nmgp_cmp_hidden['numerorecibo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numerorecibo" value="<?php echo $this->form_encode_input($numerorecibo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_numerorecibo_label" id="hidden_field_label_numerorecibo" style="<?php echo $sStyleHidden_numerorecibo; ?>"><span id="id_label_numerorecibo"><?php echo $this->nm_new_label['numerorecibo']; ?></span></TD>
    <TD class="scFormDataOdd css_numerorecibo_line" id="hidden_field_data_numerorecibo" style="<?php echo $sStyleHidden_numerorecibo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_numerorecibo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numerorecibo"]) &&  $this->nmgp_cmp_readonly["numerorecibo"] == "on") { 

 ?>
<input type="hidden" name="numerorecibo" value="<?php echo $this->form_encode_input($numerorecibo) . "\">" . $numerorecibo . ""; ?>
<?php } else { ?>
<span id="id_read_on_numerorecibo" class="sc-ui-readonly-numerorecibo css_numerorecibo_line" style="<?php echo $sStyleReadLab_numerorecibo; ?>"><?php echo $this->numerorecibo; ?></span><span id="id_read_off_numerorecibo" class="css_read_off_numerorecibo" style="white-space: nowrap;<?php echo $sStyleReadInp_numerorecibo; ?>">
 <input class="sc-js-input scFormObjectOdd css_numerorecibo_obj" style="" id="id_sc_field_numerorecibo" type=text name="numerorecibo" value="<?php echo $this->form_encode_input($numerorecibo) ?>"
 size=7 maxlength=7 alt="{datatype: 'text', maxLength: 7, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numerorecibo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numerorecibo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numeroserie']))
    {
        $this->nm_new_label['numeroserie'] = "Numero Serie";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numeroserie = $this->numeroserie;
   $sStyleHidden_numeroserie = '';
   if (isset($this->nmgp_cmp_hidden['numeroserie']) && $this->nmgp_cmp_hidden['numeroserie'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numeroserie']);
       $sStyleHidden_numeroserie = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numeroserie = 'display: none;';
   $sStyleReadInp_numeroserie = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numeroserie']) && $this->nmgp_cmp_readonly['numeroserie'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numeroserie']);
       $sStyleReadLab_numeroserie = '';
       $sStyleReadInp_numeroserie = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numeroserie']) && $this->nmgp_cmp_hidden['numeroserie'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numeroserie" value="<?php echo $this->form_encode_input($numeroserie) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_numeroserie_label" id="hidden_field_label_numeroserie" style="<?php echo $sStyleHidden_numeroserie; ?>"><span id="id_label_numeroserie"><?php echo $this->nm_new_label['numeroserie']; ?></span></TD>
    <TD class="scFormDataOdd css_numeroserie_line" id="hidden_field_data_numeroserie" style="<?php echo $sStyleHidden_numeroserie; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_numeroserie_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numeroserie"]) &&  $this->nmgp_cmp_readonly["numeroserie"] == "on") { 

 ?>
<input type="hidden" name="numeroserie" value="<?php echo $this->form_encode_input($numeroserie) . "\">" . $numeroserie . ""; ?>
<?php } else { ?>
<span id="id_read_on_numeroserie" class="sc-ui-readonly-numeroserie css_numeroserie_line" style="<?php echo $sStyleReadLab_numeroserie; ?>"><?php echo $this->numeroserie; ?></span><span id="id_read_off_numeroserie" class="css_read_off_numeroserie" style="white-space: nowrap;<?php echo $sStyleReadInp_numeroserie; ?>">
 <input class="sc-js-input scFormObjectOdd css_numeroserie_obj" style="" id="id_sc_field_numeroserie" type=text name="numeroserie" value="<?php echo $this->form_encode_input($numeroserie) ?>"
 size=3 maxlength=3 alt="{datatype: 'text', maxLength: 3, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numeroserie_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numeroserie_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codigo']))
    {
        $this->nm_new_label['codigo'] = "Codigo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codigo = $this->codigo;
   $sStyleHidden_codigo = '';
   if (isset($this->nmgp_cmp_hidden['codigo']) && $this->nmgp_cmp_hidden['codigo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codigo']);
       $sStyleHidden_codigo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codigo = 'display: none;';
   $sStyleReadInp_codigo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['codigo']) && $this->nmgp_cmp_readonly['codigo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codigo']);
       $sStyleReadLab_codigo = '';
       $sStyleReadInp_codigo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codigo']) && $this->nmgp_cmp_hidden['codigo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigo" value="<?php echo $this->form_encode_input($codigo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_codigo_label" id="hidden_field_label_codigo" style="<?php echo $sStyleHidden_codigo; ?>"><span id="id_label_codigo"><?php echo $this->nm_new_label['codigo']; ?></span></TD>
    <TD class="scFormDataOdd css_codigo_line" id="hidden_field_data_codigo" style="<?php echo $sStyleHidden_codigo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codigo"]) &&  $this->nmgp_cmp_readonly["codigo"] == "on") { 

 ?>
<input type="hidden" name="codigo" value="<?php echo $this->form_encode_input($codigo) . "\">" . $codigo . ""; ?>
<?php } else { ?>
<span id="id_read_on_codigo" class="sc-ui-readonly-codigo css_codigo_line" style="<?php echo $sStyleReadLab_codigo; ?>"><?php echo $this->codigo; ?></span><span id="id_read_off_codigo" class="css_read_off_codigo" style="white-space: nowrap;<?php echo $sStyleReadInp_codigo; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigo_obj" style="" id="id_sc_field_codigo" type=text name="codigo" value="<?php echo $this->form_encode_input($codigo) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigo']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigo']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigo']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['operadormensal']))
    {
        $this->nm_new_label['operadormensal'] = "Operador Mensal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $operadormensal = $this->operadormensal;
   $sStyleHidden_operadormensal = '';
   if (isset($this->nmgp_cmp_hidden['operadormensal']) && $this->nmgp_cmp_hidden['operadormensal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['operadormensal']);
       $sStyleHidden_operadormensal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_operadormensal = 'display: none;';
   $sStyleReadInp_operadormensal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['operadormensal']) && $this->nmgp_cmp_readonly['operadormensal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['operadormensal']);
       $sStyleReadLab_operadormensal = '';
       $sStyleReadInp_operadormensal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['operadormensal']) && $this->nmgp_cmp_hidden['operadormensal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="operadormensal" value="<?php echo $this->form_encode_input($operadormensal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_operadormensal_label" id="hidden_field_label_operadormensal" style="<?php echo $sStyleHidden_operadormensal; ?>"><span id="id_label_operadormensal"><?php echo $this->nm_new_label['operadormensal']; ?></span></TD>
    <TD class="scFormDataOdd css_operadormensal_line" id="hidden_field_data_operadormensal" style="<?php echo $sStyleHidden_operadormensal; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_operadormensal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["operadormensal"]) &&  $this->nmgp_cmp_readonly["operadormensal"] == "on") { 

 ?>
<input type="hidden" name="operadormensal" value="<?php echo $this->form_encode_input($operadormensal) . "\">" . $operadormensal . ""; ?>
<?php } else { ?>
<span id="id_read_on_operadormensal" class="sc-ui-readonly-operadormensal css_operadormensal_line" style="<?php echo $sStyleReadLab_operadormensal; ?>"><?php echo $this->operadormensal; ?></span><span id="id_read_off_operadormensal" class="css_read_off_operadormensal" style="white-space: nowrap;<?php echo $sStyleReadInp_operadormensal; ?>">
 <input class="sc-js-input scFormObjectOdd css_operadormensal_obj" style="" id="id_sc_field_operadormensal" type=text name="operadormensal" value="<?php echo $this->form_encode_input($operadormensal) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['operadormensal']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['operadormensal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['operadormensal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operadormensal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operadormensal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valormensal']))
    {
        $this->nm_new_label['valormensal'] = "Valor Mensal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valormensal = $this->valormensal;
   $sStyleHidden_valormensal = '';
   if (isset($this->nmgp_cmp_hidden['valormensal']) && $this->nmgp_cmp_hidden['valormensal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valormensal']);
       $sStyleHidden_valormensal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valormensal = 'display: none;';
   $sStyleReadInp_valormensal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valormensal']) && $this->nmgp_cmp_readonly['valormensal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valormensal']);
       $sStyleReadLab_valormensal = '';
       $sStyleReadInp_valormensal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valormensal']) && $this->nmgp_cmp_hidden['valormensal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valormensal" value="<?php echo $this->form_encode_input($valormensal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_valormensal_label" id="hidden_field_label_valormensal" style="<?php echo $sStyleHidden_valormensal; ?>"><span id="id_label_valormensal"><?php echo $this->nm_new_label['valormensal']; ?></span></TD>
    <TD class="scFormDataOdd css_valormensal_line" id="hidden_field_data_valormensal" style="<?php echo $sStyleHidden_valormensal; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valormensal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valormensal"]) &&  $this->nmgp_cmp_readonly["valormensal"] == "on") { 

 ?>
<input type="hidden" name="valormensal" value="<?php echo $this->form_encode_input($valormensal) . "\">" . $valormensal . ""; ?>
<?php } else { ?>
<span id="id_read_on_valormensal" class="sc-ui-readonly-valormensal css_valormensal_line" style="<?php echo $sStyleReadLab_valormensal; ?>"><?php echo $this->valormensal; ?></span><span id="id_read_off_valormensal" class="css_read_off_valormensal" style="white-space: nowrap;<?php echo $sStyleReadInp_valormensal; ?>">
 <input class="sc-js-input scFormObjectOdd css_valormensal_obj" style="" id="id_sc_field_valormensal" type=text name="valormensal" value="<?php echo $this->form_encode_input($valormensal) ?>"
 size=12 alt="{datatype: 'integer', maxLength: 12, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valormensal']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valormensal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valormensal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valormensal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valormensal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['operadoravulso']))
    {
        $this->nm_new_label['operadoravulso'] = "Operador Avulso";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $operadoravulso = $this->operadoravulso;
   $sStyleHidden_operadoravulso = '';
   if (isset($this->nmgp_cmp_hidden['operadoravulso']) && $this->nmgp_cmp_hidden['operadoravulso'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['operadoravulso']);
       $sStyleHidden_operadoravulso = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_operadoravulso = 'display: none;';
   $sStyleReadInp_operadoravulso = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['operadoravulso']) && $this->nmgp_cmp_readonly['operadoravulso'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['operadoravulso']);
       $sStyleReadLab_operadoravulso = '';
       $sStyleReadInp_operadoravulso = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['operadoravulso']) && $this->nmgp_cmp_hidden['operadoravulso'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="operadoravulso" value="<?php echo $this->form_encode_input($operadoravulso) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_operadoravulso_label" id="hidden_field_label_operadoravulso" style="<?php echo $sStyleHidden_operadoravulso; ?>"><span id="id_label_operadoravulso"><?php echo $this->nm_new_label['operadoravulso']; ?></span></TD>
    <TD class="scFormDataOdd css_operadoravulso_line" id="hidden_field_data_operadoravulso" style="<?php echo $sStyleHidden_operadoravulso; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_operadoravulso_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["operadoravulso"]) &&  $this->nmgp_cmp_readonly["operadoravulso"] == "on") { 

 ?>
<input type="hidden" name="operadoravulso" value="<?php echo $this->form_encode_input($operadoravulso) . "\">" . $operadoravulso . ""; ?>
<?php } else { ?>
<span id="id_read_on_operadoravulso" class="sc-ui-readonly-operadoravulso css_operadoravulso_line" style="<?php echo $sStyleReadLab_operadoravulso; ?>"><?php echo $this->operadoravulso; ?></span><span id="id_read_off_operadoravulso" class="css_read_off_operadoravulso" style="white-space: nowrap;<?php echo $sStyleReadInp_operadoravulso; ?>">
 <input class="sc-js-input scFormObjectOdd css_operadoravulso_obj" style="" id="id_sc_field_operadoravulso" type=text name="operadoravulso" value="<?php echo $this->form_encode_input($operadoravulso) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['operadoravulso']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['operadoravulso']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['operadoravulso']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operadoravulso_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operadoravulso_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valoravulso']))
    {
        $this->nm_new_label['valoravulso'] = "Valor Avulso";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valoravulso = $this->valoravulso;
   $sStyleHidden_valoravulso = '';
   if (isset($this->nmgp_cmp_hidden['valoravulso']) && $this->nmgp_cmp_hidden['valoravulso'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valoravulso']);
       $sStyleHidden_valoravulso = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valoravulso = 'display: none;';
   $sStyleReadInp_valoravulso = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valoravulso']) && $this->nmgp_cmp_readonly['valoravulso'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valoravulso']);
       $sStyleReadLab_valoravulso = '';
       $sStyleReadInp_valoravulso = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valoravulso']) && $this->nmgp_cmp_hidden['valoravulso'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valoravulso" value="<?php echo $this->form_encode_input($valoravulso) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_valoravulso_label" id="hidden_field_label_valoravulso" style="<?php echo $sStyleHidden_valoravulso; ?>"><span id="id_label_valoravulso"><?php echo $this->nm_new_label['valoravulso']; ?></span></TD>
    <TD class="scFormDataOdd css_valoravulso_line" id="hidden_field_data_valoravulso" style="<?php echo $sStyleHidden_valoravulso; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valoravulso_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valoravulso"]) &&  $this->nmgp_cmp_readonly["valoravulso"] == "on") { 

 ?>
<input type="hidden" name="valoravulso" value="<?php echo $this->form_encode_input($valoravulso) . "\">" . $valoravulso . ""; ?>
<?php } else { ?>
<span id="id_read_on_valoravulso" class="sc-ui-readonly-valoravulso css_valoravulso_line" style="<?php echo $sStyleReadLab_valoravulso; ?>"><?php echo $this->valoravulso; ?></span><span id="id_read_off_valoravulso" class="css_read_off_valoravulso" style="white-space: nowrap;<?php echo $sStyleReadInp_valoravulso; ?>">
 <input class="sc-js-input scFormObjectOdd css_valoravulso_obj" style="" id="id_sc_field_valoravulso" type=text name="valoravulso" value="<?php echo $this->form_encode_input($valoravulso) ?>"
 size=12 alt="{datatype: 'integer', maxLength: 12, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valoravulso']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valoravulso']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valoravulso']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valoravulso_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valoravulso_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cobrador']))
    {
        $this->nm_new_label['cobrador'] = "Cobrador";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cobrador = $this->cobrador;
   $sStyleHidden_cobrador = '';
   if (isset($this->nmgp_cmp_hidden['cobrador']) && $this->nmgp_cmp_hidden['cobrador'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cobrador']);
       $sStyleHidden_cobrador = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cobrador = 'display: none;';
   $sStyleReadInp_cobrador = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cobrador']) && $this->nmgp_cmp_readonly['cobrador'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cobrador']);
       $sStyleReadLab_cobrador = '';
       $sStyleReadInp_cobrador = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cobrador']) && $this->nmgp_cmp_hidden['cobrador'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cobrador" value="<?php echo $this->form_encode_input($cobrador) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cobrador_label" id="hidden_field_label_cobrador" style="<?php echo $sStyleHidden_cobrador; ?>"><span id="id_label_cobrador"><?php echo $this->nm_new_label['cobrador']; ?></span></TD>
    <TD class="scFormDataOdd css_cobrador_line" id="hidden_field_data_cobrador" style="<?php echo $sStyleHidden_cobrador; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cobrador_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cobrador"]) &&  $this->nmgp_cmp_readonly["cobrador"] == "on") { 

 ?>
<input type="hidden" name="cobrador" value="<?php echo $this->form_encode_input($cobrador) . "\">" . $cobrador . ""; ?>
<?php } else { ?>
<span id="id_read_on_cobrador" class="sc-ui-readonly-cobrador css_cobrador_line" style="<?php echo $sStyleReadLab_cobrador; ?>"><?php echo $this->cobrador; ?></span><span id="id_read_off_cobrador" class="css_read_off_cobrador" style="white-space: nowrap;<?php echo $sStyleReadInp_cobrador; ?>">
 <input class="sc-js-input scFormObjectOdd css_cobrador_obj" style="" id="id_sc_field_cobrador" type=text name="cobrador" value="<?php echo $this->form_encode_input($cobrador) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['cobrador']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['cobrador']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['cobrador']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cobrador_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cobrador_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dataemissao']))
    {
        $this->nm_new_label['dataemissao'] = "Data Emissao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_dataemissao = $this->dataemissao;
   if (strlen($this->dataemissao_hora) > 8 ) {$this->dataemissao_hora = substr($this->dataemissao_hora, 0, 8);}
   $this->dataemissao .= ' ' . $this->dataemissao_hora;
   $dataemissao = $this->dataemissao;
   $sStyleHidden_dataemissao = '';
   if (isset($this->nmgp_cmp_hidden['dataemissao']) && $this->nmgp_cmp_hidden['dataemissao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dataemissao']);
       $sStyleHidden_dataemissao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dataemissao = 'display: none;';
   $sStyleReadInp_dataemissao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dataemissao']) && $this->nmgp_cmp_readonly['dataemissao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dataemissao']);
       $sStyleReadLab_dataemissao = '';
       $sStyleReadInp_dataemissao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dataemissao']) && $this->nmgp_cmp_hidden['dataemissao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dataemissao" value="<?php echo $this->form_encode_input($dataemissao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dataemissao_label" id="hidden_field_label_dataemissao" style="<?php echo $sStyleHidden_dataemissao; ?>"><span id="id_label_dataemissao"><?php echo $this->nm_new_label['dataemissao']; ?></span></TD>
    <TD class="scFormDataOdd css_dataemissao_line" id="hidden_field_data_dataemissao" style="<?php echo $sStyleHidden_dataemissao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dataemissao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dataemissao"]) &&  $this->nmgp_cmp_readonly["dataemissao"] == "on") { 

 ?>
<input type="hidden" name="dataemissao" value="<?php echo $this->form_encode_input($dataemissao) . "\">" . $dataemissao . ""; ?>
<?php } else { ?>
<span id="id_read_on_dataemissao" class="sc-ui-readonly-dataemissao css_dataemissao_line" style="<?php echo $sStyleReadLab_dataemissao; ?>"><?php echo $dataemissao; ?></span><span id="id_read_off_dataemissao" class="css_read_off_dataemissao" style="white-space: nowrap;<?php echo $sStyleReadInp_dataemissao; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_dataemissao_obj" style="" id="id_sc_field_dataemissao" type=text name="dataemissao" value="<?php echo $this->form_encode_input($dataemissao) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['dataemissao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dataemissao']['date_format']; ?>', timeSep: '<?php echo $this->field_config['dataemissao']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['dataemissao']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dataemissao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dataemissao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->dataemissao = $old_dt_dataemissao;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['datavencimento']))
    {
        $this->nm_new_label['datavencimento'] = "Data Vencimento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_datavencimento = $this->datavencimento;
   if (strlen($this->datavencimento_hora) > 8 ) {$this->datavencimento_hora = substr($this->datavencimento_hora, 0, 8);}
   $this->datavencimento .= ' ' . $this->datavencimento_hora;
   $datavencimento = $this->datavencimento;
   $sStyleHidden_datavencimento = '';
   if (isset($this->nmgp_cmp_hidden['datavencimento']) && $this->nmgp_cmp_hidden['datavencimento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datavencimento']);
       $sStyleHidden_datavencimento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datavencimento = 'display: none;';
   $sStyleReadInp_datavencimento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datavencimento']) && $this->nmgp_cmp_readonly['datavencimento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datavencimento']);
       $sStyleReadLab_datavencimento = '';
       $sStyleReadInp_datavencimento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datavencimento']) && $this->nmgp_cmp_hidden['datavencimento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datavencimento" value="<?php echo $this->form_encode_input($datavencimento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_datavencimento_label" id="hidden_field_label_datavencimento" style="<?php echo $sStyleHidden_datavencimento; ?>"><span id="id_label_datavencimento"><?php echo $this->nm_new_label['datavencimento']; ?></span></TD>
    <TD class="scFormDataOdd css_datavencimento_line" id="hidden_field_data_datavencimento" style="<?php echo $sStyleHidden_datavencimento; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_datavencimento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datavencimento"]) &&  $this->nmgp_cmp_readonly["datavencimento"] == "on") { 

 ?>
<input type="hidden" name="datavencimento" value="<?php echo $this->form_encode_input($datavencimento) . "\">" . $datavencimento . ""; ?>
<?php } else { ?>
<span id="id_read_on_datavencimento" class="sc-ui-readonly-datavencimento css_datavencimento_line" style="<?php echo $sStyleReadLab_datavencimento; ?>"><?php echo $datavencimento; ?></span><span id="id_read_off_datavencimento" class="css_read_off_datavencimento" style="white-space: nowrap;<?php echo $sStyleReadInp_datavencimento; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_datavencimento_obj" style="" id="id_sc_field_datavencimento" type=text name="datavencimento" value="<?php echo $this->form_encode_input($datavencimento) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['datavencimento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datavencimento']['date_format']; ?>', timeSep: '<?php echo $this->field_config['datavencimento']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['datavencimento']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datavencimento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datavencimento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->datavencimento = $old_dt_datavencimento;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['obstemp']))
    {
        $this->nm_new_label['obstemp'] = "Obs Temp";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $obstemp = $this->obstemp;
   $sStyleHidden_obstemp = '';
   if (isset($this->nmgp_cmp_hidden['obstemp']) && $this->nmgp_cmp_hidden['obstemp'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['obstemp']);
       $sStyleHidden_obstemp = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_obstemp = 'display: none;';
   $sStyleReadInp_obstemp = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['obstemp']) && $this->nmgp_cmp_readonly['obstemp'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['obstemp']);
       $sStyleReadLab_obstemp = '';
       $sStyleReadInp_obstemp = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['obstemp']) && $this->nmgp_cmp_hidden['obstemp'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="obstemp" value="<?php echo $this->form_encode_input($obstemp) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_obstemp_label" id="hidden_field_label_obstemp" style="<?php echo $sStyleHidden_obstemp; ?>"><span id="id_label_obstemp"><?php echo $this->nm_new_label['obstemp']; ?></span></TD>
    <TD class="scFormDataOdd css_obstemp_line" id="hidden_field_data_obstemp" style="<?php echo $sStyleHidden_obstemp; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_obstemp_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["obstemp"]) &&  $this->nmgp_cmp_readonly["obstemp"] == "on") { 

 ?>
<input type="hidden" name="obstemp" value="<?php echo $this->form_encode_input($obstemp) . "\">" . $obstemp . ""; ?>
<?php } else { ?>
<span id="id_read_on_obstemp" class="sc-ui-readonly-obstemp css_obstemp_line" style="<?php echo $sStyleReadLab_obstemp; ?>"><?php echo $this->obstemp; ?></span><span id="id_read_off_obstemp" class="css_read_off_obstemp" style="white-space: nowrap;<?php echo $sStyleReadInp_obstemp; ?>">
 <input class="sc-js-input scFormObjectOdd css_obstemp_obj" style="" id="id_sc_field_obstemp" type=text name="obstemp" value="<?php echo $this->form_encode_input($obstemp) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_obstemp_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_obstemp_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['status']))
    {
        $this->nm_new_label['status'] = "Status";
    }
?>
<?php
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
<?php if (isset($this->nmgp_cmp_hidden['status']) && $this->nmgp_cmp_hidden['status'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="status" value="<?php echo $this->form_encode_input($status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_status_label" id="hidden_field_label_status" style="<?php echo $sStyleHidden_status; ?>"><span id="id_label_status"><?php echo $this->nm_new_label['status']; ?></span></TD>
    <TD class="scFormDataOdd css_status_line" id="hidden_field_data_status" style="<?php echo $sStyleHidden_status; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_status_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["status"]) &&  $this->nmgp_cmp_readonly["status"] == "on") { 

 ?>
<input type="hidden" name="status" value="<?php echo $this->form_encode_input($status) . "\">" . $status . ""; ?>
<?php } else { ?>
<span id="id_read_on_status" class="sc-ui-readonly-status css_status_line" style="<?php echo $sStyleReadLab_status; ?>"><?php echo $this->status; ?></span><span id="id_read_off_status" class="css_read_off_status" style="white-space: nowrap;<?php echo $sStyleReadInp_status; ?>">
 <input class="sc-js-input scFormObjectOdd css_status_obj" style="" id="id_sc_field_status" type=text name="status" value="<?php echo $this->form_encode_input($status) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_status_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['obs']))
    {
        $this->nm_new_label['obs'] = "Obs";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $obs = $this->obs;
   $sStyleHidden_obs = '';
   if (isset($this->nmgp_cmp_hidden['obs']) && $this->nmgp_cmp_hidden['obs'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['obs']);
       $sStyleHidden_obs = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_obs = 'display: none;';
   $sStyleReadInp_obs = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['obs']) && $this->nmgp_cmp_readonly['obs'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['obs']);
       $sStyleReadLab_obs = '';
       $sStyleReadInp_obs = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['obs']) && $this->nmgp_cmp_hidden['obs'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="obs" value="<?php echo $this->form_encode_input($obs) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_obs_label" id="hidden_field_label_obs" style="<?php echo $sStyleHidden_obs; ?>"><span id="id_label_obs"><?php echo $this->nm_new_label['obs']; ?></span></TD>
    <TD class="scFormDataOdd css_obs_line" id="hidden_field_data_obs" style="<?php echo $sStyleHidden_obs; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_obs_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["obs"]) &&  $this->nmgp_cmp_readonly["obs"] == "on") { 

 ?>
<input type="hidden" name="obs" value="<?php echo $this->form_encode_input($obs) . "\">" . $obs . ""; ?>
<?php } else { ?>
<span id="id_read_on_obs" class="sc-ui-readonly-obs css_obs_line" style="<?php echo $sStyleReadLab_obs; ?>"><?php echo $this->obs; ?></span><span id="id_read_off_obs" class="css_read_off_obs" style="white-space: nowrap;<?php echo $sStyleReadInp_obs; ?>">
 <input class="sc-js-input scFormObjectOdd css_obs_obj" style="" id="id_sc_field_obs" type=text name="obs" value="<?php echo $this->form_encode_input($obs) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_obs_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_obs_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nomerecibo']))
    {
        $this->nm_new_label['nomerecibo'] = "Nome Recibo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nomerecibo = $this->nomerecibo;
   $sStyleHidden_nomerecibo = '';
   if (isset($this->nmgp_cmp_hidden['nomerecibo']) && $this->nmgp_cmp_hidden['nomerecibo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nomerecibo']);
       $sStyleHidden_nomerecibo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nomerecibo = 'display: none;';
   $sStyleReadInp_nomerecibo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nomerecibo']) && $this->nmgp_cmp_readonly['nomerecibo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nomerecibo']);
       $sStyleReadLab_nomerecibo = '';
       $sStyleReadInp_nomerecibo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nomerecibo']) && $this->nmgp_cmp_hidden['nomerecibo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nomerecibo" value="<?php echo $this->form_encode_input($nomerecibo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nomerecibo_label" id="hidden_field_label_nomerecibo" style="<?php echo $sStyleHidden_nomerecibo; ?>"><span id="id_label_nomerecibo"><?php echo $this->nm_new_label['nomerecibo']; ?></span></TD>
    <TD class="scFormDataOdd css_nomerecibo_line" id="hidden_field_data_nomerecibo" style="<?php echo $sStyleHidden_nomerecibo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nomerecibo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nomerecibo"]) &&  $this->nmgp_cmp_readonly["nomerecibo"] == "on") { 

 ?>
<input type="hidden" name="nomerecibo" value="<?php echo $this->form_encode_input($nomerecibo) . "\">" . $nomerecibo . ""; ?>
<?php } else { ?>
<span id="id_read_on_nomerecibo" class="sc-ui-readonly-nomerecibo css_nomerecibo_line" style="<?php echo $sStyleReadLab_nomerecibo; ?>"><?php echo $this->nomerecibo; ?></span><span id="id_read_off_nomerecibo" class="css_read_off_nomerecibo" style="white-space: nowrap;<?php echo $sStyleReadInp_nomerecibo; ?>">
 <input class="sc-js-input scFormObjectOdd css_nomerecibo_obj" style="" id="id_sc_field_nomerecibo" type=text name="nomerecibo" value="<?php echo $this->form_encode_input($nomerecibo) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nomerecibo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nomerecibo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipocobranca']))
    {
        $this->nm_new_label['tipocobranca'] = "Tipo Cobranca";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipocobranca = $this->tipocobranca;
   $sStyleHidden_tipocobranca = '';
   if (isset($this->nmgp_cmp_hidden['tipocobranca']) && $this->nmgp_cmp_hidden['tipocobranca'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipocobranca']);
       $sStyleHidden_tipocobranca = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipocobranca = 'display: none;';
   $sStyleReadInp_tipocobranca = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipocobranca']) && $this->nmgp_cmp_readonly['tipocobranca'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipocobranca']);
       $sStyleReadLab_tipocobranca = '';
       $sStyleReadInp_tipocobranca = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipocobranca']) && $this->nmgp_cmp_hidden['tipocobranca'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipocobranca" value="<?php echo $this->form_encode_input($tipocobranca) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_tipocobranca_label" id="hidden_field_label_tipocobranca" style="<?php echo $sStyleHidden_tipocobranca; ?>"><span id="id_label_tipocobranca"><?php echo $this->nm_new_label['tipocobranca']; ?></span></TD>
    <TD class="scFormDataOdd css_tipocobranca_line" id="hidden_field_data_tipocobranca" style="<?php echo $sStyleHidden_tipocobranca; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipocobranca_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipocobranca"]) &&  $this->nmgp_cmp_readonly["tipocobranca"] == "on") { 

 ?>
<input type="hidden" name="tipocobranca" value="<?php echo $this->form_encode_input($tipocobranca) . "\">" . $tipocobranca . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipocobranca" class="sc-ui-readonly-tipocobranca css_tipocobranca_line" style="<?php echo $sStyleReadLab_tipocobranca; ?>"><?php echo $this->tipocobranca; ?></span><span id="id_read_off_tipocobranca" class="css_read_off_tipocobranca" style="white-space: nowrap;<?php echo $sStyleReadInp_tipocobranca; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipocobranca_obj" style="" id="id_sc_field_tipocobranca" type=text name="tipocobranca" value="<?php echo $this->form_encode_input($tipocobranca) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipocobranca_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipocobranca_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mesmensal']))
    {
        $this->nm_new_label['mesmensal'] = "Mes Mensal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mesmensal = $this->mesmensal;
   $sStyleHidden_mesmensal = '';
   if (isset($this->nmgp_cmp_hidden['mesmensal']) && $this->nmgp_cmp_hidden['mesmensal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mesmensal']);
       $sStyleHidden_mesmensal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mesmensal = 'display: none;';
   $sStyleReadInp_mesmensal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mesmensal']) && $this->nmgp_cmp_readonly['mesmensal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mesmensal']);
       $sStyleReadLab_mesmensal = '';
       $sStyleReadInp_mesmensal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mesmensal']) && $this->nmgp_cmp_hidden['mesmensal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mesmensal" value="<?php echo $this->form_encode_input($mesmensal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_mesmensal_label" id="hidden_field_label_mesmensal" style="<?php echo $sStyleHidden_mesmensal; ?>"><span id="id_label_mesmensal"><?php echo $this->nm_new_label['mesmensal']; ?></span></TD>
    <TD class="scFormDataOdd css_mesmensal_line" id="hidden_field_data_mesmensal" style="<?php echo $sStyleHidden_mesmensal; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mesmensal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mesmensal"]) &&  $this->nmgp_cmp_readonly["mesmensal"] == "on") { 

 ?>
<input type="hidden" name="mesmensal" value="<?php echo $this->form_encode_input($mesmensal) . "\">" . $mesmensal . ""; ?>
<?php } else { ?>
<span id="id_read_on_mesmensal" class="sc-ui-readonly-mesmensal css_mesmensal_line" style="<?php echo $sStyleReadLab_mesmensal; ?>"><?php echo $this->mesmensal; ?></span><span id="id_read_off_mesmensal" class="css_read_off_mesmensal" style="white-space: nowrap;<?php echo $sStyleReadInp_mesmensal; ?>">
 <input class="sc-js-input scFormObjectOdd css_mesmensal_obj" style="" id="id_sc_field_mesmensal" type=text name="mesmensal" value="<?php echo $this->form_encode_input($mesmensal) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['mesmensal']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['mesmensal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['mesmensal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mesmensal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mesmensal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['usuario']))
    {
        $this->nm_new_label['usuario'] = "Usuario";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $usuario = $this->usuario;
   $sStyleHidden_usuario = '';
   if (isset($this->nmgp_cmp_hidden['usuario']) && $this->nmgp_cmp_hidden['usuario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['usuario']);
       $sStyleHidden_usuario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_usuario = 'display: none;';
   $sStyleReadInp_usuario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['usuario']) && $this->nmgp_cmp_readonly['usuario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['usuario']);
       $sStyleReadLab_usuario = '';
       $sStyleReadInp_usuario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['usuario']) && $this->nmgp_cmp_hidden['usuario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="usuario" value="<?php echo $this->form_encode_input($usuario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_usuario_label" id="hidden_field_label_usuario" style="<?php echo $sStyleHidden_usuario; ?>"><span id="id_label_usuario"><?php echo $this->nm_new_label['usuario']; ?></span></TD>
    <TD class="scFormDataOdd css_usuario_line" id="hidden_field_data_usuario" style="<?php echo $sStyleHidden_usuario; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_usuario_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["usuario"]) &&  $this->nmgp_cmp_readonly["usuario"] == "on") { 

 ?>
<input type="hidden" name="usuario" value="<?php echo $this->form_encode_input($usuario) . "\">" . $usuario . ""; ?>
<?php } else { ?>
<span id="id_read_on_usuario" class="sc-ui-readonly-usuario css_usuario_line" style="<?php echo $sStyleReadLab_usuario; ?>"><?php echo $this->usuario; ?></span><span id="id_read_off_usuario" class="css_read_off_usuario" style="white-space: nowrap;<?php echo $sStyleReadInp_usuario; ?>">
 <input class="sc-js-input scFormObjectOdd css_usuario_obj" style="" id="id_sc_field_usuario" type=text name="usuario" value="<?php echo $this->form_encode_input($usuario) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_usuario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_usuario_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['parceiro']))
    {
        $this->nm_new_label['parceiro'] = "Parceiro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parceiro = $this->parceiro;
   $sStyleHidden_parceiro = '';
   if (isset($this->nmgp_cmp_hidden['parceiro']) && $this->nmgp_cmp_hidden['parceiro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parceiro']);
       $sStyleHidden_parceiro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parceiro = 'display: none;';
   $sStyleReadInp_parceiro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parceiro']) && $this->nmgp_cmp_readonly['parceiro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parceiro']);
       $sStyleReadLab_parceiro = '';
       $sStyleReadInp_parceiro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parceiro']) && $this->nmgp_cmp_hidden['parceiro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="parceiro" value="<?php echo $this->form_encode_input($parceiro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_parceiro_label" id="hidden_field_label_parceiro" style="<?php echo $sStyleHidden_parceiro; ?>"><span id="id_label_parceiro"><?php echo $this->nm_new_label['parceiro']; ?></span></TD>
    <TD class="scFormDataOdd css_parceiro_line" id="hidden_field_data_parceiro" style="<?php echo $sStyleHidden_parceiro; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parceiro_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parceiro"]) &&  $this->nmgp_cmp_readonly["parceiro"] == "on") { 

 ?>
<input type="hidden" name="parceiro" value="<?php echo $this->form_encode_input($parceiro) . "\">" . $parceiro . ""; ?>
<?php } else { ?>
<span id="id_read_on_parceiro" class="sc-ui-readonly-parceiro css_parceiro_line" style="<?php echo $sStyleReadLab_parceiro; ?>"><?php echo $this->parceiro; ?></span><span id="id_read_off_parceiro" class="css_read_off_parceiro" style="white-space: nowrap;<?php echo $sStyleReadInp_parceiro; ?>">
 <input class="sc-js-input scFormObjectOdd css_parceiro_obj" style="" id="id_sc_field_parceiro" type=text name="parceiro" value="<?php echo $this->form_encode_input($parceiro) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['parceiro']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['parceiro']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['parceiro']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parceiro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parceiro_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['timestamp']))
    {
        $this->nm_new_label['timestamp'] = "Time Stamp";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_timestamp = $this->timestamp;
   if (strlen($this->timestamp_hora) > 8 ) {$this->timestamp_hora = substr($this->timestamp_hora, 0, 8);}
   $this->timestamp .= ' ' . $this->timestamp_hora;
   $timestamp = $this->timestamp;
   $sStyleHidden_timestamp = '';
   if (isset($this->nmgp_cmp_hidden['timestamp']) && $this->nmgp_cmp_hidden['timestamp'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['timestamp']);
       $sStyleHidden_timestamp = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_timestamp = 'display: none;';
   $sStyleReadInp_timestamp = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['timestamp']) && $this->nmgp_cmp_readonly['timestamp'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['timestamp']);
       $sStyleReadLab_timestamp = '';
       $sStyleReadInp_timestamp = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['timestamp']) && $this->nmgp_cmp_hidden['timestamp'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="timestamp" value="<?php echo $this->form_encode_input($timestamp) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_timestamp_label" id="hidden_field_label_timestamp" style="<?php echo $sStyleHidden_timestamp; ?>"><span id="id_label_timestamp"><?php echo $this->nm_new_label['timestamp']; ?></span></TD>
    <TD class="scFormDataOdd css_timestamp_line" id="hidden_field_data_timestamp" style="<?php echo $sStyleHidden_timestamp; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_timestamp_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["timestamp"]) &&  $this->nmgp_cmp_readonly["timestamp"] == "on") { 

 ?>
<input type="hidden" name="timestamp" value="<?php echo $this->form_encode_input($timestamp) . "\">" . $timestamp . ""; ?>
<?php } else { ?>
<span id="id_read_on_timestamp" class="sc-ui-readonly-timestamp css_timestamp_line" style="<?php echo $sStyleReadLab_timestamp; ?>"><?php echo $timestamp; ?></span><span id="id_read_off_timestamp" class="css_read_off_timestamp" style="white-space: nowrap;<?php echo $sStyleReadInp_timestamp; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_timestamp_obj" style="" id="id_sc_field_timestamp" type=text name="timestamp" value="<?php echo $this->form_encode_input($timestamp) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['timestamp']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['timestamp']['date_format']; ?>', timeSep: '<?php echo $this->field_config['timestamp']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['timestamp']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_timestamp_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_timestamp_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->timestamp = $old_dt_timestamp;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codigocompanhia']))
    {
        $this->nm_new_label['codigocompanhia'] = "Codigo Companhia";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codigocompanhia = $this->codigocompanhia;
   $sStyleHidden_codigocompanhia = '';
   if (isset($this->nmgp_cmp_hidden['codigocompanhia']) && $this->nmgp_cmp_hidden['codigocompanhia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codigocompanhia']);
       $sStyleHidden_codigocompanhia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codigocompanhia = 'display: none;';
   $sStyleReadInp_codigocompanhia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['codigocompanhia']) && $this->nmgp_cmp_readonly['codigocompanhia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codigocompanhia']);
       $sStyleReadLab_codigocompanhia = '';
       $sStyleReadInp_codigocompanhia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codigocompanhia']) && $this->nmgp_cmp_hidden['codigocompanhia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigocompanhia" value="<?php echo $this->form_encode_input($codigocompanhia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_codigocompanhia_label" id="hidden_field_label_codigocompanhia" style="<?php echo $sStyleHidden_codigocompanhia; ?>"><span id="id_label_codigocompanhia"><?php echo $this->nm_new_label['codigocompanhia']; ?></span></TD>
    <TD class="scFormDataOdd css_codigocompanhia_line" id="hidden_field_data_codigocompanhia" style="<?php echo $sStyleHidden_codigocompanhia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigocompanhia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codigocompanhia"]) &&  $this->nmgp_cmp_readonly["codigocompanhia"] == "on") { 

 ?>
<input type="hidden" name="codigocompanhia" value="<?php echo $this->form_encode_input($codigocompanhia) . "\">" . $codigocompanhia . ""; ?>
<?php } else { ?>
<span id="id_read_on_codigocompanhia" class="sc-ui-readonly-codigocompanhia css_codigocompanhia_line" style="<?php echo $sStyleReadLab_codigocompanhia; ?>"><?php echo $this->codigocompanhia; ?></span><span id="id_read_off_codigocompanhia" class="css_read_off_codigocompanhia" style="white-space: nowrap;<?php echo $sStyleReadInp_codigocompanhia; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigocompanhia_obj" style="" id="id_sc_field_codigocompanhia" type=text name="codigocompanhia" value="<?php echo $this->form_encode_input($codigocompanhia) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigocompanhia']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigocompanhia']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigocompanhia']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigocompanhia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigocompanhia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['autorizado']))
    {
        $this->nm_new_label['autorizado'] = "Autorizado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $autorizado = $this->autorizado;
   $sStyleHidden_autorizado = '';
   if (isset($this->nmgp_cmp_hidden['autorizado']) && $this->nmgp_cmp_hidden['autorizado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['autorizado']);
       $sStyleHidden_autorizado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_autorizado = 'display: none;';
   $sStyleReadInp_autorizado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['autorizado']) && $this->nmgp_cmp_readonly['autorizado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['autorizado']);
       $sStyleReadLab_autorizado = '';
       $sStyleReadInp_autorizado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['autorizado']) && $this->nmgp_cmp_hidden['autorizado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="autorizado" value="<?php echo $this->form_encode_input($autorizado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_autorizado_label" id="hidden_field_label_autorizado" style="<?php echo $sStyleHidden_autorizado; ?>"><span id="id_label_autorizado"><?php echo $this->nm_new_label['autorizado']; ?></span></TD>
    <TD class="scFormDataOdd css_autorizado_line" id="hidden_field_data_autorizado" style="<?php echo $sStyleHidden_autorizado; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_autorizado_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["autorizado"]) &&  $this->nmgp_cmp_readonly["autorizado"] == "on") { 

 ?>
<input type="hidden" name="autorizado" value="<?php echo $this->form_encode_input($autorizado) . "\">" . $autorizado . ""; ?>
<?php } else { ?>
<span id="id_read_on_autorizado" class="sc-ui-readonly-autorizado css_autorizado_line" style="<?php echo $sStyleReadLab_autorizado; ?>"><?php echo $this->autorizado; ?></span><span id="id_read_off_autorizado" class="css_read_off_autorizado" style="white-space: nowrap;<?php echo $sStyleReadInp_autorizado; ?>">
 <input class="sc-js-input scFormObjectOdd css_autorizado_obj" style="" id="id_sc_field_autorizado" type=text name="autorizado" value="<?php echo $this->form_encode_input($autorizado) ?>"
 size=3 alt="{datatype: 'integer', maxLength: 3, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['autorizado']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['autorizado']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['autorizado']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_autorizado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_autorizado_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['audioautorizacao']))
    {
        $this->nm_new_label['audioautorizacao'] = "Audio Autorizacao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $audioautorizacao = $this->audioautorizacao;
   $sStyleHidden_audioautorizacao = '';
   if (isset($this->nmgp_cmp_hidden['audioautorizacao']) && $this->nmgp_cmp_hidden['audioautorizacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['audioautorizacao']);
       $sStyleHidden_audioautorizacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_audioautorizacao = 'display: none;';
   $sStyleReadInp_audioautorizacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['audioautorizacao']) && $this->nmgp_cmp_readonly['audioautorizacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['audioautorizacao']);
       $sStyleReadLab_audioautorizacao = '';
       $sStyleReadInp_audioautorizacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['audioautorizacao']) && $this->nmgp_cmp_hidden['audioautorizacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="audioautorizacao" value="<?php echo $this->form_encode_input($audioautorizacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_audioautorizacao_label" id="hidden_field_label_audioautorizacao" style="<?php echo $sStyleHidden_audioautorizacao; ?>"><span id="id_label_audioautorizacao"><?php echo $this->nm_new_label['audioautorizacao']; ?></span></TD>
    <TD class="scFormDataOdd css_audioautorizacao_line" id="hidden_field_data_audioautorizacao" style="<?php echo $sStyleHidden_audioautorizacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_audioautorizacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["audioautorizacao"]) &&  $this->nmgp_cmp_readonly["audioautorizacao"] == "on") { 

 ?>
<input type="hidden" name="audioautorizacao" value="<?php echo $this->form_encode_input($audioautorizacao) . "\">" . $audioautorizacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_audioautorizacao" class="sc-ui-readonly-audioautorizacao css_audioautorizacao_line" style="<?php echo $sStyleReadLab_audioautorizacao; ?>"><?php echo $this->audioautorizacao; ?></span><span id="id_read_off_audioautorizacao" class="css_read_off_audioautorizacao" style="white-space: nowrap;<?php echo $sStyleReadInp_audioautorizacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_audioautorizacao_obj" style="" id="id_sc_field_audioautorizacao" type=text name="audioautorizacao" value="<?php echo $this->form_encode_input($audioautorizacao) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_audioautorizacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_audioautorizacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ultimocontato']))
    {
        $this->nm_new_label['ultimocontato'] = "Ultimo Contato";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_ultimocontato = $this->ultimocontato;
   if (strlen($this->ultimocontato_hora) > 8 ) {$this->ultimocontato_hora = substr($this->ultimocontato_hora, 0, 8);}
   $this->ultimocontato .= ' ' . $this->ultimocontato_hora;
   $ultimocontato = $this->ultimocontato;
   $sStyleHidden_ultimocontato = '';
   if (isset($this->nmgp_cmp_hidden['ultimocontato']) && $this->nmgp_cmp_hidden['ultimocontato'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ultimocontato']);
       $sStyleHidden_ultimocontato = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ultimocontato = 'display: none;';
   $sStyleReadInp_ultimocontato = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ultimocontato']) && $this->nmgp_cmp_readonly['ultimocontato'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ultimocontato']);
       $sStyleReadLab_ultimocontato = '';
       $sStyleReadInp_ultimocontato = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ultimocontato']) && $this->nmgp_cmp_hidden['ultimocontato'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ultimocontato" value="<?php echo $this->form_encode_input($ultimocontato) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ultimocontato_label" id="hidden_field_label_ultimocontato" style="<?php echo $sStyleHidden_ultimocontato; ?>"><span id="id_label_ultimocontato"><?php echo $this->nm_new_label['ultimocontato']; ?></span></TD>
    <TD class="scFormDataOdd css_ultimocontato_line" id="hidden_field_data_ultimocontato" style="<?php echo $sStyleHidden_ultimocontato; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ultimocontato_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ultimocontato"]) &&  $this->nmgp_cmp_readonly["ultimocontato"] == "on") { 

 ?>
<input type="hidden" name="ultimocontato" value="<?php echo $this->form_encode_input($ultimocontato) . "\">" . $ultimocontato . ""; ?>
<?php } else { ?>
<span id="id_read_on_ultimocontato" class="sc-ui-readonly-ultimocontato css_ultimocontato_line" style="<?php echo $sStyleReadLab_ultimocontato; ?>"><?php echo $ultimocontato; ?></span><span id="id_read_off_ultimocontato" class="css_read_off_ultimocontato" style="white-space: nowrap;<?php echo $sStyleReadInp_ultimocontato; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_ultimocontato_obj" style="" id="id_sc_field_ultimocontato" type=text name="ultimocontato" value="<?php echo $this->form_encode_input($ultimocontato) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['ultimocontato']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['ultimocontato']['date_format']; ?>', timeSep: '<?php echo $this->field_config['ultimocontato']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['ultimocontato']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ultimocontato_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ultimocontato_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->ultimocontato = $old_dt_ultimocontato;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['motivocancelamento']))
    {
        $this->nm_new_label['motivocancelamento'] = "Motivo Cancelamento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $motivocancelamento = $this->motivocancelamento;
   $sStyleHidden_motivocancelamento = '';
   if (isset($this->nmgp_cmp_hidden['motivocancelamento']) && $this->nmgp_cmp_hidden['motivocancelamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['motivocancelamento']);
       $sStyleHidden_motivocancelamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_motivocancelamento = 'display: none;';
   $sStyleReadInp_motivocancelamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['motivocancelamento']) && $this->nmgp_cmp_readonly['motivocancelamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['motivocancelamento']);
       $sStyleReadLab_motivocancelamento = '';
       $sStyleReadInp_motivocancelamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['motivocancelamento']) && $this->nmgp_cmp_hidden['motivocancelamento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="motivocancelamento" value="<?php echo $this->form_encode_input($motivocancelamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_motivocancelamento_label" id="hidden_field_label_motivocancelamento" style="<?php echo $sStyleHidden_motivocancelamento; ?>"><span id="id_label_motivocancelamento"><?php echo $this->nm_new_label['motivocancelamento']; ?></span></TD>
    <TD class="scFormDataOdd css_motivocancelamento_line" id="hidden_field_data_motivocancelamento" style="<?php echo $sStyleHidden_motivocancelamento; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_motivocancelamento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["motivocancelamento"]) &&  $this->nmgp_cmp_readonly["motivocancelamento"] == "on") { 

 ?>
<input type="hidden" name="motivocancelamento" value="<?php echo $this->form_encode_input($motivocancelamento) . "\">" . $motivocancelamento . ""; ?>
<?php } else { ?>
<span id="id_read_on_motivocancelamento" class="sc-ui-readonly-motivocancelamento css_motivocancelamento_line" style="<?php echo $sStyleReadLab_motivocancelamento; ?>"><?php echo $this->motivocancelamento; ?></span><span id="id_read_off_motivocancelamento" class="css_read_off_motivocancelamento" style="white-space: nowrap;<?php echo $sStyleReadInp_motivocancelamento; ?>">
 <input class="sc-js-input scFormObjectOdd css_motivocancelamento_obj" style="" id="id_sc_field_motivocancelamento" type=text name="motivocancelamento" value="<?php echo $this->form_encode_input($motivocancelamento) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['motivocancelamento']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['motivocancelamento']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['motivocancelamento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_motivocancelamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_motivocancelamento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['agradecimento']))
    {
        $this->nm_new_label['agradecimento'] = "Agradecimento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $agradecimento = $this->agradecimento;
   $sStyleHidden_agradecimento = '';
   if (isset($this->nmgp_cmp_hidden['agradecimento']) && $this->nmgp_cmp_hidden['agradecimento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['agradecimento']);
       $sStyleHidden_agradecimento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_agradecimento = 'display: none;';
   $sStyleReadInp_agradecimento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['agradecimento']) && $this->nmgp_cmp_readonly['agradecimento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['agradecimento']);
       $sStyleReadLab_agradecimento = '';
       $sStyleReadInp_agradecimento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['agradecimento']) && $this->nmgp_cmp_hidden['agradecimento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="agradecimento" value="<?php echo $this->form_encode_input($agradecimento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_agradecimento_label" id="hidden_field_label_agradecimento" style="<?php echo $sStyleHidden_agradecimento; ?>"><span id="id_label_agradecimento"><?php echo $this->nm_new_label['agradecimento']; ?></span></TD>
    <TD class="scFormDataOdd css_agradecimento_line" id="hidden_field_data_agradecimento" style="<?php echo $sStyleHidden_agradecimento; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_agradecimento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["agradecimento"]) &&  $this->nmgp_cmp_readonly["agradecimento"] == "on") { 

 ?>
<input type="hidden" name="agradecimento" value="<?php echo $this->form_encode_input($agradecimento) . "\">" . $agradecimento . ""; ?>
<?php } else { ?>
<span id="id_read_on_agradecimento" class="sc-ui-readonly-agradecimento css_agradecimento_line" style="<?php echo $sStyleReadLab_agradecimento; ?>"><?php echo $this->agradecimento; ?></span><span id="id_read_off_agradecimento" class="css_read_off_agradecimento" style="white-space: nowrap;<?php echo $sStyleReadInp_agradecimento; ?>">
 <input class="sc-js-input scFormObjectOdd css_agradecimento_obj" style="" id="id_sc_field_agradecimento" type=text name="agradecimento" value="<?php echo $this->form_encode_input($agradecimento) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['agradecimento']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['agradecimento']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['agradecimento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_agradecimento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_agradecimento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['auditado']))
    {
        $this->nm_new_label['auditado'] = "Auditado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $auditado = $this->auditado;
   $sStyleHidden_auditado = '';
   if (isset($this->nmgp_cmp_hidden['auditado']) && $this->nmgp_cmp_hidden['auditado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['auditado']);
       $sStyleHidden_auditado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_auditado = 'display: none;';
   $sStyleReadInp_auditado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['auditado']) && $this->nmgp_cmp_readonly['auditado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['auditado']);
       $sStyleReadLab_auditado = '';
       $sStyleReadInp_auditado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['auditado']) && $this->nmgp_cmp_hidden['auditado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="auditado" value="<?php echo $this->form_encode_input($auditado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_auditado_label" id="hidden_field_label_auditado" style="<?php echo $sStyleHidden_auditado; ?>"><span id="id_label_auditado"><?php echo $this->nm_new_label['auditado']; ?></span></TD>
    <TD class="scFormDataOdd css_auditado_line" id="hidden_field_data_auditado" style="<?php echo $sStyleHidden_auditado; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_auditado_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["auditado"]) &&  $this->nmgp_cmp_readonly["auditado"] == "on") { 

 ?>
<input type="hidden" name="auditado" value="<?php echo $this->form_encode_input($auditado) . "\">" . $auditado . ""; ?>
<?php } else { ?>
<span id="id_read_on_auditado" class="sc-ui-readonly-auditado css_auditado_line" style="<?php echo $sStyleReadLab_auditado; ?>"><?php echo $this->auditado; ?></span><span id="id_read_off_auditado" class="css_read_off_auditado" style="white-space: nowrap;<?php echo $sStyleReadInp_auditado; ?>">
 <input class="sc-js-input scFormObjectOdd css_auditado_obj" style="" id="id_sc_field_auditado" type=text name="auditado" value="<?php echo $this->form_encode_input($auditado) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['auditado']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['auditado']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['auditado']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_auditado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_auditado_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipodoacao']))
    {
        $this->nm_new_label['tipodoacao'] = "Tipo Doacao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipodoacao = $this->tipodoacao;
   $sStyleHidden_tipodoacao = '';
   if (isset($this->nmgp_cmp_hidden['tipodoacao']) && $this->nmgp_cmp_hidden['tipodoacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipodoacao']);
       $sStyleHidden_tipodoacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipodoacao = 'display: none;';
   $sStyleReadInp_tipodoacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipodoacao']) && $this->nmgp_cmp_readonly['tipodoacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipodoacao']);
       $sStyleReadLab_tipodoacao = '';
       $sStyleReadInp_tipodoacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipodoacao']) && $this->nmgp_cmp_hidden['tipodoacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipodoacao" value="<?php echo $this->form_encode_input($tipodoacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_tipodoacao_label" id="hidden_field_label_tipodoacao" style="<?php echo $sStyleHidden_tipodoacao; ?>"><span id="id_label_tipodoacao"><?php echo $this->nm_new_label['tipodoacao']; ?></span></TD>
    <TD class="scFormDataOdd css_tipodoacao_line" id="hidden_field_data_tipodoacao" style="<?php echo $sStyleHidden_tipodoacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipodoacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipodoacao"]) &&  $this->nmgp_cmp_readonly["tipodoacao"] == "on") { 

 ?>
<input type="hidden" name="tipodoacao" value="<?php echo $this->form_encode_input($tipodoacao) . "\">" . $tipodoacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipodoacao" class="sc-ui-readonly-tipodoacao css_tipodoacao_line" style="<?php echo $sStyleReadLab_tipodoacao; ?>"><?php echo $this->tipodoacao; ?></span><span id="id_read_off_tipodoacao" class="css_read_off_tipodoacao" style="white-space: nowrap;<?php echo $sStyleReadInp_tipodoacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipodoacao_obj" style="" id="id_sc_field_tipodoacao" type=text name="tipodoacao" value="<?php echo $this->form_encode_input($tipodoacao) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipodoacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipodoacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['parcelas']))
    {
        $this->nm_new_label['parcelas'] = "Parcelas";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parcelas = $this->parcelas;
   $sStyleHidden_parcelas = '';
   if (isset($this->nmgp_cmp_hidden['parcelas']) && $this->nmgp_cmp_hidden['parcelas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parcelas']);
       $sStyleHidden_parcelas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parcelas = 'display: none;';
   $sStyleReadInp_parcelas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parcelas']) && $this->nmgp_cmp_readonly['parcelas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parcelas']);
       $sStyleReadLab_parcelas = '';
       $sStyleReadInp_parcelas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parcelas']) && $this->nmgp_cmp_hidden['parcelas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="parcelas" value="<?php echo $this->form_encode_input($parcelas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_parcelas_label" id="hidden_field_label_parcelas" style="<?php echo $sStyleHidden_parcelas; ?>"><span id="id_label_parcelas"><?php echo $this->nm_new_label['parcelas']; ?></span></TD>
    <TD class="scFormDataOdd css_parcelas_line" id="hidden_field_data_parcelas" style="<?php echo $sStyleHidden_parcelas; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parcelas_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parcelas"]) &&  $this->nmgp_cmp_readonly["parcelas"] == "on") { 

 ?>
<input type="hidden" name="parcelas" value="<?php echo $this->form_encode_input($parcelas) . "\">" . $parcelas . ""; ?>
<?php } else { ?>
<span id="id_read_on_parcelas" class="sc-ui-readonly-parcelas css_parcelas_line" style="<?php echo $sStyleReadLab_parcelas; ?>"><?php echo $this->parcelas; ?></span><span id="id_read_off_parcelas" class="css_read_off_parcelas" style="white-space: nowrap;<?php echo $sStyleReadInp_parcelas; ?>">
 <input class="sc-js-input scFormObjectOdd css_parcelas_obj" style="" id="id_sc_field_parcelas" type=text name="parcelas" value="<?php echo $this->form_encode_input($parcelas) ?>"
 size=3 alt="{datatype: 'integer', maxLength: 3, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['parcelas']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['parcelas']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['parcelas']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parcelas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parcelas_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codigoparcelas']))
    {
        $this->nm_new_label['codigoparcelas'] = "Codigo Parcelas";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codigoparcelas = $this->codigoparcelas;
   $sStyleHidden_codigoparcelas = '';
   if (isset($this->nmgp_cmp_hidden['codigoparcelas']) && $this->nmgp_cmp_hidden['codigoparcelas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codigoparcelas']);
       $sStyleHidden_codigoparcelas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codigoparcelas = 'display: none;';
   $sStyleReadInp_codigoparcelas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['codigoparcelas']) && $this->nmgp_cmp_readonly['codigoparcelas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codigoparcelas']);
       $sStyleReadLab_codigoparcelas = '';
       $sStyleReadInp_codigoparcelas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codigoparcelas']) && $this->nmgp_cmp_hidden['codigoparcelas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigoparcelas" value="<?php echo $this->form_encode_input($codigoparcelas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_codigoparcelas_label" id="hidden_field_label_codigoparcelas" style="<?php echo $sStyleHidden_codigoparcelas; ?>"><span id="id_label_codigoparcelas"><?php echo $this->nm_new_label['codigoparcelas']; ?></span></TD>
    <TD class="scFormDataOdd css_codigoparcelas_line" id="hidden_field_data_codigoparcelas" style="<?php echo $sStyleHidden_codigoparcelas; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigoparcelas_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codigoparcelas"]) &&  $this->nmgp_cmp_readonly["codigoparcelas"] == "on") { 

 ?>
<input type="hidden" name="codigoparcelas" value="<?php echo $this->form_encode_input($codigoparcelas) . "\">" . $codigoparcelas . ""; ?>
<?php } else { ?>
<span id="id_read_on_codigoparcelas" class="sc-ui-readonly-codigoparcelas css_codigoparcelas_line" style="<?php echo $sStyleReadLab_codigoparcelas; ?>"><?php echo $this->codigoparcelas; ?></span><span id="id_read_off_codigoparcelas" class="css_read_off_codigoparcelas" style="white-space: nowrap;<?php echo $sStyleReadInp_codigoparcelas; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigoparcelas_obj" style="" id="id_sc_field_codigoparcelas" type=text name="codigoparcelas" value="<?php echo $this->form_encode_input($codigoparcelas) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigoparcelas']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigoparcelas']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigoparcelas']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigoparcelas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigoparcelas_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['servidoraudio']))
    {
        $this->nm_new_label['servidoraudio'] = "Servidor Audio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $servidoraudio = $this->servidoraudio;
   $sStyleHidden_servidoraudio = '';
   if (isset($this->nmgp_cmp_hidden['servidoraudio']) && $this->nmgp_cmp_hidden['servidoraudio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['servidoraudio']);
       $sStyleHidden_servidoraudio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_servidoraudio = 'display: none;';
   $sStyleReadInp_servidoraudio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['servidoraudio']) && $this->nmgp_cmp_readonly['servidoraudio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['servidoraudio']);
       $sStyleReadLab_servidoraudio = '';
       $sStyleReadInp_servidoraudio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['servidoraudio']) && $this->nmgp_cmp_hidden['servidoraudio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="servidoraudio" value="<?php echo $this->form_encode_input($servidoraudio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_servidoraudio_label" id="hidden_field_label_servidoraudio" style="<?php echo $sStyleHidden_servidoraudio; ?>"><span id="id_label_servidoraudio"><?php echo $this->nm_new_label['servidoraudio']; ?></span></TD>
    <TD class="scFormDataOdd css_servidoraudio_line" id="hidden_field_data_servidoraudio" style="<?php echo $sStyleHidden_servidoraudio; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_servidoraudio_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["servidoraudio"]) &&  $this->nmgp_cmp_readonly["servidoraudio"] == "on") { 

 ?>
<input type="hidden" name="servidoraudio" value="<?php echo $this->form_encode_input($servidoraudio) . "\">" . $servidoraudio . ""; ?>
<?php } else { ?>
<span id="id_read_on_servidoraudio" class="sc-ui-readonly-servidoraudio css_servidoraudio_line" style="<?php echo $sStyleReadLab_servidoraudio; ?>"><?php echo $this->servidoraudio; ?></span><span id="id_read_off_servidoraudio" class="css_read_off_servidoraudio" style="white-space: nowrap;<?php echo $sStyleReadInp_servidoraudio; ?>">
 <input class="sc-js-input scFormObjectOdd css_servidoraudio_obj" style="" id="id_sc_field_servidoraudio" type=text name="servidoraudio" value="<?php echo $this->form_encode_input($servidoraudio) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_servidoraudio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_servidoraudio_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", "scBtnFn_sys_GridPermiteSeq()", "scBtnFn_sys_GridPermiteSeq()", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-11", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-12", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-13", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-14", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_financeiro_1");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_financeiro_1");
 parent.scAjaxDetailHeight("form_financeiro_1", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_financeiro_1", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_financeiro_1", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['sc_modal'])
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
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-5").length && $("#sc_b_del_t.sc-unique-btn-5").is(":visible")) {
			nm_atualiza ('excluir');
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
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq() {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
			nm_navpage(document.F1.nmgp_rec_b.value, 'P'); document.F1.nmgp_rec_b.value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-11").length && $("#sc_b_ini_b.sc-unique-btn-11").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-12").length && $("#sc_b_ret_b.sc-unique-btn-12").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-13").length && $("#sc_b_avc_b.sc-unique-btn-13").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-14").length && $("#sc_b_fim_b.sc-unique-btn-14").is(":visible")) {
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
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_financeiro_1']['buttonStatus'] = $this->nmgp_botoes;
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
