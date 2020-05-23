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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - cooperador"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - cooperador"); } ?></TITLE>
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
.css_read_off_carteirinha button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_datanovocoop button {
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
.css_read_off_dataref button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_datacomissionamento button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_cooperador/form_cooperador_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_cooperador_mob_sajax_js.php");
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
<?php

include_once('form_cooperador_mob_jquery.php');

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
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_cooperador']['error_buffer']) && '' != $_SESSION['scriptcase']['form_cooperador']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_cooperador']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
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
 include_once("form_cooperador_mob_js0.php");
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
               action="form_cooperador_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_cooperador_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_cooperador_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['fast_search'][2] : "";
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
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-15", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-16", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_sai_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-17", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-18", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-19", "", "group_2");?>
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
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "scBtnFn_sys_format_copy()", "scBtnFn_sys_format_copy()", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-21", "", "group_2");?>
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
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-22", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-23", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-24", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-25", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-26", "", "");?>
 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['empty_filter'] = true;
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

    <TD class="scFormDataOdd css_codigo_line" id="hidden_field_data_codigo" style="<?php echo $sStyleHidden_codigo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_codigo_label"><span id="id_label_codigo"><?php echo $this->nm_new_label['codigo']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['php_cmp_required']['codigo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['php_cmp_required']['codigo'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["codigo"]) &&  $this->nmgp_cmp_readonly["codigo"] == "on")) { 

 ?>
<input type="hidden" name="codigo" value="<?php echo $this->form_encode_input($codigo) . "\"><span id=\"id_ajax_label_codigo\">" . $codigo . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_codigo" class="sc-ui-readonly-codigo css_codigo_line" style="<?php echo $sStyleReadLab_codigo; ?>"><?php echo $this->codigo; ?></span><span id="id_read_off_codigo" class="css_read_off_codigo" style="white-space: nowrap;<?php echo $sStyleReadInp_codigo; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigo_obj" style="" id="id_sc_field_codigo" type=text name="codigo" value="<?php echo $this->form_encode_input($codigo) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigo']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigo']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigo']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dia']))
    {
        $this->nm_new_label['dia'] = "Dia";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dia = $this->dia;
   $sStyleHidden_dia = '';
   if (isset($this->nmgp_cmp_hidden['dia']) && $this->nmgp_cmp_hidden['dia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dia']);
       $sStyleHidden_dia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dia = 'display: none;';
   $sStyleReadInp_dia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dia']) && $this->nmgp_cmp_readonly['dia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dia']);
       $sStyleReadLab_dia = '';
       $sStyleReadInp_dia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dia']) && $this->nmgp_cmp_hidden['dia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dia" value="<?php echo $this->form_encode_input($dia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dia_line" id="hidden_field_data_dia" style="<?php echo $sStyleHidden_dia; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dia_label"><span id="id_label_dia"><?php echo $this->nm_new_label['dia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dia"]) &&  $this->nmgp_cmp_readonly["dia"] == "on") { 

 ?>
<input type="hidden" name="dia" value="<?php echo $this->form_encode_input($dia) . "\">" . $dia . ""; ?>
<?php } else { ?>
<span id="id_read_on_dia" class="sc-ui-readonly-dia css_dia_line" style="<?php echo $sStyleReadLab_dia; ?>"><?php echo $this->dia; ?></span><span id="id_read_off_dia" class="css_read_off_dia" style="white-space: nowrap;<?php echo $sStyleReadInp_dia; ?>">
 <input class="sc-js-input scFormObjectOdd css_dia_obj" style="" id="id_sc_field_dia" type=text name="dia" value="<?php echo $this->form_encode_input($dia) ?>"
 size=5 alt="{datatype: 'integer', maxLength: 5, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['dia']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['dia']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['dia']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mes']))
    {
        $this->nm_new_label['mes'] = "Mes";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mes = $this->mes;
   $sStyleHidden_mes = '';
   if (isset($this->nmgp_cmp_hidden['mes']) && $this->nmgp_cmp_hidden['mes'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mes']);
       $sStyleHidden_mes = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mes = 'display: none;';
   $sStyleReadInp_mes = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mes']) && $this->nmgp_cmp_readonly['mes'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mes']);
       $sStyleReadLab_mes = '';
       $sStyleReadInp_mes = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mes']) && $this->nmgp_cmp_hidden['mes'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mes" value="<?php echo $this->form_encode_input($mes) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mes_line" id="hidden_field_data_mes" style="<?php echo $sStyleHidden_mes; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mes_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mes_label"><span id="id_label_mes"><?php echo $this->nm_new_label['mes']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mes"]) &&  $this->nmgp_cmp_readonly["mes"] == "on") { 

 ?>
<input type="hidden" name="mes" value="<?php echo $this->form_encode_input($mes) . "\">" . $mes . ""; ?>
<?php } else { ?>
<span id="id_read_on_mes" class="sc-ui-readonly-mes css_mes_line" style="<?php echo $sStyleReadLab_mes; ?>"><?php echo $this->mes; ?></span><span id="id_read_off_mes" class="css_read_off_mes" style="white-space: nowrap;<?php echo $sStyleReadInp_mes; ?>">
 <input class="sc-js-input scFormObjectOdd css_mes_obj" style="" id="id_sc_field_mes" type=text name="mes" value="<?php echo $this->form_encode_input($mes) ?>"
 size=5 alt="{datatype: 'integer', maxLength: 5, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['mes']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['mes']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['mes']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mes_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mes_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ano']))
    {
        $this->nm_new_label['ano'] = "Ano";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ano = $this->ano;
   $sStyleHidden_ano = '';
   if (isset($this->nmgp_cmp_hidden['ano']) && $this->nmgp_cmp_hidden['ano'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ano']);
       $sStyleHidden_ano = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ano = 'display: none;';
   $sStyleReadInp_ano = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ano']) && $this->nmgp_cmp_readonly['ano'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ano']);
       $sStyleReadLab_ano = '';
       $sStyleReadInp_ano = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ano']) && $this->nmgp_cmp_hidden['ano'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ano" value="<?php echo $this->form_encode_input($ano) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ano_line" id="hidden_field_data_ano" style="<?php echo $sStyleHidden_ano; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ano_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ano_label"><span id="id_label_ano"><?php echo $this->nm_new_label['ano']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ano"]) &&  $this->nmgp_cmp_readonly["ano"] == "on") { 

 ?>
<input type="hidden" name="ano" value="<?php echo $this->form_encode_input($ano) . "\">" . $ano . ""; ?>
<?php } else { ?>
<span id="id_read_on_ano" class="sc-ui-readonly-ano css_ano_line" style="<?php echo $sStyleReadLab_ano; ?>"><?php echo $this->ano; ?></span><span id="id_read_off_ano" class="css_read_off_ano" style="white-space: nowrap;<?php echo $sStyleReadInp_ano; ?>">
 <input class="sc-js-input scFormObjectOdd css_ano_obj" style="" id="id_sc_field_ano" type=text name="ano" value="<?php echo $this->form_encode_input($ano) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['ano']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['ano']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ano']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ano_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ano_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valor']))
    {
        $this->nm_new_label['valor'] = "Valor";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valor = $this->valor;
   $sStyleHidden_valor = '';
   if (isset($this->nmgp_cmp_hidden['valor']) && $this->nmgp_cmp_hidden['valor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valor']);
       $sStyleHidden_valor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valor = 'display: none;';
   $sStyleReadInp_valor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valor']) && $this->nmgp_cmp_readonly['valor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valor']);
       $sStyleReadLab_valor = '';
       $sStyleReadInp_valor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valor']) && $this->nmgp_cmp_hidden['valor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor" value="<?php echo $this->form_encode_input($valor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_valor_line" id="hidden_field_data_valor" style="<?php echo $sStyleHidden_valor; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valor_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_valor_label"><span id="id_label_valor"><?php echo $this->nm_new_label['valor']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valor"]) &&  $this->nmgp_cmp_readonly["valor"] == "on") { 

 ?>
<input type="hidden" name="valor" value="<?php echo $this->form_encode_input($valor) . "\">" . $valor . ""; ?>
<?php } else { ?>
<span id="id_read_on_valor" class="sc-ui-readonly-valor css_valor_line" style="<?php echo $sStyleReadLab_valor; ?>"><?php echo $this->valor; ?></span><span id="id_read_off_valor" class="css_read_off_valor" style="white-space: nowrap;<?php echo $sStyleReadInp_valor; ?>">
 <input class="sc-js-input scFormObjectOdd css_valor_obj" style="" id="id_sc_field_valor" type=text name="valor" value="<?php echo $this->form_encode_input($valor) ?>"
 size=6 alt="{datatype: 'decimal', maxLength: 6, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valor']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_operador_line" id="hidden_field_data_operador" style="<?php echo $sStyleHidden_operador; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_operador_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_operador_label"><span id="id_label_operador"><?php echo $this->nm_new_label['operador']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["operador"]) &&  $this->nmgp_cmp_readonly["operador"] == "on") { 

 ?>
<input type="hidden" name="operador" value="<?php echo $this->form_encode_input($operador) . "\">" . $operador . ""; ?>
<?php } else { ?>
<span id="id_read_on_operador" class="sc-ui-readonly-operador css_operador_line" style="<?php echo $sStyleReadLab_operador; ?>"><?php echo $this->operador; ?></span><span id="id_read_off_operador" class="css_read_off_operador" style="white-space: nowrap;<?php echo $sStyleReadInp_operador; ?>">
 <input class="sc-js-input scFormObjectOdd css_operador_obj" style="" id="id_sc_field_operador" type=text name="operador" value="<?php echo $this->form_encode_input($operador) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operador_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operador_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_status_line" id="hidden_field_data_status" style="<?php echo $sStyleHidden_status; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_status_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_status_label"><span id="id_label_status"><?php echo $this->nm_new_label['status']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["status"]) &&  $this->nmgp_cmp_readonly["status"] == "on") { 

 ?>
<input type="hidden" name="status" value="<?php echo $this->form_encode_input($status) . "\">" . $status . ""; ?>
<?php } else { ?>
<span id="id_read_on_status" class="sc-ui-readonly-status css_status_line" style="<?php echo $sStyleReadLab_status; ?>"><?php echo $this->status; ?></span><span id="id_read_off_status" class="css_read_off_status" style="white-space: nowrap;<?php echo $sStyleReadInp_status; ?>">
 <input class="sc-js-input scFormObjectOdd css_status_obj" style="" id="id_sc_field_status" type=text name="status" value="<?php echo $this->form_encode_input($status) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_status_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_tipocobranca_line" id="hidden_field_data_tipocobranca" style="<?php echo $sStyleHidden_tipocobranca; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipocobranca_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tipocobranca_label"><span id="id_label_tipocobranca"><?php echo $this->nm_new_label['tipocobranca']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipocobranca"]) &&  $this->nmgp_cmp_readonly["tipocobranca"] == "on") { 

 ?>
<input type="hidden" name="tipocobranca" value="<?php echo $this->form_encode_input($tipocobranca) . "\">" . $tipocobranca . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipocobranca" class="sc-ui-readonly-tipocobranca css_tipocobranca_line" style="<?php echo $sStyleReadLab_tipocobranca; ?>"><?php echo $this->tipocobranca; ?></span><span id="id_read_off_tipocobranca" class="css_read_off_tipocobranca" style="white-space: nowrap;<?php echo $sStyleReadInp_tipocobranca; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipocobranca_obj" style="" id="id_sc_field_tipocobranca" type=text name="tipocobranca" value="<?php echo $this->form_encode_input($tipocobranca) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipocobranca_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipocobranca_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['carteirinha']))
    {
        $this->nm_new_label['carteirinha'] = "Carteirinha";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_carteirinha = $this->carteirinha;
   if (strlen($this->carteirinha_hora) > 8 ) {$this->carteirinha_hora = substr($this->carteirinha_hora, 0, 8);}
   $this->carteirinha .= ' ' . $this->carteirinha_hora;
   $carteirinha = $this->carteirinha;
   $sStyleHidden_carteirinha = '';
   if (isset($this->nmgp_cmp_hidden['carteirinha']) && $this->nmgp_cmp_hidden['carteirinha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['carteirinha']);
       $sStyleHidden_carteirinha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_carteirinha = 'display: none;';
   $sStyleReadInp_carteirinha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['carteirinha']) && $this->nmgp_cmp_readonly['carteirinha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['carteirinha']);
       $sStyleReadLab_carteirinha = '';
       $sStyleReadInp_carteirinha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['carteirinha']) && $this->nmgp_cmp_hidden['carteirinha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="carteirinha" value="<?php echo $this->form_encode_input($carteirinha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_carteirinha_line" id="hidden_field_data_carteirinha" style="<?php echo $sStyleHidden_carteirinha; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_carteirinha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_carteirinha_label"><span id="id_label_carteirinha"><?php echo $this->nm_new_label['carteirinha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["carteirinha"]) &&  $this->nmgp_cmp_readonly["carteirinha"] == "on") { 

 ?>
<input type="hidden" name="carteirinha" value="<?php echo $this->form_encode_input($carteirinha) . "\">" . $carteirinha . ""; ?>
<?php } else { ?>
<span id="id_read_on_carteirinha" class="sc-ui-readonly-carteirinha css_carteirinha_line" style="<?php echo $sStyleReadLab_carteirinha; ?>"><?php echo $carteirinha; ?></span><span id="id_read_off_carteirinha" class="css_read_off_carteirinha" style="white-space: nowrap;<?php echo $sStyleReadInp_carteirinha; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_carteirinha_obj" style="" id="id_sc_field_carteirinha" type=text name="carteirinha" value="<?php echo $this->form_encode_input($carteirinha) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['carteirinha']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['carteirinha']['date_format']; ?>', timeSep: '<?php echo $this->field_config['carteirinha']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['carteirinha']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_carteirinha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_carteirinha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->carteirinha = $old_dt_carteirinha;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_parceiro_line" id="hidden_field_data_parceiro" style="<?php echo $sStyleHidden_parceiro; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parceiro_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_parceiro_label"><span id="id_label_parceiro"><?php echo $this->nm_new_label['parceiro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parceiro"]) &&  $this->nmgp_cmp_readonly["parceiro"] == "on") { 

 ?>
<input type="hidden" name="parceiro" value="<?php echo $this->form_encode_input($parceiro) . "\">" . $parceiro . ""; ?>
<?php } else { ?>
<span id="id_read_on_parceiro" class="sc-ui-readonly-parceiro css_parceiro_line" style="<?php echo $sStyleReadLab_parceiro; ?>"><?php echo $this->parceiro; ?></span><span id="id_read_off_parceiro" class="css_read_off_parceiro" style="white-space: nowrap;<?php echo $sStyleReadInp_parceiro; ?>">
 <input class="sc-js-input scFormObjectOdd css_parceiro_obj" style="" id="id_sc_field_parceiro" type=text name="parceiro" value="<?php echo $this->form_encode_input($parceiro) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['parceiro']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['parceiro']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['parceiro']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parceiro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parceiro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ncodigo']))
    {
        $this->nm_new_label['ncodigo'] = "N Codigo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ncodigo = $this->ncodigo;
   $sStyleHidden_ncodigo = '';
   if (isset($this->nmgp_cmp_hidden['ncodigo']) && $this->nmgp_cmp_hidden['ncodigo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ncodigo']);
       $sStyleHidden_ncodigo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ncodigo = 'display: none;';
   $sStyleReadInp_ncodigo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ncodigo']) && $this->nmgp_cmp_readonly['ncodigo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ncodigo']);
       $sStyleReadLab_ncodigo = '';
       $sStyleReadInp_ncodigo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ncodigo']) && $this->nmgp_cmp_hidden['ncodigo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ncodigo" value="<?php echo $this->form_encode_input($ncodigo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ncodigo_line" id="hidden_field_data_ncodigo" style="<?php echo $sStyleHidden_ncodigo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ncodigo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ncodigo_label"><span id="id_label_ncodigo"><?php echo $this->nm_new_label['ncodigo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ncodigo"]) &&  $this->nmgp_cmp_readonly["ncodigo"] == "on") { 

 ?>
<input type="hidden" name="ncodigo" value="<?php echo $this->form_encode_input($ncodigo) . "\">" . $ncodigo . ""; ?>
<?php } else { ?>
<span id="id_read_on_ncodigo" class="sc-ui-readonly-ncodigo css_ncodigo_line" style="<?php echo $sStyleReadLab_ncodigo; ?>"><?php echo $this->ncodigo; ?></span><span id="id_read_off_ncodigo" class="css_read_off_ncodigo" style="white-space: nowrap;<?php echo $sStyleReadInp_ncodigo; ?>">
 <input class="sc-js-input scFormObjectOdd css_ncodigo_obj" style="" id="id_sc_field_ncodigo" type=text name="ncodigo" value="<?php echo $this->form_encode_input($ncodigo) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['ncodigo']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['ncodigo']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ncodigo']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ncodigo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ncodigo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_codigocompanhia_line" id="hidden_field_data_codigocompanhia" style="<?php echo $sStyleHidden_codigocompanhia; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigocompanhia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_codigocompanhia_label"><span id="id_label_codigocompanhia"><?php echo $this->nm_new_label['codigocompanhia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codigocompanhia"]) &&  $this->nmgp_cmp_readonly["codigocompanhia"] == "on") { 

 ?>
<input type="hidden" name="codigocompanhia" value="<?php echo $this->form_encode_input($codigocompanhia) . "\">" . $codigocompanhia . ""; ?>
<?php } else { ?>
<span id="id_read_on_codigocompanhia" class="sc-ui-readonly-codigocompanhia css_codigocompanhia_line" style="<?php echo $sStyleReadLab_codigocompanhia; ?>"><?php echo $this->codigocompanhia; ?></span><span id="id_read_off_codigocompanhia" class="css_read_off_codigocompanhia" style="white-space: nowrap;<?php echo $sStyleReadInp_codigocompanhia; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigocompanhia_obj" style="" id="id_sc_field_codigocompanhia" type=text name="codigocompanhia" value="<?php echo $this->form_encode_input($codigocompanhia) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigocompanhia']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigocompanhia']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigocompanhia']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigocompanhia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigocompanhia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_autorizado_line" id="hidden_field_data_autorizado" style="<?php echo $sStyleHidden_autorizado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_autorizado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_autorizado_label"><span id="id_label_autorizado"><?php echo $this->nm_new_label['autorizado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["autorizado"]) &&  $this->nmgp_cmp_readonly["autorizado"] == "on") { 

 ?>
<input type="hidden" name="autorizado" value="<?php echo $this->form_encode_input($autorizado) . "\">" . $autorizado . ""; ?>
<?php } else { ?>
<span id="id_read_on_autorizado" class="sc-ui-readonly-autorizado css_autorizado_line" style="<?php echo $sStyleReadLab_autorizado; ?>"><?php echo $this->autorizado; ?></span><span id="id_read_off_autorizado" class="css_read_off_autorizado" style="white-space: nowrap;<?php echo $sStyleReadInp_autorizado; ?>">
 <input class="sc-js-input scFormObjectOdd css_autorizado_obj" style="" id="id_sc_field_autorizado" type=text name="autorizado" value="<?php echo $this->form_encode_input($autorizado) ?>"
 size=3 alt="{datatype: 'integer', maxLength: 3, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['autorizado']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['autorizado']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['autorizado']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_autorizado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_autorizado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_audioautorizacao_line" id="hidden_field_data_audioautorizacao" style="<?php echo $sStyleHidden_audioautorizacao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_audioautorizacao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_audioautorizacao_label"><span id="id_label_audioautorizacao"><?php echo $this->nm_new_label['audioautorizacao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["audioautorizacao"]) &&  $this->nmgp_cmp_readonly["audioautorizacao"] == "on") { 

 ?>
<input type="hidden" name="audioautorizacao" value="<?php echo $this->form_encode_input($audioautorizacao) . "\">" . $audioautorizacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_audioautorizacao" class="sc-ui-readonly-audioautorizacao css_audioautorizacao_line" style="<?php echo $sStyleReadLab_audioautorizacao; ?>"><?php echo $this->audioautorizacao; ?></span><span id="id_read_off_audioautorizacao" class="css_read_off_audioautorizacao" style="white-space: nowrap;<?php echo $sStyleReadInp_audioautorizacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_audioautorizacao_obj" style="" id="id_sc_field_audioautorizacao" type=text name="audioautorizacao" value="<?php echo $this->form_encode_input($audioautorizacao) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_audioautorizacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_audioautorizacao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['datanovocoop']))
    {
        $this->nm_new_label['datanovocoop'] = "Data Novo Coop";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_datanovocoop = $this->datanovocoop;
   if (strlen($this->datanovocoop_hora) > 8 ) {$this->datanovocoop_hora = substr($this->datanovocoop_hora, 0, 8);}
   $this->datanovocoop .= ' ' . $this->datanovocoop_hora;
   $datanovocoop = $this->datanovocoop;
   $sStyleHidden_datanovocoop = '';
   if (isset($this->nmgp_cmp_hidden['datanovocoop']) && $this->nmgp_cmp_hidden['datanovocoop'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datanovocoop']);
       $sStyleHidden_datanovocoop = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datanovocoop = 'display: none;';
   $sStyleReadInp_datanovocoop = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datanovocoop']) && $this->nmgp_cmp_readonly['datanovocoop'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datanovocoop']);
       $sStyleReadLab_datanovocoop = '';
       $sStyleReadInp_datanovocoop = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datanovocoop']) && $this->nmgp_cmp_hidden['datanovocoop'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datanovocoop" value="<?php echo $this->form_encode_input($datanovocoop) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_datanovocoop_line" id="hidden_field_data_datanovocoop" style="<?php echo $sStyleHidden_datanovocoop; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_datanovocoop_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_datanovocoop_label"><span id="id_label_datanovocoop"><?php echo $this->nm_new_label['datanovocoop']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datanovocoop"]) &&  $this->nmgp_cmp_readonly["datanovocoop"] == "on") { 

 ?>
<input type="hidden" name="datanovocoop" value="<?php echo $this->form_encode_input($datanovocoop) . "\">" . $datanovocoop . ""; ?>
<?php } else { ?>
<span id="id_read_on_datanovocoop" class="sc-ui-readonly-datanovocoop css_datanovocoop_line" style="<?php echo $sStyleReadLab_datanovocoop; ?>"><?php echo $datanovocoop; ?></span><span id="id_read_off_datanovocoop" class="css_read_off_datanovocoop" style="white-space: nowrap;<?php echo $sStyleReadInp_datanovocoop; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_datanovocoop_obj" style="" id="id_sc_field_datanovocoop" type=text name="datanovocoop" value="<?php echo $this->form_encode_input($datanovocoop) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['datanovocoop']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datanovocoop']['date_format']; ?>', timeSep: '<?php echo $this->field_config['datanovocoop']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['datanovocoop']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datanovocoop_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datanovocoop_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->datanovocoop = $old_dt_datanovocoop;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['timestamp']))
    {
        $this->nm_new_label['timestamp'] = "Timestamp";
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

    <TD class="scFormDataOdd css_timestamp_line" id="hidden_field_data_timestamp" style="<?php echo $sStyleHidden_timestamp; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_timestamp_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_timestamp_label"><span id="id_label_timestamp"><?php echo $this->nm_new_label['timestamp']; ?></span></span><br>
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_timestamp_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_timestamp_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->timestamp = $old_dt_timestamp;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_auditado_line" id="hidden_field_data_auditado" style="<?php echo $sStyleHidden_auditado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_auditado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_auditado_label"><span id="id_label_auditado"><?php echo $this->nm_new_label['auditado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["auditado"]) &&  $this->nmgp_cmp_readonly["auditado"] == "on") { 

 ?>
<input type="hidden" name="auditado" value="<?php echo $this->form_encode_input($auditado) . "\">" . $auditado . ""; ?>
<?php } else { ?>
<span id="id_read_on_auditado" class="sc-ui-readonly-auditado css_auditado_line" style="<?php echo $sStyleReadLab_auditado; ?>"><?php echo $this->auditado; ?></span><span id="id_read_off_auditado" class="css_read_off_auditado" style="white-space: nowrap;<?php echo $sStyleReadInp_auditado; ?>">
 <input class="sc-js-input scFormObjectOdd css_auditado_obj" style="" id="id_sc_field_auditado" type=text name="auditado" value="<?php echo $this->form_encode_input($auditado) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['auditado']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['auditado']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['auditado']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_auditado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_auditado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_ultimocontato_line" id="hidden_field_data_ultimocontato" style="<?php echo $sStyleHidden_ultimocontato; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ultimocontato_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ultimocontato_label"><span id="id_label_ultimocontato"><?php echo $this->nm_new_label['ultimocontato']; ?></span></span><br>
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ultimocontato_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ultimocontato_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->ultimocontato = $old_dt_ultimocontato;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_servidoraudio_line" id="hidden_field_data_servidoraudio" style="<?php echo $sStyleHidden_servidoraudio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_servidoraudio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_servidoraudio_label"><span id="id_label_servidoraudio"><?php echo $this->nm_new_label['servidoraudio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["servidoraudio"]) &&  $this->nmgp_cmp_readonly["servidoraudio"] == "on") { 

 ?>
<input type="hidden" name="servidoraudio" value="<?php echo $this->form_encode_input($servidoraudio) . "\">" . $servidoraudio . ""; ?>
<?php } else { ?>
<span id="id_read_on_servidoraudio" class="sc-ui-readonly-servidoraudio css_servidoraudio_line" style="<?php echo $sStyleReadLab_servidoraudio; ?>"><?php echo $this->servidoraudio; ?></span><span id="id_read_off_servidoraudio" class="css_read_off_servidoraudio" style="white-space: nowrap;<?php echo $sStyleReadInp_servidoraudio; ?>">
 <input class="sc-js-input scFormObjectOdd css_servidoraudio_obj" style="" id="id_sc_field_servidoraudio" type=text name="servidoraudio" value="<?php echo $this->form_encode_input($servidoraudio) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_servidoraudio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_servidoraudio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_usuario_line" id="hidden_field_data_usuario" style="<?php echo $sStyleHidden_usuario; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_usuario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_usuario_label"><span id="id_label_usuario"><?php echo $this->nm_new_label['usuario']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["usuario"]) &&  $this->nmgp_cmp_readonly["usuario"] == "on") { 

 ?>
<input type="hidden" name="usuario" value="<?php echo $this->form_encode_input($usuario) . "\">" . $usuario . ""; ?>
<?php } else { ?>
<span id="id_read_on_usuario" class="sc-ui-readonly-usuario css_usuario_line" style="<?php echo $sStyleReadLab_usuario; ?>"><?php echo $this->usuario; ?></span><span id="id_read_off_usuario" class="css_read_off_usuario" style="white-space: nowrap;<?php echo $sStyleReadInp_usuario; ?>">
 <input class="sc-js-input scFormObjectOdd css_usuario_obj" style="" id="id_sc_field_usuario" type=text name="usuario" value="<?php echo $this->form_encode_input($usuario) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_usuario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_usuario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['adiantarmensal']))
    {
        $this->nm_new_label['adiantarmensal'] = "Adiantar Mensal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $adiantarmensal = $this->adiantarmensal;
   $sStyleHidden_adiantarmensal = '';
   if (isset($this->nmgp_cmp_hidden['adiantarmensal']) && $this->nmgp_cmp_hidden['adiantarmensal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['adiantarmensal']);
       $sStyleHidden_adiantarmensal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_adiantarmensal = 'display: none;';
   $sStyleReadInp_adiantarmensal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['adiantarmensal']) && $this->nmgp_cmp_readonly['adiantarmensal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['adiantarmensal']);
       $sStyleReadLab_adiantarmensal = '';
       $sStyleReadInp_adiantarmensal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['adiantarmensal']) && $this->nmgp_cmp_hidden['adiantarmensal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="adiantarmensal" value="<?php echo $this->form_encode_input($adiantarmensal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_adiantarmensal_line" id="hidden_field_data_adiantarmensal" style="<?php echo $sStyleHidden_adiantarmensal; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_adiantarmensal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_adiantarmensal_label"><span id="id_label_adiantarmensal"><?php echo $this->nm_new_label['adiantarmensal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["adiantarmensal"]) &&  $this->nmgp_cmp_readonly["adiantarmensal"] == "on") { 

 ?>
<input type="hidden" name="adiantarmensal" value="<?php echo $this->form_encode_input($adiantarmensal) . "\">" . $adiantarmensal . ""; ?>
<?php } else { ?>
<span id="id_read_on_adiantarmensal" class="sc-ui-readonly-adiantarmensal css_adiantarmensal_line" style="<?php echo $sStyleReadLab_adiantarmensal; ?>"><?php echo $this->adiantarmensal; ?></span><span id="id_read_off_adiantarmensal" class="css_read_off_adiantarmensal" style="white-space: nowrap;<?php echo $sStyleReadInp_adiantarmensal; ?>">
 <input class="sc-js-input scFormObjectOdd css_adiantarmensal_obj" style="" id="id_sc_field_adiantarmensal" type=text name="adiantarmensal" value="<?php echo $this->form_encode_input($adiantarmensal) ?>"
 size=5 alt="{datatype: 'integer', maxLength: 5, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['adiantarmensal']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['adiantarmensal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['adiantarmensal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_adiantarmensal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_adiantarmensal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['origem']))
    {
        $this->nm_new_label['origem'] = "Origem";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $origem = $this->origem;
   $sStyleHidden_origem = '';
   if (isset($this->nmgp_cmp_hidden['origem']) && $this->nmgp_cmp_hidden['origem'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['origem']);
       $sStyleHidden_origem = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_origem = 'display: none;';
   $sStyleReadInp_origem = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['origem']) && $this->nmgp_cmp_readonly['origem'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['origem']);
       $sStyleReadLab_origem = '';
       $sStyleReadInp_origem = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['origem']) && $this->nmgp_cmp_hidden['origem'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="origem" value="<?php echo $this->form_encode_input($origem) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_origem_line" id="hidden_field_data_origem" style="<?php echo $sStyleHidden_origem; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_origem_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_origem_label"><span id="id_label_origem"><?php echo $this->nm_new_label['origem']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["origem"]) &&  $this->nmgp_cmp_readonly["origem"] == "on") { 

 ?>
<input type="hidden" name="origem" value="<?php echo $this->form_encode_input($origem) . "\">" . $origem . ""; ?>
<?php } else { ?>
<span id="id_read_on_origem" class="sc-ui-readonly-origem css_origem_line" style="<?php echo $sStyleReadLab_origem; ?>"><?php echo $this->origem; ?></span><span id="id_read_off_origem" class="css_read_off_origem" style="white-space: nowrap;<?php echo $sStyleReadInp_origem; ?>">
 <input class="sc-js-input scFormObjectOdd css_origem_obj" style="" id="id_sc_field_origem" type=text name="origem" value="<?php echo $this->form_encode_input($origem) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['origem']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['origem']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['origem']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_origem_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_origem_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dataref']))
    {
        $this->nm_new_label['dataref'] = "Data Ref";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_dataref = $this->dataref;
   if (strlen($this->dataref_hora) > 8 ) {$this->dataref_hora = substr($this->dataref_hora, 0, 8);}
   $this->dataref .= ' ' . $this->dataref_hora;
   $dataref = $this->dataref;
   $sStyleHidden_dataref = '';
   if (isset($this->nmgp_cmp_hidden['dataref']) && $this->nmgp_cmp_hidden['dataref'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dataref']);
       $sStyleHidden_dataref = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dataref = 'display: none;';
   $sStyleReadInp_dataref = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dataref']) && $this->nmgp_cmp_readonly['dataref'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dataref']);
       $sStyleReadLab_dataref = '';
       $sStyleReadInp_dataref = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dataref']) && $this->nmgp_cmp_hidden['dataref'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dataref" value="<?php echo $this->form_encode_input($dataref) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dataref_line" id="hidden_field_data_dataref" style="<?php echo $sStyleHidden_dataref; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dataref_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dataref_label"><span id="id_label_dataref"><?php echo $this->nm_new_label['dataref']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dataref"]) &&  $this->nmgp_cmp_readonly["dataref"] == "on") { 

 ?>
<input type="hidden" name="dataref" value="<?php echo $this->form_encode_input($dataref) . "\">" . $dataref . ""; ?>
<?php } else { ?>
<span id="id_read_on_dataref" class="sc-ui-readonly-dataref css_dataref_line" style="<?php echo $sStyleReadLab_dataref; ?>"><?php echo $dataref; ?></span><span id="id_read_off_dataref" class="css_read_off_dataref" style="white-space: nowrap;<?php echo $sStyleReadInp_dataref; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_dataref_obj" style="" id="id_sc_field_dataref" type=text name="dataref" value="<?php echo $this->form_encode_input($dataref) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['dataref']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dataref']['date_format']; ?>', timeSep: '<?php echo $this->field_config['dataref']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['dataref']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dataref_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dataref_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->dataref = $old_dt_dataref;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['comissionado']))
    {
        $this->nm_new_label['comissionado'] = "Comissionado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $comissionado = $this->comissionado;
   $sStyleHidden_comissionado = '';
   if (isset($this->nmgp_cmp_hidden['comissionado']) && $this->nmgp_cmp_hidden['comissionado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['comissionado']);
       $sStyleHidden_comissionado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_comissionado = 'display: none;';
   $sStyleReadInp_comissionado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['comissionado']) && $this->nmgp_cmp_readonly['comissionado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['comissionado']);
       $sStyleReadLab_comissionado = '';
       $sStyleReadInp_comissionado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['comissionado']) && $this->nmgp_cmp_hidden['comissionado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="comissionado" value="<?php echo $this->form_encode_input($comissionado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_comissionado_line" id="hidden_field_data_comissionado" style="<?php echo $sStyleHidden_comissionado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_comissionado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_comissionado_label"><span id="id_label_comissionado"><?php echo $this->nm_new_label['comissionado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["comissionado"]) &&  $this->nmgp_cmp_readonly["comissionado"] == "on") { 

 ?>
<input type="hidden" name="comissionado" value="<?php echo $this->form_encode_input($comissionado) . "\">" . $comissionado . ""; ?>
<?php } else { ?>
<span id="id_read_on_comissionado" class="sc-ui-readonly-comissionado css_comissionado_line" style="<?php echo $sStyleReadLab_comissionado; ?>"><?php echo $this->comissionado; ?></span><span id="id_read_off_comissionado" class="css_read_off_comissionado" style="white-space: nowrap;<?php echo $sStyleReadInp_comissionado; ?>">
 <input class="sc-js-input scFormObjectOdd css_comissionado_obj" style="" id="id_sc_field_comissionado" type=text name="comissionado" value="<?php echo $this->form_encode_input($comissionado) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['comissionado']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['comissionado']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['comissionado']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_comissionado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_comissionado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['datacomissionamento']))
    {
        $this->nm_new_label['datacomissionamento'] = "Data Comissionamento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_datacomissionamento = $this->datacomissionamento;
   if (strlen($this->datacomissionamento_hora) > 8 ) {$this->datacomissionamento_hora = substr($this->datacomissionamento_hora, 0, 8);}
   $this->datacomissionamento .= ' ' . $this->datacomissionamento_hora;
   $datacomissionamento = $this->datacomissionamento;
   $sStyleHidden_datacomissionamento = '';
   if (isset($this->nmgp_cmp_hidden['datacomissionamento']) && $this->nmgp_cmp_hidden['datacomissionamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datacomissionamento']);
       $sStyleHidden_datacomissionamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datacomissionamento = 'display: none;';
   $sStyleReadInp_datacomissionamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datacomissionamento']) && $this->nmgp_cmp_readonly['datacomissionamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datacomissionamento']);
       $sStyleReadLab_datacomissionamento = '';
       $sStyleReadInp_datacomissionamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datacomissionamento']) && $this->nmgp_cmp_hidden['datacomissionamento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datacomissionamento" value="<?php echo $this->form_encode_input($datacomissionamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_datacomissionamento_line" id="hidden_field_data_datacomissionamento" style="<?php echo $sStyleHidden_datacomissionamento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_datacomissionamento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_datacomissionamento_label"><span id="id_label_datacomissionamento"><?php echo $this->nm_new_label['datacomissionamento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datacomissionamento"]) &&  $this->nmgp_cmp_readonly["datacomissionamento"] == "on") { 

 ?>
<input type="hidden" name="datacomissionamento" value="<?php echo $this->form_encode_input($datacomissionamento) . "\">" . $datacomissionamento . ""; ?>
<?php } else { ?>
<span id="id_read_on_datacomissionamento" class="sc-ui-readonly-datacomissionamento css_datacomissionamento_line" style="<?php echo $sStyleReadLab_datacomissionamento; ?>"><?php echo $datacomissionamento; ?></span><span id="id_read_off_datacomissionamento" class="css_read_off_datacomissionamento" style="white-space: nowrap;<?php echo $sStyleReadInp_datacomissionamento; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_datacomissionamento_obj" style="" id="id_sc_field_datacomissionamento" type=text name="datacomissionamento" value="<?php echo $this->form_encode_input($datacomissionamento) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['datacomissionamento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datacomissionamento']['date_format']; ?>', timeSep: '<?php echo $this->field_config['datacomissionamento']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['datacomissionamento']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datacomissionamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datacomissionamento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->datacomissionamento = $old_dt_datacomissionamento;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prob']))
    {
        $this->nm_new_label['prob'] = "Prob";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prob = $this->prob;
   $sStyleHidden_prob = '';
   if (isset($this->nmgp_cmp_hidden['prob']) && $this->nmgp_cmp_hidden['prob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prob']);
       $sStyleHidden_prob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prob = 'display: none;';
   $sStyleReadInp_prob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prob']) && $this->nmgp_cmp_readonly['prob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prob']);
       $sStyleReadLab_prob = '';
       $sStyleReadInp_prob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prob']) && $this->nmgp_cmp_hidden['prob'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prob" value="<?php echo $this->form_encode_input($prob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prob_line" id="hidden_field_data_prob" style="<?php echo $sStyleHidden_prob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prob_label"><span id="id_label_prob"><?php echo $this->nm_new_label['prob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prob"]) &&  $this->nmgp_cmp_readonly["prob"] == "on") { 

 ?>
<input type="hidden" name="prob" value="<?php echo $this->form_encode_input($prob) . "\">" . $prob . ""; ?>
<?php } else { ?>
<span id="id_read_on_prob" class="sc-ui-readonly-prob css_prob_line" style="<?php echo $sStyleReadLab_prob; ?>"><?php echo $this->prob; ?></span><span id="id_read_off_prob" class="css_read_off_prob" style="white-space: nowrap;<?php echo $sStyleReadInp_prob; ?>">
 <input class="sc-js-input scFormObjectOdd css_prob_obj" style="" id="id_sc_field_prob" type=text name="prob" value="<?php echo $this->form_encode_input($prob) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['prob']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['prob']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prob']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['frequencia']))
    {
        $this->nm_new_label['frequencia'] = "Frequencia";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $frequencia = $this->frequencia;
   $sStyleHidden_frequencia = '';
   if (isset($this->nmgp_cmp_hidden['frequencia']) && $this->nmgp_cmp_hidden['frequencia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['frequencia']);
       $sStyleHidden_frequencia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_frequencia = 'display: none;';
   $sStyleReadInp_frequencia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['frequencia']) && $this->nmgp_cmp_readonly['frequencia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['frequencia']);
       $sStyleReadLab_frequencia = '';
       $sStyleReadInp_frequencia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['frequencia']) && $this->nmgp_cmp_hidden['frequencia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="frequencia" value="<?php echo $this->form_encode_input($frequencia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_frequencia_line" id="hidden_field_data_frequencia" style="<?php echo $sStyleHidden_frequencia; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_frequencia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_frequencia_label"><span id="id_label_frequencia"><?php echo $this->nm_new_label['frequencia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["frequencia"]) &&  $this->nmgp_cmp_readonly["frequencia"] == "on") { 

 ?>
<input type="hidden" name="frequencia" value="<?php echo $this->form_encode_input($frequencia) . "\">" . $frequencia . ""; ?>
<?php } else { ?>
<span id="id_read_on_frequencia" class="sc-ui-readonly-frequencia css_frequencia_line" style="<?php echo $sStyleReadLab_frequencia; ?>"><?php echo $this->frequencia; ?></span><span id="id_read_off_frequencia" class="css_read_off_frequencia" style="white-space: nowrap;<?php echo $sStyleReadInp_frequencia; ?>">
 <input class="sc-js-input scFormObjectOdd css_frequencia_obj" style="" id="id_sc_field_frequencia" type=text name="frequencia" value="<?php echo $this->form_encode_input($frequencia) ?>"
 size=10 alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['frequencia']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['frequencia']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['frequencia']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_frequencia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_frequencia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valorespecial']))
    {
        $this->nm_new_label['valorespecial'] = "Valor Especial";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valorespecial = $this->valorespecial;
   $sStyleHidden_valorespecial = '';
   if (isset($this->nmgp_cmp_hidden['valorespecial']) && $this->nmgp_cmp_hidden['valorespecial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valorespecial']);
       $sStyleHidden_valorespecial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valorespecial = 'display: none;';
   $sStyleReadInp_valorespecial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valorespecial']) && $this->nmgp_cmp_readonly['valorespecial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valorespecial']);
       $sStyleReadLab_valorespecial = '';
       $sStyleReadInp_valorespecial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valorespecial']) && $this->nmgp_cmp_hidden['valorespecial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valorespecial" value="<?php echo $this->form_encode_input($valorespecial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_valorespecial_line" id="hidden_field_data_valorespecial" style="<?php echo $sStyleHidden_valorespecial; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valorespecial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_valorespecial_label"><span id="id_label_valorespecial"><?php echo $this->nm_new_label['valorespecial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valorespecial"]) &&  $this->nmgp_cmp_readonly["valorespecial"] == "on") { 

 ?>
<input type="hidden" name="valorespecial" value="<?php echo $this->form_encode_input($valorespecial) . "\">" . $valorespecial . ""; ?>
<?php } else { ?>
<span id="id_read_on_valorespecial" class="sc-ui-readonly-valorespecial css_valorespecial_line" style="<?php echo $sStyleReadLab_valorespecial; ?>"><?php echo $this->valorespecial; ?></span><span id="id_read_off_valorespecial" class="css_read_off_valorespecial" style="white-space: nowrap;<?php echo $sStyleReadInp_valorespecial; ?>">
 <input class="sc-js-input scFormObjectOdd css_valorespecial_obj" style="" id="id_sc_field_valorespecial" type=text name="valorespecial" value="<?php echo $this->form_encode_input($valorespecial) ?>"
 size=6 alt="{datatype: 'decimal', maxLength: 6, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valorespecial']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valorespecial']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valorespecial']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valorespecial']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valorespecial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valorespecial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['operadorespecial']))
    {
        $this->nm_new_label['operadorespecial'] = "Operador Especial";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $operadorespecial = $this->operadorespecial;
   $sStyleHidden_operadorespecial = '';
   if (isset($this->nmgp_cmp_hidden['operadorespecial']) && $this->nmgp_cmp_hidden['operadorespecial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['operadorespecial']);
       $sStyleHidden_operadorespecial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_operadorespecial = 'display: none;';
   $sStyleReadInp_operadorespecial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['operadorespecial']) && $this->nmgp_cmp_readonly['operadorespecial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['operadorespecial']);
       $sStyleReadLab_operadorespecial = '';
       $sStyleReadInp_operadorespecial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['operadorespecial']) && $this->nmgp_cmp_hidden['operadorespecial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="operadorespecial" value="<?php echo $this->form_encode_input($operadorespecial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_operadorespecial_line" id="hidden_field_data_operadorespecial" style="<?php echo $sStyleHidden_operadorespecial; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_operadorespecial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_operadorespecial_label"><span id="id_label_operadorespecial"><?php echo $this->nm_new_label['operadorespecial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["operadorespecial"]) &&  $this->nmgp_cmp_readonly["operadorespecial"] == "on") { 

 ?>
<input type="hidden" name="operadorespecial" value="<?php echo $this->form_encode_input($operadorespecial) . "\">" . $operadorespecial . ""; ?>
<?php } else { ?>
<span id="id_read_on_operadorespecial" class="sc-ui-readonly-operadorespecial css_operadorespecial_line" style="<?php echo $sStyleReadLab_operadorespecial; ?>"><?php echo $this->operadorespecial; ?></span><span id="id_read_off_operadorespecial" class="css_read_off_operadorespecial" style="white-space: nowrap;<?php echo $sStyleReadInp_operadorespecial; ?>">
 <input class="sc-js-input scFormObjectOdd css_operadorespecial_obj" style="" id="id_sc_field_operadorespecial" type=text name="operadorespecial" value="<?php echo $this->form_encode_input($operadorespecial) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operadorespecial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operadorespecial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-27", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-28", "", "");?>
 
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
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-29", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-30", "", "");?>
 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_cooperador_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_cooperador_mob");
 parent.scAjaxDetailHeight("form_cooperador_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_cooperador_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_cooperador_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['sc_modal'])
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
		if ($("#sc_b_new_t.sc-unique-btn-15").length && $("#sc_b_new_t.sc-unique-btn-15").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-16").length && $("#sc_b_ins_t.sc-unique-btn-16").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-17").length && $("#sc_b_sai_t.sc-unique-btn-17").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-18").length && $("#sc_b_upd_t.sc-unique-btn-18").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-5").length && $("#sc_b_del_t.sc-unique-btn-5").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
		if ($("#sc_b_del_t.sc-unique-btn-19").length && $("#sc_b_del_t.sc-unique-btn-19").is(":visible")) {
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
		if ($("#sc_b_sai_t.sc-unique-btn-22").length && $("#sc_b_sai_t.sc-unique-btn-22").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-23").length && $("#sc_b_sai_t.sc-unique-btn-23").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-24").length && $("#sc_b_sai_t.sc-unique-btn-24").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-25").length && $("#sc_b_sai_t.sc-unique-btn-25").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-26").length && $("#sc_b_sai_t.sc-unique-btn-26").is(":visible")) {
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
		if ($("#sc_b_ini_b.sc-unique-btn-27").length && $("#sc_b_ini_b.sc-unique-btn-27").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-12").length && $("#sc_b_ret_b.sc-unique-btn-12").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-28").length && $("#sc_b_ret_b.sc-unique-btn-28").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-13").length && $("#sc_b_avc_b.sc-unique-btn-13").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-29").length && $("#sc_b_avc_b.sc-unique-btn-29").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-14").length && $("#sc_b_fim_b.sc-unique-btn-14").is(":visible")) {
			nm_move ('final');
			 return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-30").length && $("#sc_b_fim_b.sc-unique-btn-30").is(":visible")) {
			nm_move ('final');
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-20").length && $("#sys_separator.sc-unique-btn-20").is(":visible")) {
			return false;
			 return;
		}
	}
	function scBtnFn_sys_format_copy() {
		if ($("#sc_b_clone_t.sc-unique-btn-21").length && $("#sc_b_clone_t.sc-unique-btn-21").is(":visible")) {
			nm_move ('clone');
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_cooperador_mob']['buttonStatus'] = $this->nmgp_botoes;
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
