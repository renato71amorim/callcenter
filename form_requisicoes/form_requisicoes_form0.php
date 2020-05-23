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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - requisicoes"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - requisicoes"); } ?></TITLE>
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
.css_read_off_dtfinalizacao button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_dtgerada button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_requisicoes/form_requisicoes_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_requisicoes_sajax_js.php");
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

include_once('form_requisicoes_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
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
 include_once("form_requisicoes_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_requisicoes'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_requisicoes'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['fast_search'][2] : "";
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
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-6", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['empty_filter'] = true;
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
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['idrequisicao']))
           {
               $this->nmgp_cmp_readonly['idrequisicao'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idrequisicao']))
    {
        $this->nm_new_label['idrequisicao'] = "Id Requisicao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idrequisicao = $this->idrequisicao;
   $sStyleHidden_idrequisicao = '';
   if (isset($this->nmgp_cmp_hidden['idrequisicao']) && $this->nmgp_cmp_hidden['idrequisicao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idrequisicao']);
       $sStyleHidden_idrequisicao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idrequisicao = 'display: none;';
   $sStyleReadInp_idrequisicao = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["idrequisicao"]) &&  $this->nmgp_cmp_readonly["idrequisicao"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idrequisicao']);
       $sStyleReadLab_idrequisicao = '';
       $sStyleReadInp_idrequisicao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idrequisicao']) && $this->nmgp_cmp_hidden['idrequisicao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idrequisicao" value="<?php echo $this->form_encode_input($idrequisicao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idrequisicao_label" id="hidden_field_label_idrequisicao" style="<?php echo $sStyleHidden_idrequisicao; ?>"><span id="id_label_idrequisicao"><?php echo $this->nm_new_label['idrequisicao']; ?></span></TD>
    <TD class="scFormDataOdd css_idrequisicao_line" id="hidden_field_data_idrequisicao" style="<?php echo $sStyleHidden_idrequisicao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idrequisicao_line" style="vertical-align: top;padding: 0px"><span id="id_read_on_idrequisicao" class="css_idrequisicao_line" style="<?php echo $sStyleReadLab_idrequisicao; ?>"><?php echo $this->form_encode_input($this->idrequisicao); ?></span><span id="id_read_off_idrequisicao" class="css_read_off_idrequisicao" style="<?php echo $sStyleReadInp_idrequisicao; ?>"><input type="hidden" name="idrequisicao" value="<?php echo $this->form_encode_input($idrequisicao) . "\">"?><span id="id_ajax_label_idrequisicao"><?php echo nl2br($idrequisicao); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idrequisicao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idrequisicao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codcontribuinte']))
    {
        $this->nm_new_label['codcontribuinte'] = "Cod Contribuinte";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codcontribuinte = $this->codcontribuinte;
   $sStyleHidden_codcontribuinte = '';
   if (isset($this->nmgp_cmp_hidden['codcontribuinte']) && $this->nmgp_cmp_hidden['codcontribuinte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codcontribuinte']);
       $sStyleHidden_codcontribuinte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codcontribuinte = 'display: none;';
   $sStyleReadInp_codcontribuinte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['codcontribuinte']) && $this->nmgp_cmp_readonly['codcontribuinte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codcontribuinte']);
       $sStyleReadLab_codcontribuinte = '';
       $sStyleReadInp_codcontribuinte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codcontribuinte']) && $this->nmgp_cmp_hidden['codcontribuinte'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codcontribuinte" value="<?php echo $this->form_encode_input($codcontribuinte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_codcontribuinte_label" id="hidden_field_label_codcontribuinte" style="<?php echo $sStyleHidden_codcontribuinte; ?>"><span id="id_label_codcontribuinte"><?php echo $this->nm_new_label['codcontribuinte']; ?></span></TD>
    <TD class="scFormDataOdd css_codcontribuinte_line" id="hidden_field_data_codcontribuinte" style="<?php echo $sStyleHidden_codcontribuinte; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codcontribuinte_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codcontribuinte"]) &&  $this->nmgp_cmp_readonly["codcontribuinte"] == "on") { 

 ?>
<input type="hidden" name="codcontribuinte" value="<?php echo $this->form_encode_input($codcontribuinte) . "\">" . $codcontribuinte . ""; ?>
<?php } else { ?>
<span id="id_read_on_codcontribuinte" class="sc-ui-readonly-codcontribuinte css_codcontribuinte_line" style="<?php echo $sStyleReadLab_codcontribuinte; ?>"><?php echo $this->codcontribuinte; ?></span><span id="id_read_off_codcontribuinte" class="css_read_off_codcontribuinte" style="white-space: nowrap;<?php echo $sStyleReadInp_codcontribuinte; ?>">
 <input class="sc-js-input scFormObjectOdd css_codcontribuinte_obj" style="" id="id_sc_field_codcontribuinte" type=text name="codcontribuinte" value="<?php echo $this->form_encode_input($codcontribuinte) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codcontribuinte']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codcontribuinte']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codcontribuinte']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codcontribuinte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codcontribuinte_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nomecontribuinte']))
    {
        $this->nm_new_label['nomecontribuinte'] = "Nome Contribuinte";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nomecontribuinte = $this->nomecontribuinte;
   $sStyleHidden_nomecontribuinte = '';
   if (isset($this->nmgp_cmp_hidden['nomecontribuinte']) && $this->nmgp_cmp_hidden['nomecontribuinte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nomecontribuinte']);
       $sStyleHidden_nomecontribuinte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nomecontribuinte = 'display: none;';
   $sStyleReadInp_nomecontribuinte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nomecontribuinte']) && $this->nmgp_cmp_readonly['nomecontribuinte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nomecontribuinte']);
       $sStyleReadLab_nomecontribuinte = '';
       $sStyleReadInp_nomecontribuinte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nomecontribuinte']) && $this->nmgp_cmp_hidden['nomecontribuinte'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nomecontribuinte" value="<?php echo $this->form_encode_input($nomecontribuinte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nomecontribuinte_label" id="hidden_field_label_nomecontribuinte" style="<?php echo $sStyleHidden_nomecontribuinte; ?>"><span id="id_label_nomecontribuinte"><?php echo $this->nm_new_label['nomecontribuinte']; ?></span></TD>
    <TD class="scFormDataOdd css_nomecontribuinte_line" id="hidden_field_data_nomecontribuinte" style="<?php echo $sStyleHidden_nomecontribuinte; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nomecontribuinte_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nomecontribuinte"]) &&  $this->nmgp_cmp_readonly["nomecontribuinte"] == "on") { 

 ?>
<input type="hidden" name="nomecontribuinte" value="<?php echo $this->form_encode_input($nomecontribuinte) . "\">" . $nomecontribuinte . ""; ?>
<?php } else { ?>
<span id="id_read_on_nomecontribuinte" class="sc-ui-readonly-nomecontribuinte css_nomecontribuinte_line" style="<?php echo $sStyleReadLab_nomecontribuinte; ?>"><?php echo $this->nomecontribuinte; ?></span><span id="id_read_off_nomecontribuinte" class="css_read_off_nomecontribuinte" style="white-space: nowrap;<?php echo $sStyleReadInp_nomecontribuinte; ?>">
 <input class="sc-js-input scFormObjectOdd css_nomecontribuinte_obj" style="" id="id_sc_field_nomecontribuinte" type=text name="nomecontribuinte" value="<?php echo $this->form_encode_input($nomecontribuinte) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nomecontribuinte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nomecontribuinte_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fone1']))
    {
        $this->nm_new_label['fone1'] = "Fone 1";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fone1 = $this->fone1;
   $sStyleHidden_fone1 = '';
   if (isset($this->nmgp_cmp_hidden['fone1']) && $this->nmgp_cmp_hidden['fone1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fone1']);
       $sStyleHidden_fone1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fone1 = 'display: none;';
   $sStyleReadInp_fone1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fone1']) && $this->nmgp_cmp_readonly['fone1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fone1']);
       $sStyleReadLab_fone1 = '';
       $sStyleReadInp_fone1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fone1']) && $this->nmgp_cmp_hidden['fone1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fone1" value="<?php echo $this->form_encode_input($fone1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fone1_label" id="hidden_field_label_fone1" style="<?php echo $sStyleHidden_fone1; ?>"><span id="id_label_fone1"><?php echo $this->nm_new_label['fone1']; ?></span></TD>
    <TD class="scFormDataOdd css_fone1_line" id="hidden_field_data_fone1" style="<?php echo $sStyleHidden_fone1; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fone1_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fone1"]) &&  $this->nmgp_cmp_readonly["fone1"] == "on") { 

 ?>
<input type="hidden" name="fone1" value="<?php echo $this->form_encode_input($fone1) . "\">" . $fone1 . ""; ?>
<?php } else { ?>
<span id="id_read_on_fone1" class="sc-ui-readonly-fone1 css_fone1_line" style="<?php echo $sStyleReadLab_fone1; ?>"><?php echo $this->fone1; ?></span><span id="id_read_off_fone1" class="css_read_off_fone1" style="white-space: nowrap;<?php echo $sStyleReadInp_fone1; ?>">
 <input class="sc-js-input scFormObjectOdd css_fone1_obj" style="" id="id_sc_field_fone1" type=text name="fone1" value="<?php echo $this->form_encode_input($fone1) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fone1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fone1_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fone2']))
    {
        $this->nm_new_label['fone2'] = "Fone 2";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fone2 = $this->fone2;
   $sStyleHidden_fone2 = '';
   if (isset($this->nmgp_cmp_hidden['fone2']) && $this->nmgp_cmp_hidden['fone2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fone2']);
       $sStyleHidden_fone2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fone2 = 'display: none;';
   $sStyleReadInp_fone2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fone2']) && $this->nmgp_cmp_readonly['fone2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fone2']);
       $sStyleReadLab_fone2 = '';
       $sStyleReadInp_fone2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fone2']) && $this->nmgp_cmp_hidden['fone2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fone2" value="<?php echo $this->form_encode_input($fone2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fone2_label" id="hidden_field_label_fone2" style="<?php echo $sStyleHidden_fone2; ?>"><span id="id_label_fone2"><?php echo $this->nm_new_label['fone2']; ?></span></TD>
    <TD class="scFormDataOdd css_fone2_line" id="hidden_field_data_fone2" style="<?php echo $sStyleHidden_fone2; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fone2_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fone2"]) &&  $this->nmgp_cmp_readonly["fone2"] == "on") { 

 ?>
<input type="hidden" name="fone2" value="<?php echo $this->form_encode_input($fone2) . "\">" . $fone2 . ""; ?>
<?php } else { ?>
<span id="id_read_on_fone2" class="sc-ui-readonly-fone2 css_fone2_line" style="<?php echo $sStyleReadLab_fone2; ?>"><?php echo $this->fone2; ?></span><span id="id_read_off_fone2" class="css_read_off_fone2" style="white-space: nowrap;<?php echo $sStyleReadInp_fone2; ?>">
 <input class="sc-js-input scFormObjectOdd css_fone2_obj" style="" id="id_sc_field_fone2" type=text name="fone2" value="<?php echo $this->form_encode_input($fone2) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fone2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fone2_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fone3']))
    {
        $this->nm_new_label['fone3'] = "Fone 3";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fone3 = $this->fone3;
   $sStyleHidden_fone3 = '';
   if (isset($this->nmgp_cmp_hidden['fone3']) && $this->nmgp_cmp_hidden['fone3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fone3']);
       $sStyleHidden_fone3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fone3 = 'display: none;';
   $sStyleReadInp_fone3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fone3']) && $this->nmgp_cmp_readonly['fone3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fone3']);
       $sStyleReadLab_fone3 = '';
       $sStyleReadInp_fone3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fone3']) && $this->nmgp_cmp_hidden['fone3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fone3" value="<?php echo $this->form_encode_input($fone3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fone3_label" id="hidden_field_label_fone3" style="<?php echo $sStyleHidden_fone3; ?>"><span id="id_label_fone3"><?php echo $this->nm_new_label['fone3']; ?></span></TD>
    <TD class="scFormDataOdd css_fone3_line" id="hidden_field_data_fone3" style="<?php echo $sStyleHidden_fone3; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fone3_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fone3"]) &&  $this->nmgp_cmp_readonly["fone3"] == "on") { 

 ?>
<input type="hidden" name="fone3" value="<?php echo $this->form_encode_input($fone3) . "\">" . $fone3 . ""; ?>
<?php } else { ?>
<span id="id_read_on_fone3" class="sc-ui-readonly-fone3 css_fone3_line" style="<?php echo $sStyleReadLab_fone3; ?>"><?php echo $this->fone3; ?></span><span id="id_read_off_fone3" class="css_read_off_fone3" style="white-space: nowrap;<?php echo $sStyleReadInp_fone3; ?>">
 <input class="sc-js-input scFormObjectOdd css_fone3_obj" style="" id="id_sc_field_fone3" type=text name="fone3" value="<?php echo $this->form_encode_input($fone3) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fone3_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fone3_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fone4']))
    {
        $this->nm_new_label['fone4'] = "Fone 4";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fone4 = $this->fone4;
   $sStyleHidden_fone4 = '';
   if (isset($this->nmgp_cmp_hidden['fone4']) && $this->nmgp_cmp_hidden['fone4'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fone4']);
       $sStyleHidden_fone4 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fone4 = 'display: none;';
   $sStyleReadInp_fone4 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fone4']) && $this->nmgp_cmp_readonly['fone4'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fone4']);
       $sStyleReadLab_fone4 = '';
       $sStyleReadInp_fone4 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fone4']) && $this->nmgp_cmp_hidden['fone4'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fone4" value="<?php echo $this->form_encode_input($fone4) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fone4_label" id="hidden_field_label_fone4" style="<?php echo $sStyleHidden_fone4; ?>"><span id="id_label_fone4"><?php echo $this->nm_new_label['fone4']; ?></span></TD>
    <TD class="scFormDataOdd css_fone4_line" id="hidden_field_data_fone4" style="<?php echo $sStyleHidden_fone4; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fone4_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fone4"]) &&  $this->nmgp_cmp_readonly["fone4"] == "on") { 

 ?>
<input type="hidden" name="fone4" value="<?php echo $this->form_encode_input($fone4) . "\">" . $fone4 . ""; ?>
<?php } else { ?>
<span id="id_read_on_fone4" class="sc-ui-readonly-fone4 css_fone4_line" style="<?php echo $sStyleReadLab_fone4; ?>"><?php echo $this->fone4; ?></span><span id="id_read_off_fone4" class="css_read_off_fone4" style="white-space: nowrap;<?php echo $sStyleReadInp_fone4; ?>">
 <input class="sc-js-input scFormObjectOdd css_fone4_obj" style="" id="id_sc_field_fone4" type=text name="fone4" value="<?php echo $this->form_encode_input($fone4) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fone4_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fone4_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['operadora']))
    {
        $this->nm_new_label['operadora'] = "Operadora";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $operadora = $this->operadora;
   $sStyleHidden_operadora = '';
   if (isset($this->nmgp_cmp_hidden['operadora']) && $this->nmgp_cmp_hidden['operadora'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['operadora']);
       $sStyleHidden_operadora = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_operadora = 'display: none;';
   $sStyleReadInp_operadora = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['operadora']) && $this->nmgp_cmp_readonly['operadora'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['operadora']);
       $sStyleReadLab_operadora = '';
       $sStyleReadInp_operadora = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['operadora']) && $this->nmgp_cmp_hidden['operadora'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="operadora" value="<?php echo $this->form_encode_input($operadora) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_operadora_label" id="hidden_field_label_operadora" style="<?php echo $sStyleHidden_operadora; ?>"><span id="id_label_operadora"><?php echo $this->nm_new_label['operadora']; ?></span></TD>
    <TD class="scFormDataOdd css_operadora_line" id="hidden_field_data_operadora" style="<?php echo $sStyleHidden_operadora; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_operadora_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["operadora"]) &&  $this->nmgp_cmp_readonly["operadora"] == "on") { 

 ?>
<input type="hidden" name="operadora" value="<?php echo $this->form_encode_input($operadora) . "\">" . $operadora . ""; ?>
<?php } else { ?>
<span id="id_read_on_operadora" class="sc-ui-readonly-operadora css_operadora_line" style="<?php echo $sStyleReadLab_operadora; ?>"><?php echo $this->operadora; ?></span><span id="id_read_off_operadora" class="css_read_off_operadora" style="white-space: nowrap;<?php echo $sStyleReadInp_operadora; ?>">
 <input class="sc-js-input scFormObjectOdd css_operadora_obj" style="" id="id_sc_field_operadora" type=text name="operadora" value="<?php echo $this->form_encode_input($operadora) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['operadora']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['operadora']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['operadora']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operadora_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operadora_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['finalizada']))
    {
        $this->nm_new_label['finalizada'] = "Finalizada";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $finalizada = $this->finalizada;
   $sStyleHidden_finalizada = '';
   if (isset($this->nmgp_cmp_hidden['finalizada']) && $this->nmgp_cmp_hidden['finalizada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['finalizada']);
       $sStyleHidden_finalizada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_finalizada = 'display: none;';
   $sStyleReadInp_finalizada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['finalizada']) && $this->nmgp_cmp_readonly['finalizada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['finalizada']);
       $sStyleReadLab_finalizada = '';
       $sStyleReadInp_finalizada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['finalizada']) && $this->nmgp_cmp_hidden['finalizada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="finalizada" value="<?php echo $this->form_encode_input($finalizada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_finalizada_label" id="hidden_field_label_finalizada" style="<?php echo $sStyleHidden_finalizada; ?>"><span id="id_label_finalizada"><?php echo $this->nm_new_label['finalizada']; ?></span></TD>
    <TD class="scFormDataOdd css_finalizada_line" id="hidden_field_data_finalizada" style="<?php echo $sStyleHidden_finalizada; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_finalizada_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["finalizada"]) &&  $this->nmgp_cmp_readonly["finalizada"] == "on") { 

 ?>
<input type="hidden" name="finalizada" value="<?php echo $this->form_encode_input($finalizada) . "\">" . $finalizada . ""; ?>
<?php } else { ?>
<span id="id_read_on_finalizada" class="sc-ui-readonly-finalizada css_finalizada_line" style="<?php echo $sStyleReadLab_finalizada; ?>"><?php echo $this->finalizada; ?></span><span id="id_read_off_finalizada" class="css_read_off_finalizada" style="white-space: nowrap;<?php echo $sStyleReadInp_finalizada; ?>">
 <input class="sc-js-input scFormObjectOdd css_finalizada_obj" style="" id="id_sc_field_finalizada" type=text name="finalizada" value="<?php echo $this->form_encode_input($finalizada) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['finalizada']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['finalizada']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['finalizada']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_finalizada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_finalizada_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dtfinalizacao']))
    {
        $this->nm_new_label['dtfinalizacao'] = "Dt Finalizacao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_dtfinalizacao = $this->dtfinalizacao;
   if (strlen($this->dtfinalizacao_hora) > 8 ) {$this->dtfinalizacao_hora = substr($this->dtfinalizacao_hora, 0, 8);}
   $this->dtfinalizacao .= ' ' . $this->dtfinalizacao_hora;
   $dtfinalizacao = $this->dtfinalizacao;
   $sStyleHidden_dtfinalizacao = '';
   if (isset($this->nmgp_cmp_hidden['dtfinalizacao']) && $this->nmgp_cmp_hidden['dtfinalizacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dtfinalizacao']);
       $sStyleHidden_dtfinalizacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dtfinalizacao = 'display: none;';
   $sStyleReadInp_dtfinalizacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dtfinalizacao']) && $this->nmgp_cmp_readonly['dtfinalizacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dtfinalizacao']);
       $sStyleReadLab_dtfinalizacao = '';
       $sStyleReadInp_dtfinalizacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dtfinalizacao']) && $this->nmgp_cmp_hidden['dtfinalizacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dtfinalizacao" value="<?php echo $this->form_encode_input($dtfinalizacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dtfinalizacao_label" id="hidden_field_label_dtfinalizacao" style="<?php echo $sStyleHidden_dtfinalizacao; ?>"><span id="id_label_dtfinalizacao"><?php echo $this->nm_new_label['dtfinalizacao']; ?></span></TD>
    <TD class="scFormDataOdd css_dtfinalizacao_line" id="hidden_field_data_dtfinalizacao" style="<?php echo $sStyleHidden_dtfinalizacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dtfinalizacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dtfinalizacao"]) &&  $this->nmgp_cmp_readonly["dtfinalizacao"] == "on") { 

 ?>
<input type="hidden" name="dtfinalizacao" value="<?php echo $this->form_encode_input($dtfinalizacao) . "\">" . $dtfinalizacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_dtfinalizacao" class="sc-ui-readonly-dtfinalizacao css_dtfinalizacao_line" style="<?php echo $sStyleReadLab_dtfinalizacao; ?>"><?php echo $dtfinalizacao; ?></span><span id="id_read_off_dtfinalizacao" class="css_read_off_dtfinalizacao" style="white-space: nowrap;<?php echo $sStyleReadInp_dtfinalizacao; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_dtfinalizacao_obj" style="" id="id_sc_field_dtfinalizacao" type=text name="dtfinalizacao" value="<?php echo $this->form_encode_input($dtfinalizacao) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['dtfinalizacao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dtfinalizacao']['date_format']; ?>', timeSep: '<?php echo $this->field_config['dtfinalizacao']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['dtfinalizacao']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dtfinalizacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dtfinalizacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->dtfinalizacao = $old_dt_dtfinalizacao;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dtgerada']))
    {
        $this->nm_new_label['dtgerada'] = "Dt Gerada";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_dtgerada = $this->dtgerada;
   if (strlen($this->dtgerada_hora) > 8 ) {$this->dtgerada_hora = substr($this->dtgerada_hora, 0, 8);}
   $this->dtgerada .= ' ' . $this->dtgerada_hora;
   $dtgerada = $this->dtgerada;
   $sStyleHidden_dtgerada = '';
   if (isset($this->nmgp_cmp_hidden['dtgerada']) && $this->nmgp_cmp_hidden['dtgerada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dtgerada']);
       $sStyleHidden_dtgerada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dtgerada = 'display: none;';
   $sStyleReadInp_dtgerada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dtgerada']) && $this->nmgp_cmp_readonly['dtgerada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dtgerada']);
       $sStyleReadLab_dtgerada = '';
       $sStyleReadInp_dtgerada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dtgerada']) && $this->nmgp_cmp_hidden['dtgerada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dtgerada" value="<?php echo $this->form_encode_input($dtgerada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dtgerada_label" id="hidden_field_label_dtgerada" style="<?php echo $sStyleHidden_dtgerada; ?>"><span id="id_label_dtgerada"><?php echo $this->nm_new_label['dtgerada']; ?></span></TD>
    <TD class="scFormDataOdd css_dtgerada_line" id="hidden_field_data_dtgerada" style="<?php echo $sStyleHidden_dtgerada; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dtgerada_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dtgerada"]) &&  $this->nmgp_cmp_readonly["dtgerada"] == "on") { 

 ?>
<input type="hidden" name="dtgerada" value="<?php echo $this->form_encode_input($dtgerada) . "\">" . $dtgerada . ""; ?>
<?php } else { ?>
<span id="id_read_on_dtgerada" class="sc-ui-readonly-dtgerada css_dtgerada_line" style="<?php echo $sStyleReadLab_dtgerada; ?>"><?php echo $dtgerada; ?></span><span id="id_read_off_dtgerada" class="css_read_off_dtgerada" style="white-space: nowrap;<?php echo $sStyleReadInp_dtgerada; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_dtgerada_obj" style="" id="id_sc_field_dtgerada" type=text name="dtgerada" value="<?php echo $this->form_encode_input($dtgerada) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['dtgerada']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dtgerada']['date_format']; ?>', timeSep: '<?php echo $this->field_config['dtgerada']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['dtgerada']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dtgerada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dtgerada_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->dtgerada = $old_dt_dtgerada;
?>

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
 size=2 alt="{datatype: 'integer', maxLength: 2, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['status']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['status']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['status']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_status_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['setor']))
    {
        $this->nm_new_label['setor'] = "Setor";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $setor = $this->setor;
   $sStyleHidden_setor = '';
   if (isset($this->nmgp_cmp_hidden['setor']) && $this->nmgp_cmp_hidden['setor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['setor']);
       $sStyleHidden_setor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_setor = 'display: none;';
   $sStyleReadInp_setor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['setor']) && $this->nmgp_cmp_readonly['setor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['setor']);
       $sStyleReadLab_setor = '';
       $sStyleReadInp_setor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['setor']) && $this->nmgp_cmp_hidden['setor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="setor" value="<?php echo $this->form_encode_input($setor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_setor_label" id="hidden_field_label_setor" style="<?php echo $sStyleHidden_setor; ?>"><span id="id_label_setor"><?php echo $this->nm_new_label['setor']; ?></span></TD>
    <TD class="scFormDataOdd css_setor_line" id="hidden_field_data_setor" style="<?php echo $sStyleHidden_setor; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_setor_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["setor"]) &&  $this->nmgp_cmp_readonly["setor"] == "on") { 

 ?>
<input type="hidden" name="setor" value="<?php echo $this->form_encode_input($setor) . "\">" . $setor . ""; ?>
<?php } else { ?>
<span id="id_read_on_setor" class="sc-ui-readonly-setor css_setor_line" style="<?php echo $sStyleReadLab_setor; ?>"><?php echo $this->setor; ?></span><span id="id_read_off_setor" class="css_read_off_setor" style="white-space: nowrap;<?php echo $sStyleReadInp_setor; ?>">
 <input class="sc-js-input scFormObjectOdd css_setor_obj" style="" id="id_sc_field_setor" type=text name="setor" value="<?php echo $this->form_encode_input($setor) ?>"
 size=4 alt="{datatype: 'integer', maxLength: 4, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['setor']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['setor']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['setor']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_setor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_setor_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['comentario']))
    {
        $this->nm_new_label['comentario'] = "Comentario";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $comentario = $this->comentario;
   $sStyleHidden_comentario = '';
   if (isset($this->nmgp_cmp_hidden['comentario']) && $this->nmgp_cmp_hidden['comentario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['comentario']);
       $sStyleHidden_comentario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_comentario = 'display: none;';
   $sStyleReadInp_comentario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['comentario']) && $this->nmgp_cmp_readonly['comentario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['comentario']);
       $sStyleReadLab_comentario = '';
       $sStyleReadInp_comentario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['comentario']) && $this->nmgp_cmp_hidden['comentario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="comentario" value="<?php echo $this->form_encode_input($comentario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_comentario_label" id="hidden_field_label_comentario" style="<?php echo $sStyleHidden_comentario; ?>"><span id="id_label_comentario"><?php echo $this->nm_new_label['comentario']; ?></span></TD>
    <TD class="scFormDataOdd css_comentario_line" id="hidden_field_data_comentario" style="<?php echo $sStyleHidden_comentario; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_comentario_line" style="vertical-align: top;padding: 0px">
<?php
$comentario_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($comentario));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["comentario"]) &&  $this->nmgp_cmp_readonly["comentario"] == "on") { 

 ?>
<input type="hidden" name="comentario" value="<?php echo $this->form_encode_input($comentario) . "\">" . $comentario_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_comentario" class="sc-ui-readonly-comentario css_comentario_line" style="<?php echo $sStyleReadLab_comentario; ?>"><?php echo $comentario_val; ?></span><span id="id_read_off_comentario" class="css_read_off_comentario" style="white-space: nowrap;<?php echo $sStyleReadInp_comentario; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_comentario_obj" style="white-space: pre-wrap;" name="comentario" id="id_sc_field_comentario" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $comentario; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_comentario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_comentario_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['diamensal']))
    {
        $this->nm_new_label['diamensal'] = "Dia Mensal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $diamensal = $this->diamensal;
   $sStyleHidden_diamensal = '';
   if (isset($this->nmgp_cmp_hidden['diamensal']) && $this->nmgp_cmp_hidden['diamensal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['diamensal']);
       $sStyleHidden_diamensal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_diamensal = 'display: none;';
   $sStyleReadInp_diamensal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['diamensal']) && $this->nmgp_cmp_readonly['diamensal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['diamensal']);
       $sStyleReadLab_diamensal = '';
       $sStyleReadInp_diamensal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['diamensal']) && $this->nmgp_cmp_hidden['diamensal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="diamensal" value="<?php echo $this->form_encode_input($diamensal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_diamensal_label" id="hidden_field_label_diamensal" style="<?php echo $sStyleHidden_diamensal; ?>"><span id="id_label_diamensal"><?php echo $this->nm_new_label['diamensal']; ?></span></TD>
    <TD class="scFormDataOdd css_diamensal_line" id="hidden_field_data_diamensal" style="<?php echo $sStyleHidden_diamensal; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_diamensal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["diamensal"]) &&  $this->nmgp_cmp_readonly["diamensal"] == "on") { 

 ?>
<input type="hidden" name="diamensal" value="<?php echo $this->form_encode_input($diamensal) . "\">" . $diamensal . ""; ?>
<?php } else { ?>
<span id="id_read_on_diamensal" class="sc-ui-readonly-diamensal css_diamensal_line" style="<?php echo $sStyleReadLab_diamensal; ?>"><?php echo $this->diamensal; ?></span><span id="id_read_off_diamensal" class="css_read_off_diamensal" style="white-space: nowrap;<?php echo $sStyleReadInp_diamensal; ?>">
 <input class="sc-js-input scFormObjectOdd css_diamensal_obj" style="" id="id_sc_field_diamensal" type=text name="diamensal" value="<?php echo $this->form_encode_input($diamensal) ?>"
 size=2 alt="{datatype: 'integer', maxLength: 2, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['diamensal']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['diamensal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['diamensal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_diamensal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_diamensal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tiporequisicao']))
    {
        $this->nm_new_label['tiporequisicao'] = "Tipo Requisicao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tiporequisicao = $this->tiporequisicao;
   $sStyleHidden_tiporequisicao = '';
   if (isset($this->nmgp_cmp_hidden['tiporequisicao']) && $this->nmgp_cmp_hidden['tiporequisicao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tiporequisicao']);
       $sStyleHidden_tiporequisicao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tiporequisicao = 'display: none;';
   $sStyleReadInp_tiporequisicao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tiporequisicao']) && $this->nmgp_cmp_readonly['tiporequisicao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tiporequisicao']);
       $sStyleReadLab_tiporequisicao = '';
       $sStyleReadInp_tiporequisicao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tiporequisicao']) && $this->nmgp_cmp_hidden['tiporequisicao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tiporequisicao" value="<?php echo $this->form_encode_input($tiporequisicao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_tiporequisicao_label" id="hidden_field_label_tiporequisicao" style="<?php echo $sStyleHidden_tiporequisicao; ?>"><span id="id_label_tiporequisicao"><?php echo $this->nm_new_label['tiporequisicao']; ?></span></TD>
    <TD class="scFormDataOdd css_tiporequisicao_line" id="hidden_field_data_tiporequisicao" style="<?php echo $sStyleHidden_tiporequisicao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tiporequisicao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tiporequisicao"]) &&  $this->nmgp_cmp_readonly["tiporequisicao"] == "on") { 

 ?>
<input type="hidden" name="tiporequisicao" value="<?php echo $this->form_encode_input($tiporequisicao) . "\">" . $tiporequisicao . ""; ?>
<?php } else { ?>
<span id="id_read_on_tiporequisicao" class="sc-ui-readonly-tiporequisicao css_tiporequisicao_line" style="<?php echo $sStyleReadLab_tiporequisicao; ?>"><?php echo $this->tiporequisicao; ?></span><span id="id_read_off_tiporequisicao" class="css_read_off_tiporequisicao" style="white-space: nowrap;<?php echo $sStyleReadInp_tiporequisicao; ?>">
 <input class="sc-js-input scFormObjectOdd css_tiporequisicao_obj" style="" id="id_sc_field_tiporequisicao" type=text name="tiporequisicao" value="<?php echo $this->form_encode_input($tiporequisicao) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tiporequisicao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tiporequisicao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R")
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_requisicoes");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_requisicoes");
 parent.scAjaxDetailHeight("form_requisicoes", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_requisicoes", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_requisicoes", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['sc_modal'])
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_requisicoes']['buttonStatus'] = $this->nmgp_botoes;
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
