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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - contribuinte"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - contribuinte"); } ?></TITLE>
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
.css_read_off_dataaniv button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_datalistagem button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_datainclusaoproduto button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_reajustedata button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_data_higienizacao button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_contribuinte_1/form_contribuinte_1_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_contribuinte_1_sajax_js.php");
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

include_once('form_contribuinte_1_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
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
 include_once("form_contribuinte_1_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_contribuinte_1'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_contribuinte_1'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['fast_search'][2] : "";
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
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-6", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['empty_filter'] = true;
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
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['codigo']))
           {
               $this->nmgp_cmp_readonly['codigo'] = 'on';
           }
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
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["codigo"]) &&  $this->nmgp_cmp_readonly["codigo"] == "on"))
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

    <TD class="scFormLabelOdd scUiLabelWidthFix css_codigo_label" id="hidden_field_label_codigo" style="<?php echo $sStyleHidden_codigo; ?>"><span id="id_label_codigo"><?php echo $this->nm_new_label['codigo']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['php_cmp_required']['codigo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['php_cmp_required']['codigo'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_codigo_line" id="hidden_field_data_codigo" style="<?php echo $sStyleHidden_codigo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["codigo"]) &&  $this->nmgp_cmp_readonly["codigo"] == "on")) { 

 ?>
<input type="hidden" name="codigo" value="<?php echo $this->form_encode_input($codigo) . "\"><span id=\"id_ajax_label_codigo\">" . $codigo . "</span>"; ?>
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
    if (!isset($this->nm_new_label['nome']))
    {
        $this->nm_new_label['nome'] = "Nome";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nome = $this->nome;
   $sStyleHidden_nome = '';
   if (isset($this->nmgp_cmp_hidden['nome']) && $this->nmgp_cmp_hidden['nome'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nome']);
       $sStyleHidden_nome = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nome = 'display: none;';
   $sStyleReadInp_nome = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nome']) && $this->nmgp_cmp_readonly['nome'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nome']);
       $sStyleReadLab_nome = '';
       $sStyleReadInp_nome = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nome']) && $this->nmgp_cmp_hidden['nome'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome" value="<?php echo $this->form_encode_input($nome) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nome_label" id="hidden_field_label_nome" style="<?php echo $sStyleHidden_nome; ?>"><span id="id_label_nome"><?php echo $this->nm_new_label['nome']; ?></span></TD>
    <TD class="scFormDataOdd css_nome_line" id="hidden_field_data_nome" style="<?php echo $sStyleHidden_nome; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nome_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nome"]) &&  $this->nmgp_cmp_readonly["nome"] == "on") { 

 ?>
<input type="hidden" name="nome" value="<?php echo $this->form_encode_input($nome) . "\">" . $nome . ""; ?>
<?php } else { ?>
<span id="id_read_on_nome" class="sc-ui-readonly-nome css_nome_line" style="<?php echo $sStyleReadLab_nome; ?>"><?php echo $this->nome; ?></span><span id="id_read_off_nome" class="css_read_off_nome" style="white-space: nowrap;<?php echo $sStyleReadInp_nome; ?>">
 <input class="sc-js-input scFormObjectOdd css_nome_obj" style="" id="id_sc_field_nome" type=text name="nome" value="<?php echo $this->form_encode_input($nome) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nome_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nome_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['doador']))
    {
        $this->nm_new_label['doador'] = "Doador";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $doador = $this->doador;
   $sStyleHidden_doador = '';
   if (isset($this->nmgp_cmp_hidden['doador']) && $this->nmgp_cmp_hidden['doador'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['doador']);
       $sStyleHidden_doador = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_doador = 'display: none;';
   $sStyleReadInp_doador = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['doador']) && $this->nmgp_cmp_readonly['doador'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['doador']);
       $sStyleReadLab_doador = '';
       $sStyleReadInp_doador = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['doador']) && $this->nmgp_cmp_hidden['doador'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="doador" value="<?php echo $this->form_encode_input($doador) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_doador_label" id="hidden_field_label_doador" style="<?php echo $sStyleHidden_doador; ?>"><span id="id_label_doador"><?php echo $this->nm_new_label['doador']; ?></span></TD>
    <TD class="scFormDataOdd css_doador_line" id="hidden_field_data_doador" style="<?php echo $sStyleHidden_doador; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_doador_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["doador"]) &&  $this->nmgp_cmp_readonly["doador"] == "on") { 

 ?>
<input type="hidden" name="doador" value="<?php echo $this->form_encode_input($doador) . "\">" . $doador . ""; ?>
<?php } else { ?>
<span id="id_read_on_doador" class="sc-ui-readonly-doador css_doador_line" style="<?php echo $sStyleReadLab_doador; ?>"><?php echo $this->doador; ?></span><span id="id_read_off_doador" class="css_read_off_doador" style="white-space: nowrap;<?php echo $sStyleReadInp_doador; ?>">
 <input class="sc-js-input scFormObjectOdd css_doador_obj" style="" id="id_sc_field_doador" type=text name="doador" value="<?php echo $this->form_encode_input($doador) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_doador_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_doador_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codigorua']))
    {
        $this->nm_new_label['codigorua'] = "Codigo Rua";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codigorua = $this->codigorua;
   $sStyleHidden_codigorua = '';
   if (isset($this->nmgp_cmp_hidden['codigorua']) && $this->nmgp_cmp_hidden['codigorua'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codigorua']);
       $sStyleHidden_codigorua = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codigorua = 'display: none;';
   $sStyleReadInp_codigorua = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['codigorua']) && $this->nmgp_cmp_readonly['codigorua'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codigorua']);
       $sStyleReadLab_codigorua = '';
       $sStyleReadInp_codigorua = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codigorua']) && $this->nmgp_cmp_hidden['codigorua'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigorua" value="<?php echo $this->form_encode_input($codigorua) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_codigorua_label" id="hidden_field_label_codigorua" style="<?php echo $sStyleHidden_codigorua; ?>"><span id="id_label_codigorua"><?php echo $this->nm_new_label['codigorua']; ?></span></TD>
    <TD class="scFormDataOdd css_codigorua_line" id="hidden_field_data_codigorua" style="<?php echo $sStyleHidden_codigorua; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigorua_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codigorua"]) &&  $this->nmgp_cmp_readonly["codigorua"] == "on") { 

 ?>
<input type="hidden" name="codigorua" value="<?php echo $this->form_encode_input($codigorua) . "\">" . $codigorua . ""; ?>
<?php } else { ?>
<span id="id_read_on_codigorua" class="sc-ui-readonly-codigorua css_codigorua_line" style="<?php echo $sStyleReadLab_codigorua; ?>"><?php echo $this->codigorua; ?></span><span id="id_read_off_codigorua" class="css_read_off_codigorua" style="white-space: nowrap;<?php echo $sStyleReadInp_codigorua; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigorua_obj" style="" id="id_sc_field_codigorua" type=text name="codigorua" value="<?php echo $this->form_encode_input($codigorua) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigorua']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigorua']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigorua']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigorua_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigorua_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numero']))
    {
        $this->nm_new_label['numero'] = "Numero";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numero = $this->numero;
   $sStyleHidden_numero = '';
   if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numero']);
       $sStyleHidden_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numero = 'display: none;';
   $sStyleReadInp_numero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numero']) && $this->nmgp_cmp_readonly['numero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numero']);
       $sStyleReadLab_numero = '';
       $sStyleReadInp_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numero" value="<?php echo $this->form_encode_input($numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_numero_label" id="hidden_field_label_numero" style="<?php echo $sStyleHidden_numero; ?>"><span id="id_label_numero"><?php echo $this->nm_new_label['numero']; ?></span></TD>
    <TD class="scFormDataOdd css_numero_line" id="hidden_field_data_numero" style="<?php echo $sStyleHidden_numero; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_numero_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numero"]) &&  $this->nmgp_cmp_readonly["numero"] == "on") { 

 ?>
<input type="hidden" name="numero" value="<?php echo $this->form_encode_input($numero) . "\">" . $numero . ""; ?>
<?php } else { ?>
<span id="id_read_on_numero" class="sc-ui-readonly-numero css_numero_line" style="<?php echo $sStyleReadLab_numero; ?>"><?php echo $this->numero; ?></span><span id="id_read_off_numero" class="css_read_off_numero" style="white-space: nowrap;<?php echo $sStyleReadInp_numero; ?>">
 <input class="sc-js-input scFormObjectOdd css_numero_obj" style="" id="id_sc_field_numero" type=text name="numero" value="<?php echo $this->form_encode_input($numero) ?>"
 size=8 maxlength=8 alt="{datatype: 'text', maxLength: 8, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numero_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['complemento']))
    {
        $this->nm_new_label['complemento'] = "Complemento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $complemento = $this->complemento;
   $sStyleHidden_complemento = '';
   if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['complemento']);
       $sStyleHidden_complemento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_complemento = 'display: none;';
   $sStyleReadInp_complemento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['complemento']) && $this->nmgp_cmp_readonly['complemento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['complemento']);
       $sStyleReadLab_complemento = '';
       $sStyleReadInp_complemento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="complemento" value="<?php echo $this->form_encode_input($complemento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_complemento_label" id="hidden_field_label_complemento" style="<?php echo $sStyleHidden_complemento; ?>"><span id="id_label_complemento"><?php echo $this->nm_new_label['complemento']; ?></span></TD>
    <TD class="scFormDataOdd css_complemento_line" id="hidden_field_data_complemento" style="<?php echo $sStyleHidden_complemento; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_complemento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["complemento"]) &&  $this->nmgp_cmp_readonly["complemento"] == "on") { 

 ?>
<input type="hidden" name="complemento" value="<?php echo $this->form_encode_input($complemento) . "\">" . $complemento . ""; ?>
<?php } else { ?>
<span id="id_read_on_complemento" class="sc-ui-readonly-complemento css_complemento_line" style="<?php echo $sStyleReadLab_complemento; ?>"><?php echo $this->complemento; ?></span><span id="id_read_off_complemento" class="css_read_off_complemento" style="white-space: nowrap;<?php echo $sStyleReadInp_complemento; ?>">
 <input class="sc-js-input scFormObjectOdd css_complemento_obj" style="" id="id_sc_field_complemento" type=text name="complemento" value="<?php echo $this->form_encode_input($complemento) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_complemento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_complemento_text"></span></td></tr></table></td></tr></table></TD>
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
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['setor']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['setor']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['setor']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_setor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_setor_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipo']))
    {
        $this->nm_new_label['tipo'] = "Tipo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo = $this->tipo;
   $sStyleHidden_tipo = '';
   if (isset($this->nmgp_cmp_hidden['tipo']) && $this->nmgp_cmp_hidden['tipo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo']);
       $sStyleHidden_tipo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo = 'display: none;';
   $sStyleReadInp_tipo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo']) && $this->nmgp_cmp_readonly['tipo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo']);
       $sStyleReadLab_tipo = '';
       $sStyleReadInp_tipo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo']) && $this->nmgp_cmp_hidden['tipo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipo" value="<?php echo $this->form_encode_input($tipo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_tipo_label" id="hidden_field_label_tipo" style="<?php echo $sStyleHidden_tipo; ?>"><span id="id_label_tipo"><?php echo $this->nm_new_label['tipo']; ?></span></TD>
    <TD class="scFormDataOdd css_tipo_line" id="hidden_field_data_tipo" style="<?php echo $sStyleHidden_tipo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo"]) &&  $this->nmgp_cmp_readonly["tipo"] == "on") { 

 ?>
<input type="hidden" name="tipo" value="<?php echo $this->form_encode_input($tipo) . "\">" . $tipo . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipo" class="sc-ui-readonly-tipo css_tipo_line" style="<?php echo $sStyleReadLab_tipo; ?>"><?php echo $this->tipo; ?></span><span id="id_read_off_tipo" class="css_read_off_tipo" style="white-space: nowrap;<?php echo $sStyleReadInp_tipo; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipo_obj" style="" id="id_sc_field_tipo" type=text name="tipo" value="<?php echo $this->form_encode_input($tipo) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dataaniv']))
    {
        $this->nm_new_label['dataaniv'] = "Data Aniv";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_dataaniv = $this->dataaniv;
   if (strlen($this->dataaniv_hora) > 8 ) {$this->dataaniv_hora = substr($this->dataaniv_hora, 0, 8);}
   $this->dataaniv .= ' ' . $this->dataaniv_hora;
   $dataaniv = $this->dataaniv;
   $sStyleHidden_dataaniv = '';
   if (isset($this->nmgp_cmp_hidden['dataaniv']) && $this->nmgp_cmp_hidden['dataaniv'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dataaniv']);
       $sStyleHidden_dataaniv = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dataaniv = 'display: none;';
   $sStyleReadInp_dataaniv = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dataaniv']) && $this->nmgp_cmp_readonly['dataaniv'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dataaniv']);
       $sStyleReadLab_dataaniv = '';
       $sStyleReadInp_dataaniv = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dataaniv']) && $this->nmgp_cmp_hidden['dataaniv'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dataaniv" value="<?php echo $this->form_encode_input($dataaniv) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dataaniv_label" id="hidden_field_label_dataaniv" style="<?php echo $sStyleHidden_dataaniv; ?>"><span id="id_label_dataaniv"><?php echo $this->nm_new_label['dataaniv']; ?></span></TD>
    <TD class="scFormDataOdd css_dataaniv_line" id="hidden_field_data_dataaniv" style="<?php echo $sStyleHidden_dataaniv; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dataaniv_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dataaniv"]) &&  $this->nmgp_cmp_readonly["dataaniv"] == "on") { 

 ?>
<input type="hidden" name="dataaniv" value="<?php echo $this->form_encode_input($dataaniv) . "\">" . $dataaniv . ""; ?>
<?php } else { ?>
<span id="id_read_on_dataaniv" class="sc-ui-readonly-dataaniv css_dataaniv_line" style="<?php echo $sStyleReadLab_dataaniv; ?>"><?php echo $dataaniv; ?></span><span id="id_read_off_dataaniv" class="css_read_off_dataaniv" style="white-space: nowrap;<?php echo $sStyleReadInp_dataaniv; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_dataaniv_obj" style="" id="id_sc_field_dataaniv" type=text name="dataaniv" value="<?php echo $this->form_encode_input($dataaniv) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['dataaniv']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dataaniv']['date_format']; ?>', timeSep: '<?php echo $this->field_config['dataaniv']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['dataaniv']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dataaniv_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dataaniv_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->dataaniv = $old_dt_dataaniv;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['datalistagem']))
    {
        $this->nm_new_label['datalistagem'] = "Data Listagem";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_datalistagem = $this->datalistagem;
   if (strlen($this->datalistagem_hora) > 8 ) {$this->datalistagem_hora = substr($this->datalistagem_hora, 0, 8);}
   $this->datalistagem .= ' ' . $this->datalistagem_hora;
   $datalistagem = $this->datalistagem;
   $sStyleHidden_datalistagem = '';
   if (isset($this->nmgp_cmp_hidden['datalistagem']) && $this->nmgp_cmp_hidden['datalistagem'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datalistagem']);
       $sStyleHidden_datalistagem = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datalistagem = 'display: none;';
   $sStyleReadInp_datalistagem = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datalistagem']) && $this->nmgp_cmp_readonly['datalistagem'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datalistagem']);
       $sStyleReadLab_datalistagem = '';
       $sStyleReadInp_datalistagem = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datalistagem']) && $this->nmgp_cmp_hidden['datalistagem'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datalistagem" value="<?php echo $this->form_encode_input($datalistagem) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_datalistagem_label" id="hidden_field_label_datalistagem" style="<?php echo $sStyleHidden_datalistagem; ?>"><span id="id_label_datalistagem"><?php echo $this->nm_new_label['datalistagem']; ?></span></TD>
    <TD class="scFormDataOdd css_datalistagem_line" id="hidden_field_data_datalistagem" style="<?php echo $sStyleHidden_datalistagem; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_datalistagem_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datalistagem"]) &&  $this->nmgp_cmp_readonly["datalistagem"] == "on") { 

 ?>
<input type="hidden" name="datalistagem" value="<?php echo $this->form_encode_input($datalistagem) . "\">" . $datalistagem . ""; ?>
<?php } else { ?>
<span id="id_read_on_datalistagem" class="sc-ui-readonly-datalistagem css_datalistagem_line" style="<?php echo $sStyleReadLab_datalistagem; ?>"><?php echo $datalistagem; ?></span><span id="id_read_off_datalistagem" class="css_read_off_datalistagem" style="white-space: nowrap;<?php echo $sStyleReadInp_datalistagem; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_datalistagem_obj" style="" id="id_sc_field_datalistagem" type=text name="datalistagem" value="<?php echo $this->form_encode_input($datalistagem) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['datalistagem']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datalistagem']['date_format']; ?>', timeSep: '<?php echo $this->field_config['datalistagem']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['datalistagem']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datalistagem_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datalistagem_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->datalistagem = $old_dt_datalistagem;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sexo']))
    {
        $this->nm_new_label['sexo'] = "Sexo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sexo = $this->sexo;
   $sStyleHidden_sexo = '';
   if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sexo']);
       $sStyleHidden_sexo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sexo = 'display: none;';
   $sStyleReadInp_sexo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sexo']) && $this->nmgp_cmp_readonly['sexo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sexo']);
       $sStyleReadLab_sexo = '';
       $sStyleReadInp_sexo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sexo" value="<?php echo $this->form_encode_input($sexo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sexo_label" id="hidden_field_label_sexo" style="<?php echo $sStyleHidden_sexo; ?>"><span id="id_label_sexo"><?php echo $this->nm_new_label['sexo']; ?></span></TD>
    <TD class="scFormDataOdd css_sexo_line" id="hidden_field_data_sexo" style="<?php echo $sStyleHidden_sexo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sexo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sexo"]) &&  $this->nmgp_cmp_readonly["sexo"] == "on") { 

 ?>
<input type="hidden" name="sexo" value="<?php echo $this->form_encode_input($sexo) . "\">" . $sexo . ""; ?>
<?php } else { ?>
<span id="id_read_on_sexo" class="sc-ui-readonly-sexo css_sexo_line" style="<?php echo $sStyleReadLab_sexo; ?>"><?php echo $this->sexo; ?></span><span id="id_read_off_sexo" class="css_read_off_sexo" style="white-space: nowrap;<?php echo $sStyleReadInp_sexo; ?>">
 <input class="sc-js-input scFormObjectOdd css_sexo_obj" style="" id="id_sc_field_sexo" type=text name="sexo" value="<?php echo $this->form_encode_input($sexo) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sexo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sexo_text"></span></td></tr></table></td></tr></table></TD>
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
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
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
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
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
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
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
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fone4_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fone4_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ddd']))
    {
        $this->nm_new_label['ddd'] = "DDD";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ddd = $this->ddd;
   $sStyleHidden_ddd = '';
   if (isset($this->nmgp_cmp_hidden['ddd']) && $this->nmgp_cmp_hidden['ddd'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ddd']);
       $sStyleHidden_ddd = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ddd = 'display: none;';
   $sStyleReadInp_ddd = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ddd']) && $this->nmgp_cmp_readonly['ddd'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ddd']);
       $sStyleReadLab_ddd = '';
       $sStyleReadInp_ddd = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ddd']) && $this->nmgp_cmp_hidden['ddd'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ddd" value="<?php echo $this->form_encode_input($ddd) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ddd_label" id="hidden_field_label_ddd" style="<?php echo $sStyleHidden_ddd; ?>"><span id="id_label_ddd"><?php echo $this->nm_new_label['ddd']; ?></span></TD>
    <TD class="scFormDataOdd css_ddd_line" id="hidden_field_data_ddd" style="<?php echo $sStyleHidden_ddd; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ddd_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ddd"]) &&  $this->nmgp_cmp_readonly["ddd"] == "on") { 

 ?>
<input type="hidden" name="ddd" value="<?php echo $this->form_encode_input($ddd) . "\">" . $ddd . ""; ?>
<?php } else { ?>
<span id="id_read_on_ddd" class="sc-ui-readonly-ddd css_ddd_line" style="<?php echo $sStyleReadLab_ddd; ?>"><?php echo $this->ddd; ?></span><span id="id_read_off_ddd" class="css_read_off_ddd" style="white-space: nowrap;<?php echo $sStyleReadInp_ddd; ?>">
 <input class="sc-js-input scFormObjectOdd css_ddd_obj" style="" id="id_sc_field_ddd" type=text name="ddd" value="<?php echo $this->form_encode_input($ddd) ?>"
 size=2 maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ddd_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ddd_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['statusc']))
    {
        $this->nm_new_label['statusc'] = "Status C";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $statusc = $this->statusc;
   $sStyleHidden_statusc = '';
   if (isset($this->nmgp_cmp_hidden['statusc']) && $this->nmgp_cmp_hidden['statusc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['statusc']);
       $sStyleHidden_statusc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_statusc = 'display: none;';
   $sStyleReadInp_statusc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['statusc']) && $this->nmgp_cmp_readonly['statusc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['statusc']);
       $sStyleReadLab_statusc = '';
       $sStyleReadInp_statusc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['statusc']) && $this->nmgp_cmp_hidden['statusc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="statusc" value="<?php echo $this->form_encode_input($statusc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_statusc_label" id="hidden_field_label_statusc" style="<?php echo $sStyleHidden_statusc; ?>"><span id="id_label_statusc"><?php echo $this->nm_new_label['statusc']; ?></span></TD>
    <TD class="scFormDataOdd css_statusc_line" id="hidden_field_data_statusc" style="<?php echo $sStyleHidden_statusc; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_statusc_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["statusc"]) &&  $this->nmgp_cmp_readonly["statusc"] == "on") { 

 ?>
<input type="hidden" name="statusc" value="<?php echo $this->form_encode_input($statusc) . "\">" . $statusc . ""; ?>
<?php } else { ?>
<span id="id_read_on_statusc" class="sc-ui-readonly-statusc css_statusc_line" style="<?php echo $sStyleReadLab_statusc; ?>"><?php echo $this->statusc; ?></span><span id="id_read_off_statusc" class="css_read_off_statusc" style="white-space: nowrap;<?php echo $sStyleReadInp_statusc; ?>">
 <input class="sc-js-input scFormObjectOdd css_statusc_obj" style="" id="id_sc_field_statusc" type=text name="statusc" value="<?php echo $this->form_encode_input($statusc) ?>"
 size=2 maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_statusc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_statusc_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cpf']))
    {
        $this->nm_new_label['cpf'] = "CPF";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cpf = $this->cpf;
   $sStyleHidden_cpf = '';
   if (isset($this->nmgp_cmp_hidden['cpf']) && $this->nmgp_cmp_hidden['cpf'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cpf']);
       $sStyleHidden_cpf = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cpf = 'display: none;';
   $sStyleReadInp_cpf = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cpf']) && $this->nmgp_cmp_readonly['cpf'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cpf']);
       $sStyleReadLab_cpf = '';
       $sStyleReadInp_cpf = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cpf']) && $this->nmgp_cmp_hidden['cpf'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cpf" value="<?php echo $this->form_encode_input($cpf) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cpf_label" id="hidden_field_label_cpf" style="<?php echo $sStyleHidden_cpf; ?>"><span id="id_label_cpf"><?php echo $this->nm_new_label['cpf']; ?></span></TD>
    <TD class="scFormDataOdd css_cpf_line" id="hidden_field_data_cpf" style="<?php echo $sStyleHidden_cpf; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cpf_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cpf"]) &&  $this->nmgp_cmp_readonly["cpf"] == "on") { 

 ?>
<input type="hidden" name="cpf" value="<?php echo $this->form_encode_input($cpf) . "\">" . $cpf . ""; ?>
<?php } else { ?>
<span id="id_read_on_cpf" class="sc-ui-readonly-cpf css_cpf_line" style="<?php echo $sStyleReadLab_cpf; ?>"><?php echo $this->cpf; ?></span><span id="id_read_off_cpf" class="css_read_off_cpf" style="white-space: nowrap;<?php echo $sStyleReadInp_cpf; ?>">
 <input class="sc-js-input scFormObjectOdd css_cpf_obj" style="" id="id_sc_field_cpf" type=text name="cpf" value="<?php echo $this->form_encode_input($cpf) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cpf_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cpf_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['operador']))
    {
        $this->nm_new_label['operador'] = "Operador";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $operador = $this->operador;
   $sStyleHidden_operador = '';
   if (isset($this->nmgp_cmp_hidden['operador']) && $this->nmgp_cmp_hidden['operador'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['operador']);
       $sStyleHidden_operador = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_operador = 'display: none;';
   $sStyleReadInp_operador = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['operador']) && $this->nmgp_cmp_readonly['operador'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['operador']);
       $sStyleReadLab_operador = '';
       $sStyleReadInp_operador = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['operador']) && $this->nmgp_cmp_hidden['operador'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="operador" value="<?php echo $this->form_encode_input($operador) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_operador_label" id="hidden_field_label_operador" style="<?php echo $sStyleHidden_operador; ?>"><span id="id_label_operador"><?php echo $this->nm_new_label['operador']; ?></span></TD>
    <TD class="scFormDataOdd css_operador_line" id="hidden_field_data_operador" style="<?php echo $sStyleHidden_operador; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_operador_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["operador"]) &&  $this->nmgp_cmp_readonly["operador"] == "on") { 

 ?>
<input type="hidden" name="operador" value="<?php echo $this->form_encode_input($operador) . "\">" . $operador . ""; ?>
<?php } else { ?>
<span id="id_read_on_operador" class="sc-ui-readonly-operador css_operador_line" style="<?php echo $sStyleReadLab_operador; ?>"><?php echo $this->operador; ?></span><span id="id_read_off_operador" class="css_read_off_operador" style="white-space: nowrap;<?php echo $sStyleReadInp_operador; ?>">
 <input class="sc-js-input scFormObjectOdd css_operador_obj" style="" id="id_sc_field_operador" type=text name="operador" value="<?php echo $this->form_encode_input($operador) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['operador']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['operador']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['operador']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operador_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operador_text"></span></td></tr></table></td></tr></table></TD>
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
    if (!isset($this->nm_new_label['classificacao']))
    {
        $this->nm_new_label['classificacao'] = "Classificacao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $classificacao = $this->classificacao;
   $sStyleHidden_classificacao = '';
   if (isset($this->nmgp_cmp_hidden['classificacao']) && $this->nmgp_cmp_hidden['classificacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['classificacao']);
       $sStyleHidden_classificacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_classificacao = 'display: none;';
   $sStyleReadInp_classificacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['classificacao']) && $this->nmgp_cmp_readonly['classificacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['classificacao']);
       $sStyleReadLab_classificacao = '';
       $sStyleReadInp_classificacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['classificacao']) && $this->nmgp_cmp_hidden['classificacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="classificacao" value="<?php echo $this->form_encode_input($classificacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_classificacao_label" id="hidden_field_label_classificacao" style="<?php echo $sStyleHidden_classificacao; ?>"><span id="id_label_classificacao"><?php echo $this->nm_new_label['classificacao']; ?></span></TD>
    <TD class="scFormDataOdd css_classificacao_line" id="hidden_field_data_classificacao" style="<?php echo $sStyleHidden_classificacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_classificacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["classificacao"]) &&  $this->nmgp_cmp_readonly["classificacao"] == "on") { 

 ?>
<input type="hidden" name="classificacao" value="<?php echo $this->form_encode_input($classificacao) . "\">" . $classificacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_classificacao" class="sc-ui-readonly-classificacao css_classificacao_line" style="<?php echo $sStyleReadLab_classificacao; ?>"><?php echo $this->classificacao; ?></span><span id="id_read_off_classificacao" class="css_read_off_classificacao" style="white-space: nowrap;<?php echo $sStyleReadInp_classificacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_classificacao_obj" style="" id="id_sc_field_classificacao" type=text name="classificacao" value="<?php echo $this->form_encode_input($classificacao) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['classificacao']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['classificacao']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['classificacao']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_classificacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_classificacao_text"></span></td></tr></table></td></tr></table></TD>
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
    if (!isset($this->nm_new_label['idclientecompanhia']))
    {
        $this->nm_new_label['idclientecompanhia'] = "Id Cliente Companhia";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idclientecompanhia = $this->idclientecompanhia;
   $sStyleHidden_idclientecompanhia = '';
   if (isset($this->nmgp_cmp_hidden['idclientecompanhia']) && $this->nmgp_cmp_hidden['idclientecompanhia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idclientecompanhia']);
       $sStyleHidden_idclientecompanhia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idclientecompanhia = 'display: none;';
   $sStyleReadInp_idclientecompanhia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idclientecompanhia']) && $this->nmgp_cmp_readonly['idclientecompanhia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idclientecompanhia']);
       $sStyleReadLab_idclientecompanhia = '';
       $sStyleReadInp_idclientecompanhia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idclientecompanhia']) && $this->nmgp_cmp_hidden['idclientecompanhia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idclientecompanhia" value="<?php echo $this->form_encode_input($idclientecompanhia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idclientecompanhia_label" id="hidden_field_label_idclientecompanhia" style="<?php echo $sStyleHidden_idclientecompanhia; ?>"><span id="id_label_idclientecompanhia"><?php echo $this->nm_new_label['idclientecompanhia']; ?></span></TD>
    <TD class="scFormDataOdd css_idclientecompanhia_line" id="hidden_field_data_idclientecompanhia" style="<?php echo $sStyleHidden_idclientecompanhia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idclientecompanhia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idclientecompanhia"]) &&  $this->nmgp_cmp_readonly["idclientecompanhia"] == "on") { 

 ?>
<input type="hidden" name="idclientecompanhia" value="<?php echo $this->form_encode_input($idclientecompanhia) . "\">" . $idclientecompanhia . ""; ?>
<?php } else { ?>
<span id="id_read_on_idclientecompanhia" class="sc-ui-readonly-idclientecompanhia css_idclientecompanhia_line" style="<?php echo $sStyleReadLab_idclientecompanhia; ?>"><?php echo $this->idclientecompanhia; ?></span><span id="id_read_off_idclientecompanhia" class="css_read_off_idclientecompanhia" style="white-space: nowrap;<?php echo $sStyleReadInp_idclientecompanhia; ?>">
 <input class="sc-js-input scFormObjectOdd css_idclientecompanhia_obj" style="" id="id_sc_field_idclientecompanhia" type=text name="idclientecompanhia" value="<?php echo $this->form_encode_input($idclientecompanhia) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['idclientecompanhia']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['idclientecompanhia']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['idclientecompanhia']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idclientecompanhia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idclientecompanhia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dgidclientecompanhia']))
    {
        $this->nm_new_label['dgidclientecompanhia'] = "Dg Id Cliente Companhia";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dgidclientecompanhia = $this->dgidclientecompanhia;
   $sStyleHidden_dgidclientecompanhia = '';
   if (isset($this->nmgp_cmp_hidden['dgidclientecompanhia']) && $this->nmgp_cmp_hidden['dgidclientecompanhia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dgidclientecompanhia']);
       $sStyleHidden_dgidclientecompanhia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dgidclientecompanhia = 'display: none;';
   $sStyleReadInp_dgidclientecompanhia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dgidclientecompanhia']) && $this->nmgp_cmp_readonly['dgidclientecompanhia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dgidclientecompanhia']);
       $sStyleReadLab_dgidclientecompanhia = '';
       $sStyleReadInp_dgidclientecompanhia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dgidclientecompanhia']) && $this->nmgp_cmp_hidden['dgidclientecompanhia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dgidclientecompanhia" value="<?php echo $this->form_encode_input($dgidclientecompanhia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dgidclientecompanhia_label" id="hidden_field_label_dgidclientecompanhia" style="<?php echo $sStyleHidden_dgidclientecompanhia; ?>"><span id="id_label_dgidclientecompanhia"><?php echo $this->nm_new_label['dgidclientecompanhia']; ?></span></TD>
    <TD class="scFormDataOdd css_dgidclientecompanhia_line" id="hidden_field_data_dgidclientecompanhia" style="<?php echo $sStyleHidden_dgidclientecompanhia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dgidclientecompanhia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dgidclientecompanhia"]) &&  $this->nmgp_cmp_readonly["dgidclientecompanhia"] == "on") { 

 ?>
<input type="hidden" name="dgidclientecompanhia" value="<?php echo $this->form_encode_input($dgidclientecompanhia) . "\">" . $dgidclientecompanhia . ""; ?>
<?php } else { ?>
<span id="id_read_on_dgidclientecompanhia" class="sc-ui-readonly-dgidclientecompanhia css_dgidclientecompanhia_line" style="<?php echo $sStyleReadLab_dgidclientecompanhia; ?>"><?php echo $this->dgidclientecompanhia; ?></span><span id="id_read_off_dgidclientecompanhia" class="css_read_off_dgidclientecompanhia" style="white-space: nowrap;<?php echo $sStyleReadInp_dgidclientecompanhia; ?>">
 <input class="sc-js-input scFormObjectOdd css_dgidclientecompanhia_obj" style="" id="id_sc_field_dgidclientecompanhia" type=text name="dgidclientecompanhia" value="<?php echo $this->form_encode_input($dgidclientecompanhia) ?>"
 size=1 alt="{datatype: 'integer', maxLength: 1, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['dgidclientecompanhia']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['dgidclientecompanhia']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['dgidclientecompanhia']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dgidclientecompanhia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dgidclientecompanhia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idclientenosso']))
    {
        $this->nm_new_label['idclientenosso'] = "Id Cliente Nosso";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idclientenosso = $this->idclientenosso;
   $sStyleHidden_idclientenosso = '';
   if (isset($this->nmgp_cmp_hidden['idclientenosso']) && $this->nmgp_cmp_hidden['idclientenosso'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idclientenosso']);
       $sStyleHidden_idclientenosso = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idclientenosso = 'display: none;';
   $sStyleReadInp_idclientenosso = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idclientenosso']) && $this->nmgp_cmp_readonly['idclientenosso'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idclientenosso']);
       $sStyleReadLab_idclientenosso = '';
       $sStyleReadInp_idclientenosso = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idclientenosso']) && $this->nmgp_cmp_hidden['idclientenosso'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idclientenosso" value="<?php echo $this->form_encode_input($idclientenosso) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idclientenosso_label" id="hidden_field_label_idclientenosso" style="<?php echo $sStyleHidden_idclientenosso; ?>"><span id="id_label_idclientenosso"><?php echo $this->nm_new_label['idclientenosso']; ?></span></TD>
    <TD class="scFormDataOdd css_idclientenosso_line" id="hidden_field_data_idclientenosso" style="<?php echo $sStyleHidden_idclientenosso; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idclientenosso_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idclientenosso"]) &&  $this->nmgp_cmp_readonly["idclientenosso"] == "on") { 

 ?>
<input type="hidden" name="idclientenosso" value="<?php echo $this->form_encode_input($idclientenosso) . "\">" . $idclientenosso . ""; ?>
<?php } else { ?>
<span id="id_read_on_idclientenosso" class="sc-ui-readonly-idclientenosso css_idclientenosso_line" style="<?php echo $sStyleReadLab_idclientenosso; ?>"><?php echo $this->idclientenosso; ?></span><span id="id_read_off_idclientenosso" class="css_read_off_idclientenosso" style="white-space: nowrap;<?php echo $sStyleReadInp_idclientenosso; ?>">
 <input class="sc-js-input scFormObjectOdd css_idclientenosso_obj" style="" id="id_sc_field_idclientenosso" type=text name="idclientenosso" value="<?php echo $this->form_encode_input($idclientenosso) ?>"
 size=7 maxlength=7 alt="{datatype: 'text', maxLength: 7, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idclientenosso_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idclientenosso_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

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
    if (!isset($this->nm_new_label['produtoincluido']))
    {
        $this->nm_new_label['produtoincluido'] = "Produto Incluido";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $produtoincluido = $this->produtoincluido;
   $sStyleHidden_produtoincluido = '';
   if (isset($this->nmgp_cmp_hidden['produtoincluido']) && $this->nmgp_cmp_hidden['produtoincluido'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['produtoincluido']);
       $sStyleHidden_produtoincluido = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_produtoincluido = 'display: none;';
   $sStyleReadInp_produtoincluido = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['produtoincluido']) && $this->nmgp_cmp_readonly['produtoincluido'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['produtoincluido']);
       $sStyleReadLab_produtoincluido = '';
       $sStyleReadInp_produtoincluido = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['produtoincluido']) && $this->nmgp_cmp_hidden['produtoincluido'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="produtoincluido" value="<?php echo $this->form_encode_input($produtoincluido) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_produtoincluido_label" id="hidden_field_label_produtoincluido" style="<?php echo $sStyleHidden_produtoincluido; ?>"><span id="id_label_produtoincluido"><?php echo $this->nm_new_label['produtoincluido']; ?></span></TD>
    <TD class="scFormDataOdd css_produtoincluido_line" id="hidden_field_data_produtoincluido" style="<?php echo $sStyleHidden_produtoincluido; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_produtoincluido_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["produtoincluido"]) &&  $this->nmgp_cmp_readonly["produtoincluido"] == "on") { 

 ?>
<input type="hidden" name="produtoincluido" value="<?php echo $this->form_encode_input($produtoincluido) . "\">" . $produtoincluido . ""; ?>
<?php } else { ?>
<span id="id_read_on_produtoincluido" class="sc-ui-readonly-produtoincluido css_produtoincluido_line" style="<?php echo $sStyleReadLab_produtoincluido; ?>"><?php echo $this->produtoincluido; ?></span><span id="id_read_off_produtoincluido" class="css_read_off_produtoincluido" style="white-space: nowrap;<?php echo $sStyleReadInp_produtoincluido; ?>">
 <input class="sc-js-input scFormObjectOdd css_produtoincluido_obj" style="" id="id_sc_field_produtoincluido" type=text name="produtoincluido" value="<?php echo $this->form_encode_input($produtoincluido) ?>"
 size=1 alt="{datatype: 'integer', maxLength: 1, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['produtoincluido']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['produtoincluido']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['produtoincluido']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_produtoincluido_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_produtoincluido_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['statusinclusaoproduto']))
    {
        $this->nm_new_label['statusinclusaoproduto'] = "Status Inclusao Produto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $statusinclusaoproduto = $this->statusinclusaoproduto;
   $sStyleHidden_statusinclusaoproduto = '';
   if (isset($this->nmgp_cmp_hidden['statusinclusaoproduto']) && $this->nmgp_cmp_hidden['statusinclusaoproduto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['statusinclusaoproduto']);
       $sStyleHidden_statusinclusaoproduto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_statusinclusaoproduto = 'display: none;';
   $sStyleReadInp_statusinclusaoproduto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['statusinclusaoproduto']) && $this->nmgp_cmp_readonly['statusinclusaoproduto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['statusinclusaoproduto']);
       $sStyleReadLab_statusinclusaoproduto = '';
       $sStyleReadInp_statusinclusaoproduto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['statusinclusaoproduto']) && $this->nmgp_cmp_hidden['statusinclusaoproduto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="statusinclusaoproduto" value="<?php echo $this->form_encode_input($statusinclusaoproduto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_statusinclusaoproduto_label" id="hidden_field_label_statusinclusaoproduto" style="<?php echo $sStyleHidden_statusinclusaoproduto; ?>"><span id="id_label_statusinclusaoproduto"><?php echo $this->nm_new_label['statusinclusaoproduto']; ?></span></TD>
    <TD class="scFormDataOdd css_statusinclusaoproduto_line" id="hidden_field_data_statusinclusaoproduto" style="<?php echo $sStyleHidden_statusinclusaoproduto; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_statusinclusaoproduto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["statusinclusaoproduto"]) &&  $this->nmgp_cmp_readonly["statusinclusaoproduto"] == "on") { 

 ?>
<input type="hidden" name="statusinclusaoproduto" value="<?php echo $this->form_encode_input($statusinclusaoproduto) . "\">" . $statusinclusaoproduto . ""; ?>
<?php } else { ?>
<span id="id_read_on_statusinclusaoproduto" class="sc-ui-readonly-statusinclusaoproduto css_statusinclusaoproduto_line" style="<?php echo $sStyleReadLab_statusinclusaoproduto; ?>"><?php echo $this->statusinclusaoproduto; ?></span><span id="id_read_off_statusinclusaoproduto" class="css_read_off_statusinclusaoproduto" style="white-space: nowrap;<?php echo $sStyleReadInp_statusinclusaoproduto; ?>">
 <input class="sc-js-input scFormObjectOdd css_statusinclusaoproduto_obj" style="" id="id_sc_field_statusinclusaoproduto" type=text name="statusinclusaoproduto" value="<?php echo $this->form_encode_input($statusinclusaoproduto) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_statusinclusaoproduto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_statusinclusaoproduto_text"></span></td></tr></table></td></tr></table></TD>
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
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['parceiro']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['parceiro']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['parceiro']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parceiro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parceiro_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
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

    <TD class="scFormLabelOdd scUiLabelWidthFix css_email_label" id="hidden_field_label_email" style="<?php echo $sStyleHidden_email; ?>"><span id="id_label_email"><?php echo $this->nm_new_label['email']; ?></span></TD>
    <TD class="scFormDataOdd css_email_line" id="hidden_field_data_email" style="<?php echo $sStyleHidden_email; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_email_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["email"]) &&  $this->nmgp_cmp_readonly["email"] == "on") { 

 ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">" . $email . ""; ?>
<?php } else { ?>
<span id="id_read_on_email" class="sc-ui-readonly-email css_email_line" style="<?php echo $sStyleReadLab_email; ?>"><?php echo $this->email; ?></span><span id="id_read_off_email" class="css_read_off_email" style="white-space: nowrap;<?php echo $sStyleReadInp_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_email_obj" style="" id="id_sc_field_email" type=text name="email" value="<?php echo $this->form_encode_input($email) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_email_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['permiteemail']))
    {
        $this->nm_new_label['permiteemail'] = "Permite Email";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $permiteemail = $this->permiteemail;
   $sStyleHidden_permiteemail = '';
   if (isset($this->nmgp_cmp_hidden['permiteemail']) && $this->nmgp_cmp_hidden['permiteemail'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['permiteemail']);
       $sStyleHidden_permiteemail = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_permiteemail = 'display: none;';
   $sStyleReadInp_permiteemail = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['permiteemail']) && $this->nmgp_cmp_readonly['permiteemail'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['permiteemail']);
       $sStyleReadLab_permiteemail = '';
       $sStyleReadInp_permiteemail = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['permiteemail']) && $this->nmgp_cmp_hidden['permiteemail'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="permiteemail" value="<?php echo $this->form_encode_input($permiteemail) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_permiteemail_label" id="hidden_field_label_permiteemail" style="<?php echo $sStyleHidden_permiteemail; ?>"><span id="id_label_permiteemail"><?php echo $this->nm_new_label['permiteemail']; ?></span></TD>
    <TD class="scFormDataOdd css_permiteemail_line" id="hidden_field_data_permiteemail" style="<?php echo $sStyleHidden_permiteemail; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_permiteemail_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["permiteemail"]) &&  $this->nmgp_cmp_readonly["permiteemail"] == "on") { 

 ?>
<input type="hidden" name="permiteemail" value="<?php echo $this->form_encode_input($permiteemail) . "\">" . $permiteemail . ""; ?>
<?php } else { ?>
<span id="id_read_on_permiteemail" class="sc-ui-readonly-permiteemail css_permiteemail_line" style="<?php echo $sStyleReadLab_permiteemail; ?>"><?php echo $this->permiteemail; ?></span><span id="id_read_off_permiteemail" class="css_read_off_permiteemail" style="white-space: nowrap;<?php echo $sStyleReadInp_permiteemail; ?>">
 <input class="sc-js-input scFormObjectOdd css_permiteemail_obj" style="" id="id_sc_field_permiteemail" type=text name="permiteemail" value="<?php echo $this->form_encode_input($permiteemail) ?>"
 size=1 alt="{datatype: 'integer', maxLength: 1, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['permiteemail']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['permiteemail']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['permiteemail']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_permiteemail_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_permiteemail_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ultimoaudiocampanha']))
    {
        $this->nm_new_label['ultimoaudiocampanha'] = "Ultimo Audio Campanha";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ultimoaudiocampanha = $this->ultimoaudiocampanha;
   $sStyleHidden_ultimoaudiocampanha = '';
   if (isset($this->nmgp_cmp_hidden['ultimoaudiocampanha']) && $this->nmgp_cmp_hidden['ultimoaudiocampanha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ultimoaudiocampanha']);
       $sStyleHidden_ultimoaudiocampanha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ultimoaudiocampanha = 'display: none;';
   $sStyleReadInp_ultimoaudiocampanha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ultimoaudiocampanha']) && $this->nmgp_cmp_readonly['ultimoaudiocampanha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ultimoaudiocampanha']);
       $sStyleReadLab_ultimoaudiocampanha = '';
       $sStyleReadInp_ultimoaudiocampanha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ultimoaudiocampanha']) && $this->nmgp_cmp_hidden['ultimoaudiocampanha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ultimoaudiocampanha" value="<?php echo $this->form_encode_input($ultimoaudiocampanha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ultimoaudiocampanha_label" id="hidden_field_label_ultimoaudiocampanha" style="<?php echo $sStyleHidden_ultimoaudiocampanha; ?>"><span id="id_label_ultimoaudiocampanha"><?php echo $this->nm_new_label['ultimoaudiocampanha']; ?></span></TD>
    <TD class="scFormDataOdd css_ultimoaudiocampanha_line" id="hidden_field_data_ultimoaudiocampanha" style="<?php echo $sStyleHidden_ultimoaudiocampanha; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ultimoaudiocampanha_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ultimoaudiocampanha"]) &&  $this->nmgp_cmp_readonly["ultimoaudiocampanha"] == "on") { 

 ?>
<input type="hidden" name="ultimoaudiocampanha" value="<?php echo $this->form_encode_input($ultimoaudiocampanha) . "\">" . $ultimoaudiocampanha . ""; ?>
<?php } else { ?>
<span id="id_read_on_ultimoaudiocampanha" class="sc-ui-readonly-ultimoaudiocampanha css_ultimoaudiocampanha_line" style="<?php echo $sStyleReadLab_ultimoaudiocampanha; ?>"><?php echo $this->ultimoaudiocampanha; ?></span><span id="id_read_off_ultimoaudiocampanha" class="css_read_off_ultimoaudiocampanha" style="white-space: nowrap;<?php echo $sStyleReadInp_ultimoaudiocampanha; ?>">
 <input class="sc-js-input scFormObjectOdd css_ultimoaudiocampanha_obj" style="" id="id_sc_field_ultimoaudiocampanha" type=text name="ultimoaudiocampanha" value="<?php echo $this->form_encode_input($ultimoaudiocampanha) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['ultimoaudiocampanha']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['ultimoaudiocampanha']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ultimoaudiocampanha']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ultimoaudiocampanha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ultimoaudiocampanha_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['datainclusaoproduto']))
    {
        $this->nm_new_label['datainclusaoproduto'] = "Data Inclusao Produto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_datainclusaoproduto = $this->datainclusaoproduto;
   if (strlen($this->datainclusaoproduto_hora) > 8 ) {$this->datainclusaoproduto_hora = substr($this->datainclusaoproduto_hora, 0, 8);}
   $this->datainclusaoproduto .= ' ' . $this->datainclusaoproduto_hora;
   $datainclusaoproduto = $this->datainclusaoproduto;
   $sStyleHidden_datainclusaoproduto = '';
   if (isset($this->nmgp_cmp_hidden['datainclusaoproduto']) && $this->nmgp_cmp_hidden['datainclusaoproduto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datainclusaoproduto']);
       $sStyleHidden_datainclusaoproduto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datainclusaoproduto = 'display: none;';
   $sStyleReadInp_datainclusaoproduto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datainclusaoproduto']) && $this->nmgp_cmp_readonly['datainclusaoproduto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datainclusaoproduto']);
       $sStyleReadLab_datainclusaoproduto = '';
       $sStyleReadInp_datainclusaoproduto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datainclusaoproduto']) && $this->nmgp_cmp_hidden['datainclusaoproduto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datainclusaoproduto" value="<?php echo $this->form_encode_input($datainclusaoproduto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_datainclusaoproduto_label" id="hidden_field_label_datainclusaoproduto" style="<?php echo $sStyleHidden_datainclusaoproduto; ?>"><span id="id_label_datainclusaoproduto"><?php echo $this->nm_new_label['datainclusaoproduto']; ?></span></TD>
    <TD class="scFormDataOdd css_datainclusaoproduto_line" id="hidden_field_data_datainclusaoproduto" style="<?php echo $sStyleHidden_datainclusaoproduto; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_datainclusaoproduto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datainclusaoproduto"]) &&  $this->nmgp_cmp_readonly["datainclusaoproduto"] == "on") { 

 ?>
<input type="hidden" name="datainclusaoproduto" value="<?php echo $this->form_encode_input($datainclusaoproduto) . "\">" . $datainclusaoproduto . ""; ?>
<?php } else { ?>
<span id="id_read_on_datainclusaoproduto" class="sc-ui-readonly-datainclusaoproduto css_datainclusaoproduto_line" style="<?php echo $sStyleReadLab_datainclusaoproduto; ?>"><?php echo $datainclusaoproduto; ?></span><span id="id_read_off_datainclusaoproduto" class="css_read_off_datainclusaoproduto" style="white-space: nowrap;<?php echo $sStyleReadInp_datainclusaoproduto; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_datainclusaoproduto_obj" style="" id="id_sc_field_datainclusaoproduto" type=text name="datainclusaoproduto" value="<?php echo $this->form_encode_input($datainclusaoproduto) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['datainclusaoproduto']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datainclusaoproduto']['date_format']; ?>', timeSep: '<?php echo $this->field_config['datainclusaoproduto']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['datainclusaoproduto']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datainclusaoproduto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datainclusaoproduto_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->datainclusaoproduto = $old_dt_datainclusaoproduto;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['reajustedata']))
    {
        $this->nm_new_label['reajustedata'] = "Reajuste Data";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_reajustedata = $this->reajustedata;
   if (strlen($this->reajustedata_hora) > 8 ) {$this->reajustedata_hora = substr($this->reajustedata_hora, 0, 8);}
   $this->reajustedata .= ' ' . $this->reajustedata_hora;
   $reajustedata = $this->reajustedata;
   $sStyleHidden_reajustedata = '';
   if (isset($this->nmgp_cmp_hidden['reajustedata']) && $this->nmgp_cmp_hidden['reajustedata'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['reajustedata']);
       $sStyleHidden_reajustedata = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_reajustedata = 'display: none;';
   $sStyleReadInp_reajustedata = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['reajustedata']) && $this->nmgp_cmp_readonly['reajustedata'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['reajustedata']);
       $sStyleReadLab_reajustedata = '';
       $sStyleReadInp_reajustedata = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['reajustedata']) && $this->nmgp_cmp_hidden['reajustedata'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="reajustedata" value="<?php echo $this->form_encode_input($reajustedata) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_reajustedata_label" id="hidden_field_label_reajustedata" style="<?php echo $sStyleHidden_reajustedata; ?>"><span id="id_label_reajustedata"><?php echo $this->nm_new_label['reajustedata']; ?></span></TD>
    <TD class="scFormDataOdd css_reajustedata_line" id="hidden_field_data_reajustedata" style="<?php echo $sStyleHidden_reajustedata; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_reajustedata_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["reajustedata"]) &&  $this->nmgp_cmp_readonly["reajustedata"] == "on") { 

 ?>
<input type="hidden" name="reajustedata" value="<?php echo $this->form_encode_input($reajustedata) . "\">" . $reajustedata . ""; ?>
<?php } else { ?>
<span id="id_read_on_reajustedata" class="sc-ui-readonly-reajustedata css_reajustedata_line" style="<?php echo $sStyleReadLab_reajustedata; ?>"><?php echo $reajustedata; ?></span><span id="id_read_off_reajustedata" class="css_read_off_reajustedata" style="white-space: nowrap;<?php echo $sStyleReadInp_reajustedata; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_reajustedata_obj" style="" id="id_sc_field_reajustedata" type=text name="reajustedata" value="<?php echo $this->form_encode_input($reajustedata) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['reajustedata']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['reajustedata']['date_format']; ?>', timeSep: '<?php echo $this->field_config['reajustedata']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['reajustedata']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_reajustedata_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_reajustedata_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->reajustedata = $old_dt_reajustedata;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['qtdinvalido']))
    {
        $this->nm_new_label['qtdinvalido'] = "Qtd Invalido";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qtdinvalido = $this->qtdinvalido;
   $sStyleHidden_qtdinvalido = '';
   if (isset($this->nmgp_cmp_hidden['qtdinvalido']) && $this->nmgp_cmp_hidden['qtdinvalido'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qtdinvalido']);
       $sStyleHidden_qtdinvalido = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qtdinvalido = 'display: none;';
   $sStyleReadInp_qtdinvalido = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qtdinvalido']) && $this->nmgp_cmp_readonly['qtdinvalido'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qtdinvalido']);
       $sStyleReadLab_qtdinvalido = '';
       $sStyleReadInp_qtdinvalido = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qtdinvalido']) && $this->nmgp_cmp_hidden['qtdinvalido'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qtdinvalido" value="<?php echo $this->form_encode_input($qtdinvalido) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qtdinvalido_label" id="hidden_field_label_qtdinvalido" style="<?php echo $sStyleHidden_qtdinvalido; ?>"><span id="id_label_qtdinvalido"><?php echo $this->nm_new_label['qtdinvalido']; ?></span></TD>
    <TD class="scFormDataOdd css_qtdinvalido_line" id="hidden_field_data_qtdinvalido" style="<?php echo $sStyleHidden_qtdinvalido; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qtdinvalido_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qtdinvalido"]) &&  $this->nmgp_cmp_readonly["qtdinvalido"] == "on") { 

 ?>
<input type="hidden" name="qtdinvalido" value="<?php echo $this->form_encode_input($qtdinvalido) . "\">" . $qtdinvalido . ""; ?>
<?php } else { ?>
<span id="id_read_on_qtdinvalido" class="sc-ui-readonly-qtdinvalido css_qtdinvalido_line" style="<?php echo $sStyleReadLab_qtdinvalido; ?>"><?php echo $this->qtdinvalido; ?></span><span id="id_read_off_qtdinvalido" class="css_read_off_qtdinvalido" style="white-space: nowrap;<?php echo $sStyleReadInp_qtdinvalido; ?>">
 <input class="sc-js-input scFormObjectOdd css_qtdinvalido_obj" style="" id="id_sc_field_qtdinvalido" type=text name="qtdinvalido" value="<?php echo $this->form_encode_input($qtdinvalido) ?>"
 size=1 alt="{datatype: 'integer', maxLength: 1, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['qtdinvalido']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['qtdinvalido']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['qtdinvalido']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qtdinvalido_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qtdinvalido_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_higienizacao']))
    {
        $this->nm_new_label['data_higienizacao'] = "Data Higienizacao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_data_higienizacao = $this->data_higienizacao;
   if (strlen($this->data_higienizacao_hora) > 8 ) {$this->data_higienizacao_hora = substr($this->data_higienizacao_hora, 0, 8);}
   $this->data_higienizacao .= ' ' . $this->data_higienizacao_hora;
   $data_higienizacao = $this->data_higienizacao;
   $sStyleHidden_data_higienizacao = '';
   if (isset($this->nmgp_cmp_hidden['data_higienizacao']) && $this->nmgp_cmp_hidden['data_higienizacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_higienizacao']);
       $sStyleHidden_data_higienizacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_higienizacao = 'display: none;';
   $sStyleReadInp_data_higienizacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['data_higienizacao']) && $this->nmgp_cmp_readonly['data_higienizacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_higienizacao']);
       $sStyleReadLab_data_higienizacao = '';
       $sStyleReadInp_data_higienizacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_higienizacao']) && $this->nmgp_cmp_hidden['data_higienizacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_higienizacao" value="<?php echo $this->form_encode_input($data_higienizacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_data_higienizacao_label" id="hidden_field_label_data_higienizacao" style="<?php echo $sStyleHidden_data_higienizacao; ?>"><span id="id_label_data_higienizacao"><?php echo $this->nm_new_label['data_higienizacao']; ?></span></TD>
    <TD class="scFormDataOdd css_data_higienizacao_line" id="hidden_field_data_data_higienizacao" style="<?php echo $sStyleHidden_data_higienizacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_higienizacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_higienizacao"]) &&  $this->nmgp_cmp_readonly["data_higienizacao"] == "on") { 

 ?>
<input type="hidden" name="data_higienizacao" value="<?php echo $this->form_encode_input($data_higienizacao) . "\">" . $data_higienizacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_higienizacao" class="sc-ui-readonly-data_higienizacao css_data_higienizacao_line" style="<?php echo $sStyleReadLab_data_higienizacao; ?>"><?php echo $data_higienizacao; ?></span><span id="id_read_off_data_higienizacao" class="css_read_off_data_higienizacao" style="white-space: nowrap;<?php echo $sStyleReadInp_data_higienizacao; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_data_higienizacao_obj" style="" id="id_sc_field_data_higienizacao" type=text name="data_higienizacao" value="<?php echo $this->form_encode_input($data_higienizacao) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['data_higienizacao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_higienizacao']['date_format']; ?>', timeSep: '<?php echo $this->field_config['data_higienizacao']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['data_higienizacao']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_higienizacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_higienizacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->data_higienizacao = $old_dt_data_higienizacao;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['status_higienizacao']))
    {
        $this->nm_new_label['status_higienizacao'] = "Status Higienizacao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $status_higienizacao = $this->status_higienizacao;
   $sStyleHidden_status_higienizacao = '';
   if (isset($this->nmgp_cmp_hidden['status_higienizacao']) && $this->nmgp_cmp_hidden['status_higienizacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['status_higienizacao']);
       $sStyleHidden_status_higienizacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_status_higienizacao = 'display: none;';
   $sStyleReadInp_status_higienizacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['status_higienizacao']) && $this->nmgp_cmp_readonly['status_higienizacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['status_higienizacao']);
       $sStyleReadLab_status_higienizacao = '';
       $sStyleReadInp_status_higienizacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['status_higienizacao']) && $this->nmgp_cmp_hidden['status_higienizacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="status_higienizacao" value="<?php echo $this->form_encode_input($status_higienizacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_status_higienizacao_label" id="hidden_field_label_status_higienizacao" style="<?php echo $sStyleHidden_status_higienizacao; ?>"><span id="id_label_status_higienizacao"><?php echo $this->nm_new_label['status_higienizacao']; ?></span></TD>
    <TD class="scFormDataOdd css_status_higienizacao_line" id="hidden_field_data_status_higienizacao" style="<?php echo $sStyleHidden_status_higienizacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_status_higienizacao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["status_higienizacao"]) &&  $this->nmgp_cmp_readonly["status_higienizacao"] == "on") { 

 ?>
<input type="hidden" name="status_higienizacao" value="<?php echo $this->form_encode_input($status_higienizacao) . "\">" . $status_higienizacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_status_higienizacao" class="sc-ui-readonly-status_higienizacao css_status_higienizacao_line" style="<?php echo $sStyleReadLab_status_higienizacao; ?>"><?php echo $this->status_higienizacao; ?></span><span id="id_read_off_status_higienizacao" class="css_read_off_status_higienizacao" style="white-space: nowrap;<?php echo $sStyleReadInp_status_higienizacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_status_higienizacao_obj" style="" id="id_sc_field_status_higienizacao" type=text name="status_higienizacao" value="<?php echo $this->form_encode_input($status_higienizacao) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_status_higienizacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_status_higienizacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['higienizado']))
    {
        $this->nm_new_label['higienizado'] = "Higienizado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $higienizado = $this->higienizado;
   $sStyleHidden_higienizado = '';
   if (isset($this->nmgp_cmp_hidden['higienizado']) && $this->nmgp_cmp_hidden['higienizado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['higienizado']);
       $sStyleHidden_higienizado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_higienizado = 'display: none;';
   $sStyleReadInp_higienizado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['higienizado']) && $this->nmgp_cmp_readonly['higienizado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['higienizado']);
       $sStyleReadLab_higienizado = '';
       $sStyleReadInp_higienizado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['higienizado']) && $this->nmgp_cmp_hidden['higienizado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="higienizado" value="<?php echo $this->form_encode_input($higienizado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_higienizado_label" id="hidden_field_label_higienizado" style="<?php echo $sStyleHidden_higienizado; ?>"><span id="id_label_higienizado"><?php echo $this->nm_new_label['higienizado']; ?></span></TD>
    <TD class="scFormDataOdd css_higienizado_line" id="hidden_field_data_higienizado" style="<?php echo $sStyleHidden_higienizado; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_higienizado_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["higienizado"]) &&  $this->nmgp_cmp_readonly["higienizado"] == "on") { 

 ?>
<input type="hidden" name="higienizado" value="<?php echo $this->form_encode_input($higienizado) . "\">" . $higienizado . ""; ?>
<?php } else { ?>
<span id="id_read_on_higienizado" class="sc-ui-readonly-higienizado css_higienizado_line" style="<?php echo $sStyleReadLab_higienizado; ?>"><?php echo $this->higienizado; ?></span><span id="id_read_off_higienizado" class="css_read_off_higienizado" style="white-space: nowrap;<?php echo $sStyleReadInp_higienizado; ?>">
 <input class="sc-js-input scFormObjectOdd css_higienizado_obj" style="" id="id_sc_field_higienizado" type=text name="higienizado" value="<?php echo $this->form_encode_input($higienizado) ?>"
 size=1 alt="{datatype: 'integer', maxLength: 1, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['higienizado']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['higienizado']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['higienizado']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_higienizado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_higienizado_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['categoria_requisicao']))
    {
        $this->nm_new_label['categoria_requisicao'] = "Categoria Requisicao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $categoria_requisicao = $this->categoria_requisicao;
   $sStyleHidden_categoria_requisicao = '';
   if (isset($this->nmgp_cmp_hidden['categoria_requisicao']) && $this->nmgp_cmp_hidden['categoria_requisicao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['categoria_requisicao']);
       $sStyleHidden_categoria_requisicao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_categoria_requisicao = 'display: none;';
   $sStyleReadInp_categoria_requisicao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['categoria_requisicao']) && $this->nmgp_cmp_readonly['categoria_requisicao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['categoria_requisicao']);
       $sStyleReadLab_categoria_requisicao = '';
       $sStyleReadInp_categoria_requisicao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['categoria_requisicao']) && $this->nmgp_cmp_hidden['categoria_requisicao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="categoria_requisicao" value="<?php echo $this->form_encode_input($categoria_requisicao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_categoria_requisicao_label" id="hidden_field_label_categoria_requisicao" style="<?php echo $sStyleHidden_categoria_requisicao; ?>"><span id="id_label_categoria_requisicao"><?php echo $this->nm_new_label['categoria_requisicao']; ?></span></TD>
    <TD class="scFormDataOdd css_categoria_requisicao_line" id="hidden_field_data_categoria_requisicao" style="<?php echo $sStyleHidden_categoria_requisicao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_categoria_requisicao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["categoria_requisicao"]) &&  $this->nmgp_cmp_readonly["categoria_requisicao"] == "on") { 

 ?>
<input type="hidden" name="categoria_requisicao" value="<?php echo $this->form_encode_input($categoria_requisicao) . "\">" . $categoria_requisicao . ""; ?>
<?php } else { ?>
<span id="id_read_on_categoria_requisicao" class="sc-ui-readonly-categoria_requisicao css_categoria_requisicao_line" style="<?php echo $sStyleReadLab_categoria_requisicao; ?>"><?php echo $this->categoria_requisicao; ?></span><span id="id_read_off_categoria_requisicao" class="css_read_off_categoria_requisicao" style="white-space: nowrap;<?php echo $sStyleReadInp_categoria_requisicao; ?>">
 <input class="sc-js-input scFormObjectOdd css_categoria_requisicao_obj" style="" id="id_sc_field_categoria_requisicao" type=text name="categoria_requisicao" value="<?php echo $this->form_encode_input($categoria_requisicao) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_categoria_requisicao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_categoria_requisicao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ligou']))
    {
        $this->nm_new_label['ligou'] = "Ligou";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ligou = $this->ligou;
   $sStyleHidden_ligou = '';
   if (isset($this->nmgp_cmp_hidden['ligou']) && $this->nmgp_cmp_hidden['ligou'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ligou']);
       $sStyleHidden_ligou = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ligou = 'display: none;';
   $sStyleReadInp_ligou = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ligou']) && $this->nmgp_cmp_readonly['ligou'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ligou']);
       $sStyleReadLab_ligou = '';
       $sStyleReadInp_ligou = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ligou']) && $this->nmgp_cmp_hidden['ligou'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ligou" value="<?php echo $this->form_encode_input($ligou) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ligou_label" id="hidden_field_label_ligou" style="<?php echo $sStyleHidden_ligou; ?>"><span id="id_label_ligou"><?php echo $this->nm_new_label['ligou']; ?></span></TD>
    <TD class="scFormDataOdd css_ligou_line" id="hidden_field_data_ligou" style="<?php echo $sStyleHidden_ligou; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ligou_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ligou"]) &&  $this->nmgp_cmp_readonly["ligou"] == "on") { 

 ?>
<input type="hidden" name="ligou" value="<?php echo $this->form_encode_input($ligou) . "\">" . $ligou . ""; ?>
<?php } else { ?>
<span id="id_read_on_ligou" class="sc-ui-readonly-ligou css_ligou_line" style="<?php echo $sStyleReadLab_ligou; ?>"><?php echo $this->ligou; ?></span><span id="id_read_off_ligou" class="css_read_off_ligou" style="white-space: nowrap;<?php echo $sStyleReadInp_ligou; ?>">
 <input class="sc-js-input scFormObjectOdd css_ligou_obj" style="" id="id_sc_field_ligou" type=text name="ligou" value="<?php echo $this->form_encode_input($ligou) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['ligou']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['ligou']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ligou']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ligou_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ligou_text"></span></td></tr></table></td></tr></table></TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R")
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_contribuinte_1");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_contribuinte_1");
 parent.scAjaxDetailHeight("form_contribuinte_1", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_contribuinte_1", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_contribuinte_1", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['sc_modal'])
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_contribuinte_1']['buttonStatus'] = $this->nmgp_botoes;
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
