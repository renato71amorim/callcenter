<?php
//
class form_vicidial_list_auditoria_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'navSummary'        => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $lead_id;
   var $entry_date;
   var $entry_date_hora;
   var $modify_date;
   var $modify_date_hora;
   var $status;
   var $status_1;
   var $user;
   var $vendor_lead_code;
   var $vendor_lead_code_1;
   var $source_id;
   var $list_id;
   var $gmt_offset_now;
   var $called_since_last_reset;
   var $phone_code;
   var $phone_number;
   var $title;
   var $title_1;
   var $first_name;
   var $middle_initial;
   var $last_name;
   var $address1;
   var $address2;
   var $address3;
   var $city;
   var $state;
   var $province;
   var $postal_code;
   var $country_code;
   var $country_code_1;
   var $gender;
   var $gender_1;
   var $date_of_birth;
   var $alt_phone;
   var $email;
   var $security_phrase;
   var $comments;
   var $called_count;
   var $last_local_call_time;
   var $last_local_call_time_hora;
   var $rank;
   var $owner;
   var $owner_1;
   var $entry_list_id;
   var $telefone;
   var $celular;
   var $whatsapp;
   var $sc_field_0;
   var $ouvir;
   var $audio;
   var $sc_field_1;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['address1']))
          {
              $this->address1 = $this->NM_ajax_info['param']['address1'];
          }
          if (isset($this->NM_ajax_info['param']['address2']))
          {
              $this->address2 = $this->NM_ajax_info['param']['address2'];
          }
          if (isset($this->NM_ajax_info['param']['address3']))
          {
              $this->address3 = $this->NM_ajax_info['param']['address3'];
          }
          if (isset($this->NM_ajax_info['param']['alt_phone']))
          {
              $this->alt_phone = $this->NM_ajax_info['param']['alt_phone'];
          }
          if (isset($this->NM_ajax_info['param']['city']))
          {
              $this->city = $this->NM_ajax_info['param']['city'];
          }
          if (isset($this->NM_ajax_info['param']['comments']))
          {
              $this->comments = $this->NM_ajax_info['param']['comments'];
          }
          if (isset($this->NM_ajax_info['param']['country_code']))
          {
              $this->country_code = $this->NM_ajax_info['param']['country_code'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['date_of_birth']))
          {
              $this->date_of_birth = $this->NM_ajax_info['param']['date_of_birth'];
          }
          if (isset($this->NM_ajax_info['param']['email']))
          {
              $this->email = $this->NM_ajax_info['param']['email'];
          }
          if (isset($this->NM_ajax_info['param']['first_name']))
          {
              $this->first_name = $this->NM_ajax_info['param']['first_name'];
          }
          if (isset($this->NM_ajax_info['param']['gender']))
          {
              $this->gender = $this->NM_ajax_info['param']['gender'];
          }
          if (isset($this->NM_ajax_info['param']['lead_id']))
          {
              $this->lead_id = $this->NM_ajax_info['param']['lead_id'];
          }
          if (isset($this->NM_ajax_info['param']['middle_initial']))
          {
              $this->middle_initial = $this->NM_ajax_info['param']['middle_initial'];
          }
          if (isset($this->NM_ajax_info['param']['modify_date']))
          {
              $this->modify_date = $this->NM_ajax_info['param']['modify_date'];
          }
          if (isset($this->NM_ajax_info['param']['modify_date_hora']))
          {
              $this->modify_date_hora = $this->NM_ajax_info['param']['modify_date_hora'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['owner']))
          {
              $this->owner = $this->NM_ajax_info['param']['owner'];
          }
          if (isset($this->NM_ajax_info['param']['phone_number']))
          {
              $this->phone_number = $this->NM_ajax_info['param']['phone_number'];
          }
          if (isset($this->NM_ajax_info['param']['postal_code']))
          {
              $this->postal_code = $this->NM_ajax_info['param']['postal_code'];
          }
          if (isset($this->NM_ajax_info['param']['province']))
          {
              $this->province = $this->NM_ajax_info['param']['province'];
          }
          if (isset($this->NM_ajax_info['param']['sc_field_1']))
          {
              $this->sc_field_1 = $this->NM_ajax_info['param']['sc_field_1'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['source_id']))
          {
              $this->source_id = $this->NM_ajax_info['param']['source_id'];
          }
          if (isset($this->NM_ajax_info['param']['state']))
          {
              $this->state = $this->NM_ajax_info['param']['state'];
          }
          if (isset($this->NM_ajax_info['param']['status']))
          {
              $this->status = $this->NM_ajax_info['param']['status'];
          }
          if (isset($this->NM_ajax_info['param']['title']))
          {
              $this->title = $this->NM_ajax_info['param']['title'];
          }
          if (isset($this->NM_ajax_info['param']['user']))
          {
              $this->user = $this->NM_ajax_info['param']['user'];
          }
          if (isset($this->NM_ajax_info['param']['vendor_lead_code']))
          {
              $this->vendor_lead_code = $this->NM_ajax_info['param']['vendor_lead_code'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      $this->sc_conv_var['e-mail'] = "sc_field_0";
      $this->sc_conv_var['aúdios'] = "sc_field_1";
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_vicidial_list_auditoria($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_vicidial_list_auditoria_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_vicidial_list_auditoria']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_vicidial_list_auditoria']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_vicidial_list_auditoria'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_vicidial_list_auditoria']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_vicidial_list_auditoria']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_vicidial_list_auditoria') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_vicidial_list_auditoria']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - vicidial_list";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_vicidial_list_auditoria")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';



      $_SESSION['scriptcase']['error_icon']['form_vicidial_list_auditoria']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_vicidial_list_auditoria'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_list_auditoria']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_vicidial_list_auditoria'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_vicidial_list_auditoria'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_form'];
          if (!isset($this->lead_id)){$this->lead_id = $this->nmgp_dados_form['lead_id'];} 
          if (!isset($this->entry_date)){$this->entry_date = $this->nmgp_dados_form['entry_date'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['modify_date'] != "null"){
              $aDtParts = explode(' ', $this->nmgp_dados_form['modify_date']);
              $this->modify_date = $this->nm_conv_data_db($aDtParts[0], 'yyyy-mm-dd', $this->field_config['modify_date']['date_format']);
              $this->modify_date_hora = $aDtParts[1];
              $aDtParts = explode(';', $this->modify_date);
              $this->modify_date = $aDtParts[0];
          }
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['user'] != "null"){$this->user = $this->nmgp_dados_form['user'];} 
          if (!isset($this->list_id)){$this->list_id = $this->nmgp_dados_form['list_id'];} 
          if (!isset($this->gmt_offset_now)){$this->gmt_offset_now = $this->nmgp_dados_form['gmt_offset_now'];} 
          if (!isset($this->called_since_last_reset)){$this->called_since_last_reset = $this->nmgp_dados_form['called_since_last_reset'];} 
          if (!isset($this->phone_code)){$this->phone_code = $this->nmgp_dados_form['phone_code'];} 
          if (!isset($this->last_name)){$this->last_name = $this->nmgp_dados_form['last_name'];} 
          if (!isset($this->security_phrase)){$this->security_phrase = $this->nmgp_dados_form['security_phrase'];} 
          if (!isset($this->called_count)){$this->called_count = $this->nmgp_dados_form['called_count'];} 
          if (!isset($this->last_local_call_time)){$this->last_local_call_time = $this->nmgp_dados_form['last_local_call_time'];} 
          if (!isset($this->rank)){$this->rank = $this->nmgp_dados_form['rank'];} 
          if (!isset($this->entry_list_id)){$this->entry_list_id = $this->nmgp_dados_form['entry_list_id'];} 
          if (!isset($this->telefone)){$this->telefone = $this->nmgp_dados_form['telefone'];} 
          if (!isset($this->celular)){$this->celular = $this->nmgp_dados_form['celular'];} 
          if (!isset($this->whatsapp)){$this->whatsapp = $this->nmgp_dados_form['whatsapp'];} 
          if (!isset($this->sc_field_0)){$this->sc_field_0 = $this->nmgp_dados_form['sc_field_0'];} 
          if (!isset($this->ouvir)){$this->ouvir = $this->nmgp_dados_form['ouvir'];} 
          if (!isset($this->audio)){$this->audio = $this->nmgp_dados_form['audio'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_vicidial_list_auditoria", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_auditoria/form_vicidial_list_auditoria_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_vicidial_list_auditoria_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_vicidial_list_auditoria_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_vicidial_list_auditoria_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_auditoria/form_vicidial_list_auditoria_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_vicidial_list_auditoria_erro.class.php"); 
      }
      $this->Erro      = new form_vicidial_list_auditoria_erro();
      $this->Erro->Ini = $this->Ini;
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao']))
         { 
             if ($this->lead_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_list_auditoria']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      if ($this->nmgp_opcao == "excluir")
      {
          $GLOBALS['script_case_init'] = $this->Ini->sc_page;
      }
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
      if (isset($this->status)) { $this->nm_limpa_alfa($this->status); }
      if (isset($this->user)) { $this->nm_limpa_alfa($this->user); }
      if (isset($this->vendor_lead_code)) { $this->nm_limpa_alfa($this->vendor_lead_code); }
      if (isset($this->source_id)) { $this->nm_limpa_alfa($this->source_id); }
      if (isset($this->phone_number)) { $this->nm_limpa_alfa($this->phone_number); }
      if (isset($this->title)) { $this->nm_limpa_alfa($this->title); }
      if (isset($this->first_name)) { $this->nm_limpa_alfa($this->first_name); }
      if (isset($this->middle_initial)) { $this->nm_limpa_alfa($this->middle_initial); }
      if (isset($this->address1)) { $this->nm_limpa_alfa($this->address1); }
      if (isset($this->address2)) { $this->nm_limpa_alfa($this->address2); }
      if (isset($this->address3)) { $this->nm_limpa_alfa($this->address3); }
      if (isset($this->city)) { $this->nm_limpa_alfa($this->city); }
      if (isset($this->state)) { $this->nm_limpa_alfa($this->state); }
      if (isset($this->province)) { $this->nm_limpa_alfa($this->province); }
      if (isset($this->postal_code)) { $this->nm_limpa_alfa($this->postal_code); }
      if (isset($this->country_code)) { $this->nm_limpa_alfa($this->country_code); }
      if (isset($this->alt_phone)) { $this->nm_limpa_alfa($this->alt_phone); }
      if (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
      if (isset($this->comments)) { $this->nm_limpa_alfa($this->comments); }
      if (isset($this->owner)) { $this->nm_limpa_alfa($this->owner); }
      if (isset($this->sc_field_1)) { $this->nm_limpa_alfa($this->sc_field_1); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- modify_date
      $this->field_config['modify_date']                 = array();
      $this->field_config['modify_date']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['modify_date']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['modify_date']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['modify_date']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'modify_date');
      //-- province
      $this->field_config['province']               = array();
      $this->field_config['province']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['province']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['province']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['province']['symbol_mon'] = '';
      $this->field_config['province']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['province']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- date_of_birth
      $this->field_config['date_of_birth']                 = array();
      $this->field_config['date_of_birth']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['date_of_birth']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['date_of_birth']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'date_of_birth');
      //-- lead_id
      $this->field_config['lead_id']               = array();
      $this->field_config['lead_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['lead_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['lead_id']['symbol_dec'] = '';
      $this->field_config['lead_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['lead_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- entry_date
      $this->field_config['entry_date']                 = array();
      $this->field_config['entry_date']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['entry_date']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['entry_date']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['entry_date']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'entry_date');
      //-- list_id
      $this->field_config['list_id']               = array();
      $this->field_config['list_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['list_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['list_id']['symbol_dec'] = '';
      $this->field_config['list_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['list_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- gmt_offset_now
      $this->field_config['gmt_offset_now']               = array();
      $this->field_config['gmt_offset_now']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['gmt_offset_now']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['gmt_offset_now']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['gmt_offset_now']['symbol_mon'] = '';
      $this->field_config['gmt_offset_now']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['gmt_offset_now']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- called_count
      $this->field_config['called_count']               = array();
      $this->field_config['called_count']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['called_count']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['called_count']['symbol_dec'] = '';
      $this->field_config['called_count']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['called_count']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- last_local_call_time
      $this->field_config['last_local_call_time']                 = array();
      $this->field_config['last_local_call_time']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['last_local_call_time']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['last_local_call_time']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['last_local_call_time']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'last_local_call_time');
      //-- rank
      $this->field_config['rank']               = array();
      $this->field_config['rank']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['rank']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['rank']['symbol_dec'] = '';
      $this->field_config['rank']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['rank']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- entry_list_id
      $this->field_config['entry_list_id']               = array();
      $this->field_config['entry_list_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['entry_list_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['entry_list_id']['symbol_dec'] = '';
      $this->field_config['entry_list_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['entry_list_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Gera_log_access'] = false;
      }

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
         $this->audio = "<a href=\"http://192.168.0.200/RECORDINGS/MP3/27999257852_agent008-all.mp3\">ouvir</a>";
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_comments' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'comments');
          }
          if ('validate_modify_date' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'modify_date');
          }
          if ('validate_user' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'user');
          }
          if ('validate_phone_number' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'phone_number');
          }
          if ('validate_alt_phone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'alt_phone');
          }
          if ('validate_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'email');
          }
          if ('validate_sc_field_1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sc_field_1');
          }
          if ('validate_status' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'status');
          }
          if ('validate_gender' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'gender');
          }
          if ('validate_first_name' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'first_name');
          }
          if ('validate_postal_code' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'postal_code');
          }
          if ('validate_address1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'address1');
          }
          if ('validate_middle_initial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'middle_initial');
          }
          if ('validate_address2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'address2');
          }
          if ('validate_address3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'address3');
          }
          if ('validate_source_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'source_id');
          }
          if ('validate_city' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'city');
          }
          if ('validate_state' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'state');
          }
          if ('validate_country_code' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'country_code');
          }
          if ('validate_owner' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'owner');
          }
          if ('validate_vendor_lead_code' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'vendor_lead_code');
          }
          if ('validate_province' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'province');
          }
          if ('validate_date_of_birth' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'date_of_birth');
          }
          if ('validate_title' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'title');
          }
          form_vicidial_list_auditoria_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select']['modify_date']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->modify_date = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select']['modify_date'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select']['user']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->user = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select']['user'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_vicidial_list_auditoria_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->user = sc_strip_script($this->user, $_SESSION['scriptcase']['charset']);
          $this->user = sc_strip_tags($this->user, $_SESSION['scriptcase']['charset']);
          $this->source_id = sc_strip_script($this->source_id, $_SESSION['scriptcase']['charset']);
          $this->source_id = sc_strip_tags($this->source_id, $_SESSION['scriptcase']['charset']);
          $this->phone_number = sc_strip_script($this->phone_number, $_SESSION['scriptcase']['charset']);
          $this->phone_number = sc_strip_tags($this->phone_number, $_SESSION['scriptcase']['charset']);
          $this->first_name = sc_strip_script($this->first_name, $_SESSION['scriptcase']['charset']);
          $this->first_name = sc_strip_tags($this->first_name, $_SESSION['scriptcase']['charset']);
          $this->middle_initial = sc_strip_script($this->middle_initial, $_SESSION['scriptcase']['charset']);
          $this->middle_initial = sc_strip_tags($this->middle_initial, $_SESSION['scriptcase']['charset']);
          $this->address1 = sc_strip_script($this->address1, $_SESSION['scriptcase']['charset']);
          $this->address1 = sc_strip_tags($this->address1, $_SESSION['scriptcase']['charset']);
          $this->address2 = sc_strip_script($this->address2, $_SESSION['scriptcase']['charset']);
          $this->address2 = sc_strip_tags($this->address2, $_SESSION['scriptcase']['charset']);
          $this->address3 = sc_strip_script($this->address3, $_SESSION['scriptcase']['charset']);
          $this->address3 = sc_strip_tags($this->address3, $_SESSION['scriptcase']['charset']);
          $this->city = sc_strip_script($this->city, $_SESSION['scriptcase']['charset']);
          $this->city = sc_strip_tags($this->city, $_SESSION['scriptcase']['charset']);
          $this->state = sc_strip_script($this->state, $_SESSION['scriptcase']['charset']);
          $this->state = sc_strip_tags($this->state, $_SESSION['scriptcase']['charset']);
          $this->alt_phone = sc_strip_script($this->alt_phone, $_SESSION['scriptcase']['charset']);
          $this->alt_phone = sc_strip_tags($this->alt_phone, $_SESSION['scriptcase']['charset']);
          $this->comments = sc_strip_script($this->comments, $_SESSION['scriptcase']['charset']);
          $this->comments = sc_strip_tags($this->comments, $_SESSION['scriptcase']['charset']);
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_vicidial_list_auditoria']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_vicidial_list_auditoria_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, 4);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_vicidial_list_auditoria_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_vicidial_list_auditoria_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_vicidial_list_auditoria.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
           {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           if (!empty($str_zip)) {
               exec($str_zip);
           }
           // ----- ZIP log
           $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
           if ($fp)
           {
               @fwrite($fp, $str_zip . "\r\n\r\n");
               @fclose($fp);
           }
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               if (!empty($str_zip)) {
                   exec($str_zip);
               }
               // ----- ZIP log
               $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
               if ($fp)
               {
                   @fwrite($fp, $str_zip . "\r\n\r\n");
                   @fclose($fp);
               }
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - vicidial_list") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/usr__NM__ico__NM__iconfinder_voicecall_6235.png">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="form_vicidial_list_auditoria_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_vicidial_list_auditoria"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="./" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
       if ($this->SC_log_atv)
       {
           $this->NM_gera_log_output();
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_gera_log_insert($orig="Scriptcase", $evento="", $texto="")
   {
       $delim  = "'";
       $delim1 = "'";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['SC_sep_date1'];
       }
       $dt  = $delim . date('Y-m-d H:i:s') . $delim1;
       $usr = isset($_SESSION['usr_login']) ? $_SESSION['usr_login'] : "";
       if (in_array(strtolower($this->Ini->nm_con_unicep['tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sc_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Ini->nm_db_unicep->qstr($usr) . ", 'form_vicidial_list_auditoria', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Ini->nm_db_unicep->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Ini->nm_db_unicep->qstr($usr) . ", 'form_vicidial_list_auditoria', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Ini->nm_db_unicep->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Ini->nm_db_unicep->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Ini->nm_db_unicep->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_vicidial_list_auditoria_pack_ajax_response();
               exit; 
           }
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
           $this->Ini->nm_db_unicep->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'comments':
               return "Código";
               break;
           case 'modify_date':
               return "Atualizado";
               break;
           case 'user':
               return "Usuário";
               break;
           case 'phone_number':
               return "Telefone Principal";
               break;
           case 'alt_phone':
               return "Telefone Celular";
               break;
           case 'email':
               return "Email";
               break;
           case 'sc_field_1':
               return "Aúdios";
               break;
           case 'status':
               return "Status";
               break;
           case 'gender':
               return "Sexo";
               break;
           case 'first_name':
               return "Nome";
               break;
           case 'postal_code':
               return "CEP";
               break;
           case 'address1':
               return "Endereço";
               break;
           case 'middle_initial':
               return "Número";
               break;
           case 'address2':
               return "Complemento";
               break;
           case 'address3':
               return "Observação";
               break;
           case 'source_id':
               return "Bairro";
               break;
           case 'city':
               return "Cidade";
               break;
           case 'state':
               return "UF";
               break;
           case 'country_code':
               return "Setor";
               break;
           case 'owner':
               return "Operador";
               break;
           case 'vendor_lead_code':
               return "Auditado";
               break;
           case 'province':
               return "Valor da doação";
               break;
           case 'date_of_birth':
               return "Data de Vencto";
               break;
           case 'title':
               return "Mensal?";
               break;
           case 'lead_id':
               return "Lead Id";
               break;
           case 'entry_date':
               return "Entry Date";
               break;
           case 'list_id':
               return "List Id";
               break;
           case 'gmt_offset_now':
               return "Gmt Offset Now";
               break;
           case 'called_since_last_reset':
               return "Called Since Last Reset";
               break;
           case 'phone_code':
               return "Phone Code";
               break;
           case 'last_name':
               return "Doador";
               break;
           case 'security_phrase':
               return "Security Phrase";
               break;
           case 'called_count':
               return "Called Count";
               break;
           case 'last_local_call_time':
               return "Last Local Call Time";
               break;
           case 'rank':
               return "Rank";
               break;
           case 'entry_list_id':
               return "Entry List Id";
               break;
           case 'telefone':
               return "Telefone";
               break;
           case 'celular':
               return "Celular";
               break;
           case 'whatsapp':
               return "WhatsApp";
               break;
           case 'sc_field_0':
               return "E-mail";
               break;
           case 'ouvir':
               return "Ouvir";
               break;
           case 'audio':
               return "Áudios";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_vicidial_list_auditoria']) || !is_array($this->NM_ajax_info['errList']['geral_form_vicidial_list_auditoria']))
              {
                  $this->NM_ajax_info['errList']['geral_form_vicidial_list_auditoria'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_vicidial_list_auditoria'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'comments' == $filtro)
        $this->ValidateField_comments($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'modify_date' == $filtro)
        $this->ValidateField_modify_date($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'user' == $filtro)
        $this->ValidateField_user($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'phone_number' == $filtro)
        $this->ValidateField_phone_number($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'alt_phone' == $filtro)
        $this->ValidateField_alt_phone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'email' == $filtro)
        $this->ValidateField_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sc_field_1' == $filtro)
        $this->ValidateField_sc_field_1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'status' == $filtro)
        $this->ValidateField_status($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'gender' == $filtro)
        $this->ValidateField_gender($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'first_name' == $filtro)
        $this->ValidateField_first_name($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'postal_code' == $filtro)
        $this->ValidateField_postal_code($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'address1' == $filtro)
        $this->ValidateField_address1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'middle_initial' == $filtro)
        $this->ValidateField_middle_initial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'address2' == $filtro)
        $this->ValidateField_address2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'address3' == $filtro)
        $this->ValidateField_address3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'source_id' == $filtro)
        $this->ValidateField_source_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'city' == $filtro)
        $this->ValidateField_city($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'state' == $filtro)
        $this->ValidateField_state($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'country_code' == $filtro)
        $this->ValidateField_country_code($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'owner' == $filtro)
        $this->ValidateField_owner($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'vendor_lead_code' == $filtro)
        $this->ValidateField_vendor_lead_code($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'province' == $filtro)
        $this->ValidateField_province($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'date_of_birth' == $filtro)
        $this->ValidateField_date_of_birth($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'title' == $filtro)
        $this->ValidateField_title($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
          $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_comments(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->comments) > 255) 
          { 
              $hasError = true;
              $Campos_Crit .= "Código " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['comments']))
              {
                  $Campos_Erros['comments'] = array();
              }
              $Campos_Erros['comments'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['comments']) || !is_array($this->NM_ajax_info['errList']['comments']))
              {
                  $this->NM_ajax_info['errList']['comments'] = array();
              }
              $this->NM_ajax_info['errList']['comments'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'comments';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_comments

    function ValidateField_modify_date(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->modify_date, $this->field_config['modify_date']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['modify_date']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['modify_date']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['modify_date']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['modify_date']['date_sep']) ; 
          if (trim($this->modify_date) != "")  
          { 
              if ($teste_validade->Data($this->modify_date, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Atualizado; " ; 
                  if (!isset($Campos_Erros['modify_date']))
                  {
                      $Campos_Erros['modify_date'] = array();
                  }
                  $Campos_Erros['modify_date'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['modify_date']) || !is_array($this->NM_ajax_info['errList']['modify_date']))
                  {
                      $this->NM_ajax_info['errList']['modify_date'] = array();
                  }
                  $this->NM_ajax_info['errList']['modify_date'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['modify_date']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'modify_date';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
      nm_limpa_hora($this->modify_date_hora, $this->field_config['modify_date_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['modify_date_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['modify_date_hora']['time_sep']) ; 
          if (trim($this->modify_date_hora) != "")  
          { 
              if ($teste_validade->Hora($this->modify_date_hora, $Format_Hora) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Atualizado; " ; 
                  if (!isset($Campos_Erros['modify_date_hora']))
                  {
                      $Campos_Erros['modify_date_hora'] = array();
                  }
                  $Campos_Erros['modify_date_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['modify_date']) || !is_array($this->NM_ajax_info['errList']['modify_date']))
                  {
                      $this->NM_ajax_info['errList']['modify_date'] = array();
                  }
                  $this->NM_ajax_info['errList']['modify_date'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'modify_date_hora';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_modify_date_hora

    function ValidateField_user(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->user) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "Usuário " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['user']))
              {
                  $Campos_Erros['user'] = array();
              }
              $Campos_Erros['user'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['user']) || !is_array($this->NM_ajax_info['errList']['user']))
              {
                  $this->NM_ajax_info['errList']['user'] = array();
              }
              $this->NM_ajax_info['errList']['user'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'user';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_user

    function ValidateField_phone_number(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      $this->nm_tira_mask($this->phone_number, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->phone_number) > 18) 
          { 
              $hasError = true;
              $Campos_Crit .= "Telefone Principal " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 18 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['phone_number']))
              {
                  $Campos_Erros['phone_number'] = array();
              }
              $Campos_Erros['phone_number'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 18 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['phone_number']) || !is_array($this->NM_ajax_info['errList']['phone_number']))
              {
                  $this->NM_ajax_info['errList']['phone_number'] = array();
              }
              $this->NM_ajax_info['errList']['phone_number'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 18 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'phone_number';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_phone_number

    function ValidateField_alt_phone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      $this->nm_tira_mask($this->alt_phone, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->alt_phone) > 12) 
          { 
              $hasError = true;
              $Campos_Crit .= "Telefone Celular " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 12 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['alt_phone']))
              {
                  $Campos_Erros['alt_phone'] = array();
              }
              $Campos_Erros['alt_phone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 12 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['alt_phone']) || !is_array($this->NM_ajax_info['errList']['alt_phone']))
              {
                  $this->NM_ajax_info['errList']['alt_phone'] = array();
              }
              $this->NM_ajax_info['errList']['alt_phone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 12 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'alt_phone';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_alt_phone

    function ValidateField_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->email) != "")  
          { 
              if ($teste_validade->Email($this->email) == false)  
              { 
                  $hasError = true;
                      $Campos_Crit .= "Email; " ; 
                  if (!isset($Campos_Erros['email']))
                  {
                      $Campos_Erros['email'] = array();
                  }
                  $Campos_Erros['email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['email']) || !is_array($this->NM_ajax_info['errList']['email']))
                      {
                          $this->NM_ajax_info['errList']['email'] = array();
                      }
                      $this->NM_ajax_info['errList']['email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'email';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_email

    function ValidateField_sc_field_1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->sc_field_1) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'sc_field_1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_sc_field_1

    function ValidateField_status(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->status) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status']) && !in_array($this->status, $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['status']))
                   {
                       $Campos_Erros['status'] = array();
                   }
                   $Campos_Erros['status'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['status']) || !is_array($this->NM_ajax_info['errList']['status']))
                   {
                       $this->NM_ajax_info['errList']['status'] = array();
                   }
                   $this->NM_ajax_info['errList']['status'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'status';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_status

    function ValidateField_gender(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->gender == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'gender';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_gender

    function ValidateField_first_name(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->first_name) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Nome " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['first_name']))
              {
                  $Campos_Erros['first_name'] = array();
              }
              $Campos_Erros['first_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['first_name']) || !is_array($this->NM_ajax_info['errList']['first_name']))
              {
                  $this->NM_ajax_info['errList']['first_name'] = array();
              }
              $this->NM_ajax_info['errList']['first_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'first_name';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_first_name

    function ValidateField_postal_code(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_cep($this->postal_code) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->postal_code) != "")  
          { 
              if (strlen($this->postal_code) != 8  || (int)$this->postal_code == 0)
              { 
                  $hasError = true;
                  $Campos_Crit .= "CEP; " ; 
                  if (!isset($Campos_Erros['postal_code']))
                  {
                      $Campos_Erros['postal_code'] = array();
                  }
                  $Campos_Erros['postal_code'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['postal_code']) || !is_array($this->NM_ajax_info['errList']['postal_code']))
                  {
                      $this->NM_ajax_info['errList']['postal_code'] = array();
                  }
                  $this->NM_ajax_info['errList']['postal_code'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'postal_code';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_postal_code

    function ValidateField_address1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->address1) > 100) 
          { 
              $hasError = true;
              $Campos_Crit .= "Endereço " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['address1']))
              {
                  $Campos_Erros['address1'] = array();
              }
              $Campos_Erros['address1'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['address1']) || !is_array($this->NM_ajax_info['errList']['address1']))
              {
                  $this->NM_ajax_info['errList']['address1'] = array();
              }
              $this->NM_ajax_info['errList']['address1'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'address1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_address1

    function ValidateField_middle_initial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->middle_initial) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Número " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['middle_initial']))
              {
                  $Campos_Erros['middle_initial'] = array();
              }
              $Campos_Erros['middle_initial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['middle_initial']) || !is_array($this->NM_ajax_info['errList']['middle_initial']))
              {
                  $this->NM_ajax_info['errList']['middle_initial'] = array();
              }
              $this->NM_ajax_info['errList']['middle_initial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'middle_initial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_middle_initial

    function ValidateField_address2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->address2) > 100) 
          { 
              $hasError = true;
              $Campos_Crit .= "Complemento " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['address2']))
              {
                  $Campos_Erros['address2'] = array();
              }
              $Campos_Erros['address2'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['address2']) || !is_array($this->NM_ajax_info['errList']['address2']))
              {
                  $this->NM_ajax_info['errList']['address2'] = array();
              }
              $this->NM_ajax_info['errList']['address2'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'address2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_address2

    function ValidateField_address3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->address3) > 100) 
          { 
              $hasError = true;
              $Campos_Crit .= "Observação " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['address3']))
              {
                  $Campos_Erros['address3'] = array();
              }
              $Campos_Erros['address3'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['address3']) || !is_array($this->NM_ajax_info['errList']['address3']))
              {
                  $this->NM_ajax_info['errList']['address3'] = array();
              }
              $this->NM_ajax_info['errList']['address3'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'address3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_address3

    function ValidateField_source_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->source_id) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "Bairro " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['source_id']))
              {
                  $Campos_Erros['source_id'] = array();
              }
              $Campos_Erros['source_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['source_id']) || !is_array($this->NM_ajax_info['errList']['source_id']))
              {
                  $this->NM_ajax_info['errList']['source_id'] = array();
              }
              $this->NM_ajax_info['errList']['source_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'source_id';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_source_id

    function ValidateField_city(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->city) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "Cidade " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['city']))
              {
                  $Campos_Erros['city'] = array();
              }
              $Campos_Erros['city'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['city']) || !is_array($this->NM_ajax_info['errList']['city']))
              {
                  $this->NM_ajax_info['errList']['city'] = array();
              }
              $this->NM_ajax_info['errList']['city'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'city';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_city

    function ValidateField_state(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->state) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "UF " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['state']))
              {
                  $Campos_Erros['state'] = array();
              }
              $Campos_Erros['state'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['state']) || !is_array($this->NM_ajax_info['errList']['state']))
              {
                  $this->NM_ajax_info['errList']['state'] = array();
              }
              $this->NM_ajax_info['errList']['state'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'state';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_state

    function ValidateField_country_code(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->country_code) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code']) && !in_array($this->country_code, $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['country_code']))
                   {
                       $Campos_Erros['country_code'] = array();
                   }
                   $Campos_Erros['country_code'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['country_code']) || !is_array($this->NM_ajax_info['errList']['country_code']))
                   {
                       $this->NM_ajax_info['errList']['country_code'] = array();
                   }
                   $this->NM_ajax_info['errList']['country_code'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'country_code';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_country_code

    function ValidateField_owner(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->owner) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner']) && !in_array($this->owner, $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['owner']))
                   {
                       $Campos_Erros['owner'] = array();
                   }
                   $Campos_Erros['owner'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['owner']) || !is_array($this->NM_ajax_info['errList']['owner']))
                   {
                       $this->NM_ajax_info['errList']['owner'] = array();
                   }
                   $this->NM_ajax_info['errList']['owner'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'owner';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_owner

    function ValidateField_vendor_lead_code(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->vendor_lead_code == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'vendor_lead_code';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_vendor_lead_code

    function ValidateField_province(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (!empty($this->field_config['province']['symbol_dec']))
      {
          $this->sc_remove_currency($this->province, $this->field_config['province']['symbol_dec'], $this->field_config['province']['symbol_grp'], $this->field_config['province']['symbol_mon']); 
          nm_limpa_valor($this->province, $this->field_config['province']['symbol_dec'], $this->field_config['province']['symbol_grp']) ; 
          if ('.' == substr($this->province, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->province, 1)))
              {
                  $this->province = '';
              }
              else
              {
                  $this->province = '0' . $this->province;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->province != '')  
          { 
              $iTestSize = 7;
              if (strlen($this->province) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Valor da doação: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['province']))
                  {
                      $Campos_Erros['province'] = array();
                  }
                  $Campos_Erros['province'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['province']) || !is_array($this->NM_ajax_info['errList']['province']))
                  {
                      $this->NM_ajax_info['errList']['province'] = array();
                  }
                  $this->NM_ajax_info['errList']['province'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->province, 4, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Valor da doação; " ; 
                  if (!isset($Campos_Erros['province']))
                  {
                      $Campos_Erros['province'] = array();
                  }
                  $Campos_Erros['province'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['province']) || !is_array($this->NM_ajax_info['errList']['province']))
                  {
                      $this->NM_ajax_info['errList']['province'] = array();
                  }
                  $this->NM_ajax_info['errList']['province'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'province';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_province

    function ValidateField_date_of_birth(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->date_of_birth, $this->field_config['date_of_birth']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['date_of_birth']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['date_of_birth']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['date_of_birth']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['date_of_birth']['date_sep']) ; 
          if (trim($this->date_of_birth) != "")  
          { 
              if ($teste_validade->Data($this->date_of_birth, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Data de Vencto; " ; 
                  if (!isset($Campos_Erros['date_of_birth']))
                  {
                      $Campos_Erros['date_of_birth'] = array();
                  }
                  $Campos_Erros['date_of_birth'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['date_of_birth']) || !is_array($this->NM_ajax_info['errList']['date_of_birth']))
                  {
                      $this->NM_ajax_info['errList']['date_of_birth'] = array();
                  }
                  $this->NM_ajax_info['errList']['date_of_birth'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['date_of_birth']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'date_of_birth';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_date_of_birth

    function ValidateField_title(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->title == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'title';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_title

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['comments'] = $this->comments;
    $this->nmgp_dados_form['modify_date'] = $this->modify_date;
    $this->nmgp_dados_form['user'] = $this->user;
    $this->nmgp_dados_form['phone_number'] = $this->phone_number;
    $this->nmgp_dados_form['alt_phone'] = $this->alt_phone;
    $this->nmgp_dados_form['email'] = $this->email;
    $this->nmgp_dados_form['sc_field_1'] = $this->sc_field_1;
    $this->nmgp_dados_form['status'] = $this->status;
    $this->nmgp_dados_form['gender'] = $this->gender;
    $this->nmgp_dados_form['first_name'] = $this->first_name;
    $this->nmgp_dados_form['postal_code'] = $this->postal_code;
    $this->nmgp_dados_form['address1'] = $this->address1;
    $this->nmgp_dados_form['middle_initial'] = $this->middle_initial;
    $this->nmgp_dados_form['address2'] = $this->address2;
    $this->nmgp_dados_form['address3'] = $this->address3;
    $this->nmgp_dados_form['source_id'] = $this->source_id;
    $this->nmgp_dados_form['city'] = $this->city;
    $this->nmgp_dados_form['state'] = $this->state;
    $this->nmgp_dados_form['country_code'] = $this->country_code;
    $this->nmgp_dados_form['owner'] = $this->owner;
    $this->nmgp_dados_form['vendor_lead_code'] = $this->vendor_lead_code;
    $this->nmgp_dados_form['province'] = $this->province;
    $this->nmgp_dados_form['date_of_birth'] = (strlen(trim($this->date_of_birth)) > 19) ? str_replace(".", ":", $this->date_of_birth) : trim($this->date_of_birth);
    $this->nmgp_dados_form['title'] = $this->title;
    $this->nmgp_dados_form['lead_id'] = $this->lead_id;
    $this->nmgp_dados_form['entry_date'] = $this->entry_date;
    $this->nmgp_dados_form['list_id'] = $this->list_id;
    $this->nmgp_dados_form['gmt_offset_now'] = $this->gmt_offset_now;
    $this->nmgp_dados_form['called_since_last_reset'] = $this->called_since_last_reset;
    $this->nmgp_dados_form['phone_code'] = $this->phone_code;
    $this->nmgp_dados_form['last_name'] = $this->last_name;
    $this->nmgp_dados_form['security_phrase'] = $this->security_phrase;
    $this->nmgp_dados_form['called_count'] = $this->called_count;
    $this->nmgp_dados_form['last_local_call_time'] = $this->last_local_call_time;
    $this->nmgp_dados_form['rank'] = $this->rank;
    $this->nmgp_dados_form['entry_list_id'] = $this->entry_list_id;
    $this->nmgp_dados_form['telefone'] = $this->telefone;
    $this->nmgp_dados_form['celular'] = $this->celular;
    $this->nmgp_dados_form['whatsapp'] = $this->whatsapp;
    $this->nmgp_dados_form['sc_field_0'] = $this->sc_field_0;
    $this->nmgp_dados_form['ouvir'] = $this->ouvir;
    $this->nmgp_dados_form['audio'] = $this->audio;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['modify_date'] = $this->modify_date;
      nm_limpa_data($this->modify_date, $this->field_config['modify_date']['date_sep']) ; 
      nm_limpa_hora($this->modify_date_hora, $this->field_config['modify_date']['time_sep']) ; 
      $this->Before_unformat['phone_number'] = $this->phone_number;
      $this->nm_tira_mask($this->phone_number, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      $this->Before_unformat['alt_phone'] = $this->alt_phone;
      $this->nm_tira_mask($this->alt_phone, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      $this->Before_unformat['postal_code'] = $this->postal_code;
      nm_limpa_cep($this->postal_code) ; 
      $this->Before_unformat['province'] = $this->province;
      if (!empty($this->field_config['province']['symbol_dec']))
      {
         $this->sc_remove_currency($this->province, $this->field_config['province']['symbol_dec'], $this->field_config['province']['symbol_grp'], $this->field_config['province']['symbol_mon']);
         nm_limpa_valor($this->province, $this->field_config['province']['symbol_dec'], $this->field_config['province']['symbol_grp']);
      }
      $this->Before_unformat['date_of_birth'] = $this->date_of_birth;
      nm_limpa_data($this->date_of_birth, $this->field_config['date_of_birth']['date_sep']) ; 
      $this->Before_unformat['lead_id'] = $this->lead_id;
      nm_limpa_numero($this->lead_id, $this->field_config['lead_id']['symbol_grp']) ; 
      $this->Before_unformat['entry_date'] = $this->entry_date;
      nm_limpa_data($this->entry_date, $this->field_config['entry_date']['date_sep']) ; 
      nm_limpa_hora($this->entry_date_hora, $this->field_config['entry_date']['time_sep']) ; 
      $this->Before_unformat['list_id'] = $this->list_id;
      nm_limpa_numero($this->list_id, $this->field_config['list_id']['symbol_grp']) ; 
      $this->Before_unformat['gmt_offset_now'] = $this->gmt_offset_now;
      if (!empty($this->field_config['gmt_offset_now']['symbol_dec']))
      {
         $this->sc_remove_currency($this->gmt_offset_now, $this->field_config['gmt_offset_now']['symbol_dec'], $this->field_config['gmt_offset_now']['symbol_grp'], $this->field_config['gmt_offset_now']['symbol_mon']);
         nm_limpa_valor($this->gmt_offset_now, $this->field_config['gmt_offset_now']['symbol_dec'], $this->field_config['gmt_offset_now']['symbol_grp']);
      }
      $this->Before_unformat['called_count'] = $this->called_count;
      nm_limpa_numero($this->called_count, $this->field_config['called_count']['symbol_grp']) ; 
      $this->Before_unformat['last_local_call_time'] = $this->last_local_call_time;
      nm_limpa_data($this->last_local_call_time, $this->field_config['last_local_call_time']['date_sep']) ; 
      nm_limpa_hora($this->last_local_call_time_hora, $this->field_config['last_local_call_time']['time_sep']) ; 
      $this->Before_unformat['rank'] = $this->rank;
      nm_limpa_numero($this->rank, $this->field_config['rank']['symbol_grp']) ; 
      $this->Before_unformat['entry_list_id'] = $this->entry_list_id;
      nm_limpa_numero($this->entry_list_id, $this->field_config['entry_list_id']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "phone_number")
      {
          $this->nm_tira_mask($this->phone_number, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      }
      if ($Nome_Campo == "alt_phone")
      {
          $this->nm_tira_mask($this->alt_phone, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      }
      if ($Nome_Campo == "postal_code")
      {
          nm_limpa_cep($this->postal_code) ; 
      }
      if ($Nome_Campo == "province")
      {
          if (!empty($this->field_config['province']['symbol_dec']))
          {
             $this->sc_remove_currency($this->province, $this->field_config['province']['symbol_dec'], $this->field_config['province']['symbol_grp'], $this->field_config['province']['symbol_mon']);
             nm_limpa_valor($this->province, $this->field_config['province']['symbol_dec'], $this->field_config['province']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "lead_id")
      {
          nm_limpa_numero($this->lead_id, $this->field_config['lead_id']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "list_id")
      {
          nm_limpa_numero($this->list_id, $this->field_config['list_id']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "gmt_offset_now")
      {
          if (!empty($this->field_config['gmt_offset_now']['symbol_dec']))
          {
             $this->sc_remove_currency($this->gmt_offset_now, $this->field_config['gmt_offset_now']['symbol_dec'], $this->field_config['gmt_offset_now']['symbol_grp'], $this->field_config['gmt_offset_now']['symbol_mon']);
             nm_limpa_valor($this->gmt_offset_now, $this->field_config['gmt_offset_now']['symbol_dec'], $this->field_config['gmt_offset_now']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "called_count")
      {
          nm_limpa_numero($this->called_count, $this->field_config['called_count']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "rank")
      {
          nm_limpa_numero($this->rank, $this->field_config['rank']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "entry_list_id")
      {
          nm_limpa_numero($this->entry_list_id, $this->field_config['entry_list_id']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ((!empty($this->modify_date) && 'null' != $this->modify_date) || (!empty($format_fields) && isset($format_fields['modify_date'])))
      {
          $nm_separa_data = strpos($this->field_config['modify_date']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['modify_date']['date_format'];
          $this->field_config['modify_date']['date_format'] = substr($this->field_config['modify_date']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->modify_date, " ") ; 
          $this->modify_date_hora = substr($this->modify_date, $separador + 1) ; 
          $this->modify_date = substr($this->modify_date, 0, $separador) ; 
          nm_volta_data($this->modify_date, $this->field_config['modify_date']['date_format']) ; 
          nmgp_Form_Datas($this->modify_date, $this->field_config['modify_date']['date_format'], $this->field_config['modify_date']['date_sep']) ;  
          $this->field_config['modify_date']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->modify_date_hora, $this->field_config['modify_date']['date_format']) ; 
          nmgp_Form_Hora($this->modify_date_hora, $this->field_config['modify_date']['date_format'], $this->field_config['modify_date']['time_sep']) ;  
          $this->field_config['modify_date']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->modify_date || '' == $this->modify_date)
      {
          $this->modify_date_hora = '';
          $this->modify_date = '';
      }
      if (!empty($this->phone_number) || (!empty($format_fields) && isset($format_fields['phone_number'])))
      {
          $this->nm_gera_mask($this->phone_number, "(99) 99999-9999"); 
      }
      if (!empty($this->alt_phone) || (!empty($format_fields) && isset($format_fields['alt_phone'])))
      {
          $this->nm_gera_mask($this->alt_phone, "(99) 99999-9999"); 
      }
      if (!empty($this->postal_code) || (!empty($format_fields) && isset($format_fields['postal_code'])))
      {
          nmgp_Form_Cep($this->postal_code) ; 
      }
      if ('' !== $this->province || (!empty($format_fields) && isset($format_fields['province'])))
      {
          nmgp_Form_Num_Val($this->province, $this->field_config['province']['symbol_grp'], $this->field_config['province']['symbol_dec'], "2", "S", $this->field_config['province']['format_neg'], "", "", "-", $this->field_config['province']['symbol_fmt']) ; 
      }
      if ((!empty($this->date_of_birth) && 'null' != $this->date_of_birth) || (!empty($format_fields) && isset($format_fields['date_of_birth'])))
      {
          nm_volta_data($this->date_of_birth, $this->field_config['date_of_birth']['date_format']) ; 
          nmgp_Form_Datas($this->date_of_birth, $this->field_config['date_of_birth']['date_format'], $this->field_config['date_of_birth']['date_sep']) ;  
      }
      elseif ('null' == $this->date_of_birth || '' == $this->date_of_birth)
      {
          $this->date_of_birth = '';
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['modify_date']['date_format'];
      if ($this->modify_date != "")  
      { 
          $nm_separa_data = strpos($this->field_config['modify_date']['date_format'], ";") ;
          $this->field_config['modify_date']['date_format'] = substr($this->field_config['modify_date']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->modify_date, $this->field_config['modify_date']['date_format']) ; 
          $this->field_config['modify_date']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->modify_date_hora, $this->field_config['modify_date']['date_format']) ; 
          if ($this->modify_date_hora == "" )  
          { 
              $this->modify_date_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          {
              $this->modify_date_hora = substr($this->modify_date_hora, 0, -4) . "." . substr($this->modify_date_hora, -3);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->modify_date_hora = substr($this->modify_date_hora, 0, -4);
          }
          if ($this->modify_date != "")  
          { 
              $this->modify_date .= " " . $this->modify_date_hora ; 
          }
      } 
      $this->field_config['modify_date']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['date_of_birth']['date_format'];
      if ($this->date_of_birth != "")  
      { 
          nm_conv_data($this->date_of_birth, $this->field_config['date_of_birth']['date_format']) ; 
          $this->date_of_birth_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->date_of_birth_hora = substr($this->date_of_birth_hora, 0, -4);
          }
      } 
      if ($this->date_of_birth == "" && $use_null)  
      { 
          $this->date_of_birth = "null" ; 
      } 
      $this->field_config['date_of_birth']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_comments();
          $this->ajax_return_values_modify_date();
          $this->ajax_return_values_user();
          $this->ajax_return_values_phone_number();
          $this->ajax_return_values_alt_phone();
          $this->ajax_return_values_email();
          $this->ajax_return_values_sc_field_1();
          $this->ajax_return_values_status();
          $this->ajax_return_values_gender();
          $this->ajax_return_values_first_name();
          $this->ajax_return_values_postal_code();
          $this->ajax_return_values_address1();
          $this->ajax_return_values_middle_initial();
          $this->ajax_return_values_address2();
          $this->ajax_return_values_address3();
          $this->ajax_return_values_source_id();
          $this->ajax_return_values_city();
          $this->ajax_return_values_state();
          $this->ajax_return_values_country_code();
          $this->ajax_return_values_owner();
          $this->ajax_return_values_vendor_lead_code();
          $this->ajax_return_values_province();
          $this->ajax_return_values_date_of_birth();
          $this->ajax_return_values_title();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['lead_id']['keyVal'] = form_vicidial_list_auditoria_pack_protect_string($this->nmgp_dados_form['lead_id']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_form_full'] = false;
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_form']       = true;
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_pai']        = "form_vicidial_list_auditoria";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_form_parms'] = "lead_id*scin" . $this->nmgp_dados_form['lead_id'] . "*scoutcall_date*scin" . $this->nmgp_dados_form['modify_date'] . "*scoutuser*scin" . $this->nmgp_dados_form['user'] . "*scoutNMSC_inicial*scininicio*scout";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['total']);
          }
   } // ajax_return_values

          //----- comments
   function ajax_return_values_comments($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("comments", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->comments);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['comments'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- modify_date
   function ajax_return_values_modify_date($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("modify_date", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->modify_date);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['modify_date'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          $this->NM_ajax_info['fldList']['modify_date_hora'] = array(
               'type'    => 'label',
               'valList' => array($this->modify_date_hora),
              );
          }
   }

          //----- user
   function ajax_return_values_user($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("user", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->user);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['user'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- phone_number
   function ajax_return_values_phone_number($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("phone_number", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->phone_number);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['phone_number'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- alt_phone
   function ajax_return_values_alt_phone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("alt_phone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->alt_phone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['alt_phone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- email
   function ajax_return_values_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sc_field_1
   function ajax_return_values_sc_field_1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sc_field_1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sc_field_1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sc_field_1'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- status
   function ajax_return_values_status($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("status", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->status);
              $aLookup = array();
              $this->_tmp_lookup_status = $this->status;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_vicidial_list_auditoria_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"status\"";
          if (isset($this->NM_ajax_info['select_html']['status']) && !empty($this->NM_ajax_info['select_html']['status']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['status'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->status == $sValue)
                  {
                      $this->_tmp_lookup_status = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['status'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['status']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['status']['valList'][$i] = form_vicidial_list_auditoria_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['status']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['status']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['status']['labList'] = $aLabel;
          }
   }

          //----- gender
   function ajax_return_values_gender($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("gender", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->gender);
              $aLookup = array();
              $this->_tmp_lookup_gender = $this->gender;

$aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string('M') => form_vicidial_list_auditoria_pack_protect_string("Masculino"));
$aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string('F') => form_vicidial_list_auditoria_pack_protect_string("Feminino"));
$aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string('N') => form_vicidial_list_auditoria_pack_protect_string("Não se aplica"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_gender'][] = 'M';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_gender'][] = 'F';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_gender'][] = 'N';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"gender\"";
          if (isset($this->NM_ajax_info['select_html']['gender']) && !empty($this->NM_ajax_info['select_html']['gender']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['gender'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->gender == $sValue)
                  {
                      $this->_tmp_lookup_gender = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['gender'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['gender']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['gender']['valList'][$i] = form_vicidial_list_auditoria_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['gender']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['gender']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['gender']['labList'] = $aLabel;
          }
   }

          //----- first_name
   function ajax_return_values_first_name($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("first_name", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->first_name);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['first_name'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- postal_code
   function ajax_return_values_postal_code($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("postal_code", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->postal_code);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['postal_code'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- address1
   function ajax_return_values_address1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("address1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->address1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['address1'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- middle_initial
   function ajax_return_values_middle_initial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("middle_initial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->middle_initial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['middle_initial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- address2
   function ajax_return_values_address2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("address2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->address2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['address2'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- address3
   function ajax_return_values_address3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("address3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->address3);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['address3'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- source_id
   function ajax_return_values_source_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("source_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->source_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['source_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- city
   function ajax_return_values_city($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("city", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->city);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['city'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- state
   function ajax_return_values_state($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("state", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->state);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['state'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- country_code
   function ajax_return_values_country_code($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("country_code", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->country_code);
              $aLookup = array();
              $this->_tmp_lookup_country_code = $this->country_code;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_vicidial_list_auditoria_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"country_code\"";
          if (isset($this->NM_ajax_info['select_html']['country_code']) && !empty($this->NM_ajax_info['select_html']['country_code']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['country_code'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->country_code == $sValue)
                  {
                      $this->_tmp_lookup_country_code = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['country_code'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['country_code']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['country_code']['valList'][$i] = form_vicidial_list_auditoria_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['country_code']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['country_code']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['country_code']['labList'] = $aLabel;
          }
   }

          //----- owner
   function ajax_return_values_owner($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("owner", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->owner);
              $aLookup = array();
              $this->_tmp_lookup_owner = $this->owner;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_vicidial_list_auditoria_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"owner\"";
          if (isset($this->NM_ajax_info['select_html']['owner']) && !empty($this->NM_ajax_info['select_html']['owner']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['owner'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->owner == $sValue)
                  {
                      $this->_tmp_lookup_owner = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['owner'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['owner']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['owner']['valList'][$i] = form_vicidial_list_auditoria_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['owner']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['owner']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['owner']['labList'] = $aLabel;
          }
   }

          //----- vendor_lead_code
   function ajax_return_values_vendor_lead_code($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("vendor_lead_code", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->vendor_lead_code);
              $aLookup = array();
              $this->_tmp_lookup_vendor_lead_code = $this->vendor_lead_code;

$aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string('1') => form_vicidial_list_auditoria_pack_protect_string("Agendado"));
$aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string('2') => form_vicidial_list_auditoria_pack_protect_string("Realizado"));
$aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string('3') => form_vicidial_list_auditoria_pack_protect_string("Descartado"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_vendor_lead_code'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_vendor_lead_code'][] = '2';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_vendor_lead_code'][] = '3';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"vendor_lead_code\"";
          if (isset($this->NM_ajax_info['select_html']['vendor_lead_code']) && !empty($this->NM_ajax_info['select_html']['vendor_lead_code']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['vendor_lead_code'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->vendor_lead_code == $sValue)
                  {
                      $this->_tmp_lookup_vendor_lead_code = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['vendor_lead_code'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['vendor_lead_code']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['vendor_lead_code']['valList'][$i] = form_vicidial_list_auditoria_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['vendor_lead_code']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['vendor_lead_code']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['vendor_lead_code']['labList'] = $aLabel;
          }
   }

          //----- province
   function ajax_return_values_province($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("province", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->province);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['province'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- date_of_birth
   function ajax_return_values_date_of_birth($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("date_of_birth", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->date_of_birth);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['date_of_birth'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- title
   function ajax_return_values_title($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("title", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->title);
              $aLookup = array();
              $this->_tmp_lookup_title = $this->title;

$aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string('S') => form_vicidial_list_auditoria_pack_protect_string("Sim"));
$aLookup[] = array(form_vicidial_list_auditoria_pack_protect_string('N') => form_vicidial_list_auditoria_pack_protect_string("Não"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_title'][] = 'S';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_title'][] = 'N';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"title\"";
          if (isset($this->NM_ajax_info['select_html']['title']) && !empty($this->NM_ajax_info['select_html']['title']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['title'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->title == $sValue)
                  {
                      $this->_tmp_lookup_title = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['title'] = array(
                       'row'    => '',
               'type'    => 'selectdd',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['title']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['title']['valList'][$i] = form_vicidial_list_auditoria_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['title']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['title']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['title']['labList'] = $aLabel;
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//
   function nm_troca_decimal($sc_parm1, $sc_parm2) 
   { 
      $this->province = str_replace($sc_parm1, $sc_parm2, $this->province); 
      $this->gmt_offset_now = str_replace($sc_parm1, $sc_parm2, $this->gmt_offset_now); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->province = "'" . $this->province . "'";
      $this->gmt_offset_now = "'" . $this->gmt_offset_now . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->province = str_replace("'", "", $this->province); 
      $this->gmt_offset_now = str_replace("'", "", $this->gmt_offset_now); 
   } 
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']))
          {
               $sc_where_pos = " WHERE ((lead_id < $this->lead_id))";
               if ('' != $sc_where)
               {
                   if ('where ' == strtolower(substr(trim($sc_where), 0, 6)))
                   {
                       $sc_where = substr(trim($sc_where), 6);
                   }
                   if ('and ' == strtolower(substr(trim($sc_where), 0, 4)))
                   {
                       $sc_where = substr(trim($sc_where), 4);
                   }
                   $sc_where_pos .= ' AND (' . $sc_where . ')';
                   $sc_where = ' WHERE ' . $sc_where;
               }
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->lead_id)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] = '';

   }

   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros
    function handleDbErrorMessage(&$dbErrorMessage, $dbErrorCode)
    {
        if (1267 == $dbErrorCode) {
            $dbErrorMessage = $this->Ini->Nm_lang['lang_errm_db_invalid_collation'];
        }
    }


   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      $this->SC_log_atv = false;
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_key($this->nmgp_opcao);
      }
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_old();
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Ini->sc_tem_trans_banco = $this->Db->BeginTrans(); 
      } 
      $NM_val_form['comments'] = $this->comments;
      $NM_val_form['modify_date'] = $this->modify_date;
      $NM_val_form['user'] = $this->user;
      $NM_val_form['phone_number'] = $this->phone_number;
      $NM_val_form['alt_phone'] = $this->alt_phone;
      $NM_val_form['email'] = $this->email;
      $NM_val_form['sc_field_1'] = $this->sc_field_1;
      $NM_val_form['status'] = $this->status;
      $NM_val_form['gender'] = $this->gender;
      $NM_val_form['first_name'] = $this->first_name;
      $NM_val_form['postal_code'] = $this->postal_code;
      $NM_val_form['address1'] = $this->address1;
      $NM_val_form['middle_initial'] = $this->middle_initial;
      $NM_val_form['address2'] = $this->address2;
      $NM_val_form['address3'] = $this->address3;
      $NM_val_form['source_id'] = $this->source_id;
      $NM_val_form['city'] = $this->city;
      $NM_val_form['state'] = $this->state;
      $NM_val_form['country_code'] = $this->country_code;
      $NM_val_form['owner'] = $this->owner;
      $NM_val_form['vendor_lead_code'] = $this->vendor_lead_code;
      $NM_val_form['province'] = $this->province;
      $NM_val_form['date_of_birth'] = $this->date_of_birth;
      $NM_val_form['title'] = $this->title;
      $NM_val_form['lead_id'] = $this->lead_id;
      $NM_val_form['entry_date'] = $this->entry_date;
      $NM_val_form['list_id'] = $this->list_id;
      $NM_val_form['gmt_offset_now'] = $this->gmt_offset_now;
      $NM_val_form['called_since_last_reset'] = $this->called_since_last_reset;
      $NM_val_form['phone_code'] = $this->phone_code;
      $NM_val_form['last_name'] = $this->last_name;
      $NM_val_form['security_phrase'] = $this->security_phrase;
      $NM_val_form['called_count'] = $this->called_count;
      $NM_val_form['last_local_call_time'] = $this->last_local_call_time;
      $NM_val_form['rank'] = $this->rank;
      $NM_val_form['entry_list_id'] = $this->entry_list_id;
      $NM_val_form['telefone'] = $this->telefone;
      $NM_val_form['celular'] = $this->celular;
      $NM_val_form['whatsapp'] = $this->whatsapp;
      $NM_val_form['sc_field_0'] = $this->sc_field_0;
      $NM_val_form['ouvir'] = $this->ouvir;
      $NM_val_form['audio'] = $this->audio;
      if ($this->lead_id === "" || is_null($this->lead_id))  
      { 
          $this->lead_id = 0;
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->list_id === "" || is_null($this->list_id))  
      { 
          $this->list_id = 0;
          $this->sc_force_zero[] = 'list_id';
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->gmt_offset_now === "" || is_null($this->gmt_offset_now))  
      { 
          $this->gmt_offset_now = 0;
          $this->sc_force_zero[] = 'gmt_offset_now';
      } 
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->called_count === "" || is_null($this->called_count))  
      { 
          $this->called_count = 0;
          $this->sc_force_zero[] = 'called_count';
      } 
      if ($this->rank === "" || is_null($this->rank))  
      { 
          $this->rank = 0;
          $this->sc_force_zero[] = 'rank';
      } 
      if ($this->entry_list_id === "" || is_null($this->entry_list_id))  
      { 
          $this->entry_list_id = 0;
          $this->sc_force_zero[] = 'entry_list_id';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_mysql, $this->Ini->nm_bases_sqlite);
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          if ($this->entry_date == "")  
          { 
              $this->entry_date = "null"; 
              $NM_val_null[] = "entry_date";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->modify_date == "")  
              { 
                  $this->modify_date = "null"; 
                  $NM_val_null[] = "modify_date";
              } 
          }
          $this->status_before_qstr = $this->status;
          $this->status = substr($this->Db->qstr($this->status), 1, -1); 
          $this->user_before_qstr = $this->user;
          $this->user = substr($this->Db->qstr($this->user), 1, -1); 
          $this->vendor_lead_code_before_qstr = $this->vendor_lead_code;
          $this->vendor_lead_code = substr($this->Db->qstr($this->vendor_lead_code), 1, -1); 
          $this->source_id_before_qstr = $this->source_id;
          $this->source_id = substr($this->Db->qstr($this->source_id), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          $this->phone_code_before_qstr = $this->phone_code;
          $this->phone_code = substr($this->Db->qstr($this->phone_code), 1, -1); 
          $this->phone_number_before_qstr = $this->phone_number;
          $this->phone_number = substr($this->Db->qstr($this->phone_number), 1, -1); 
          $this->title_before_qstr = $this->title;
          $this->title = substr($this->Db->qstr($this->title), 1, -1); 
          $this->first_name_before_qstr = $this->first_name;
          $this->first_name = substr($this->Db->qstr($this->first_name), 1, -1); 
          $this->middle_initial_before_qstr = $this->middle_initial;
          $this->middle_initial = substr($this->Db->qstr($this->middle_initial), 1, -1); 
          $this->last_name_before_qstr = $this->last_name;
          $this->last_name = substr($this->Db->qstr($this->last_name), 1, -1); 
          $this->address1_before_qstr = $this->address1;
          $this->address1 = substr($this->Db->qstr($this->address1), 1, -1); 
          $this->address2_before_qstr = $this->address2;
          $this->address2 = substr($this->Db->qstr($this->address2), 1, -1); 
          $this->address3_before_qstr = $this->address3;
          $this->address3 = substr($this->Db->qstr($this->address3), 1, -1); 
          $this->city_before_qstr = $this->city;
          $this->city = substr($this->Db->qstr($this->city), 1, -1); 
          $this->state_before_qstr = $this->state;
          $this->state = substr($this->Db->qstr($this->state), 1, -1); 
          $this->province_before_qstr = $this->province;
          $this->province = substr($this->Db->qstr($this->province), 1, -1); 
          $this->postal_code_before_qstr = $this->postal_code;
          $this->postal_code = substr($this->Db->qstr($this->postal_code), 1, -1); 
          $this->country_code_before_qstr = $this->country_code;
          $this->country_code = substr($this->Db->qstr($this->country_code), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->date_of_birth == "")  
          { 
              $this->date_of_birth = "null"; 
              $NM_val_null[] = "date_of_birth";
          } 
          $this->alt_phone_before_qstr = $this->alt_phone;
          $this->alt_phone = substr($this->Db->qstr($this->alt_phone), 1, -1); 
          $this->email_before_qstr = $this->email;
          $this->email = substr($this->Db->qstr($this->email), 1, -1); 
          $this->security_phrase_before_qstr = $this->security_phrase;
          $this->security_phrase = substr($this->Db->qstr($this->security_phrase), 1, -1); 
          $this->comments_before_qstr = $this->comments;
          $this->comments = substr($this->Db->qstr($this->comments), 1, -1); 
          if ($this->last_local_call_time == "")  
          { 
              $this->last_local_call_time = "null"; 
              $NM_val_null[] = "last_local_call_time";
          } 
          $this->owner_before_qstr = $this->owner;
          $this->owner = substr($this->Db->qstr($this->owner), 1, -1); 
          $this->sc_field_1_before_qstr = $this->sc_field_1;
          $this->sc_field_1 = substr($this->Db->qstr($this->sc_field_1), 1, -1); 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lead_id = $this->lead_id ";
          $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lead_id = $this->lead_id "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_vicidial_list_auditoria_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "modify_date = '$this->modify_date', status = '$this->status', user = '$this->user', vendor_lead_code = '$this->vendor_lead_code', source_id = '$this->source_id', phone_number = '$this->phone_number', title = '$this->title', first_name = '$this->first_name', middle_initial = '$this->middle_initial', address1 = '$this->address1', address2 = '$this->address2', address3 = '$this->address3', city = '$this->city', state = '$this->state', province = '$this->province', postal_code = '$this->postal_code', country_code = '$this->country_code', gender = '$this->gender', date_of_birth = " . $this->Ini->date_delim . $this->date_of_birth . $this->Ini->date_delim1 . ", alt_phone = '$this->alt_phone', email = '$this->email', comments = '$this->comments', owner = '$this->owner'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "modify_date = '$this->modify_date', status = '$this->status', user = '$this->user', vendor_lead_code = '$this->vendor_lead_code', source_id = '$this->source_id', phone_number = '$this->phone_number', title = '$this->title', first_name = '$this->first_name', middle_initial = '$this->middle_initial', address1 = '$this->address1', address2 = '$this->address2', address3 = '$this->address3', city = '$this->city', state = '$this->state', province = '$this->province', postal_code = '$this->postal_code', country_code = '$this->country_code', gender = '$this->gender', date_of_birth = " . $this->Ini->date_delim . $this->date_of_birth . $this->Ini->date_delim1 . ", alt_phone = '$this->alt_phone', email = '$this->email', comments = '$this->comments', owner = '$this->owner'"; 
              } 
              if (isset($NM_val_form['entry_date']) && $NM_val_form['entry_date'] != $this->nmgp_dados_select['entry_date']) 
              { 
                  $SC_fields_update[] = "entry_date = " . $this->Ini->date_delim . $this->entry_date . $this->Ini->date_delim1 . ""; 
              } 
              if (isset($NM_val_form['list_id']) && $NM_val_form['list_id'] != $this->nmgp_dados_select['list_id']) 
              { 
                  $SC_fields_update[] = "list_id = $this->list_id"; 
              } 
              if (isset($NM_val_form['gmt_offset_now']) && $NM_val_form['gmt_offset_now'] != $this->nmgp_dados_select['gmt_offset_now']) 
              { 
                  $SC_fields_update[] = "gmt_offset_now = $this->gmt_offset_now"; 
              } 
              if (isset($NM_val_form['called_since_last_reset']) && $NM_val_form['called_since_last_reset'] != $this->nmgp_dados_select['called_since_last_reset']) 
              { 
                  $SC_fields_update[] = "called_since_last_reset = '$this->called_since_last_reset'"; 
              } 
              if (isset($NM_val_form['phone_code']) && $NM_val_form['phone_code'] != $this->nmgp_dados_select['phone_code']) 
              { 
                  $SC_fields_update[] = "phone_code = '$this->phone_code'"; 
              } 
              if (isset($NM_val_form['last_name']) && $NM_val_form['last_name'] != $this->nmgp_dados_select['last_name']) 
              { 
                  $SC_fields_update[] = "last_name = '$this->last_name'"; 
              } 
              if (isset($NM_val_form['security_phrase']) && $NM_val_form['security_phrase'] != $this->nmgp_dados_select['security_phrase']) 
              { 
                  $SC_fields_update[] = "security_phrase = '$this->security_phrase'"; 
              } 
              if (isset($NM_val_form['called_count']) && $NM_val_form['called_count'] != $this->nmgp_dados_select['called_count']) 
              { 
                  $SC_fields_update[] = "called_count = $this->called_count"; 
              } 
              if (isset($NM_val_form['last_local_call_time']) && $NM_val_form['last_local_call_time'] != $this->nmgp_dados_select['last_local_call_time']) 
              { 
                  $SC_fields_update[] = "last_local_call_time = " . $this->Ini->date_delim . $this->last_local_call_time . $this->Ini->date_delim1 . ""; 
              } 
              if (isset($NM_val_form['rank']) && $NM_val_form['rank'] != $this->nmgp_dados_select['rank']) 
              { 
                  $SC_fields_update[] = "rank = $this->rank"; 
              } 
              if (isset($NM_val_form['entry_list_id']) && $NM_val_form['entry_list_id'] != $this->nmgp_dados_select['entry_list_id']) 
              { 
                  $SC_fields_update[] = "entry_list_id = $this->entry_list_id"; 
              } 
              $aDoNotUpdate = array();
              $comando .= implode(",", $SC_fields_update);  
              $comando .= " WHERE lead_id = $this->lead_id ";  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $useUpdateProcedure = false;
              if (!empty($SC_fields_update) || $useUpdateProcedure)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $dbErrorMessage = $this->Db->ErrorMsg();
                          $dbErrorCode = $this->Db->ErrorNo();
                          $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $dbErrorMessage;
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_vicidial_list_auditoria_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              $this->status = $this->status_before_qstr;
              $this->user = $this->user_before_qstr;
              $this->vendor_lead_code = $this->vendor_lead_code_before_qstr;
              $this->source_id = $this->source_id_before_qstr;
              $this->phone_code = $this->phone_code_before_qstr;
              $this->phone_number = $this->phone_number_before_qstr;
              $this->title = $this->title_before_qstr;
              $this->first_name = $this->first_name_before_qstr;
              $this->middle_initial = $this->middle_initial_before_qstr;
              $this->last_name = $this->last_name_before_qstr;
              $this->address1 = $this->address1_before_qstr;
              $this->address2 = $this->address2_before_qstr;
              $this->address3 = $this->address3_before_qstr;
              $this->city = $this->city_before_qstr;
              $this->state = $this->state_before_qstr;
              $this->province = $this->province_before_qstr;
              $this->postal_code = $this->postal_code_before_qstr;
              $this->country_code = $this->country_code_before_qstr;
              $this->alt_phone = $this->alt_phone_before_qstr;
              $this->email = $this->email_before_qstr;
              $this->security_phrase = $this->security_phrase_before_qstr;
              $this->comments = $this->comments_before_qstr;
              $this->owner = $this->owner_before_qstr;
              $this->sc_field_1 = $this->sc_field_1_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_log_new();
              $this->NM_gera_log_compress();

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['status'])) { $this->status = $NM_val_form['status']; }
              elseif (isset($this->status)) { $this->nm_limpa_alfa($this->status); }
              if     (isset($NM_val_form) && isset($NM_val_form['user'])) { $this->user = $NM_val_form['user']; }
              elseif (isset($this->user)) { $this->nm_limpa_alfa($this->user); }
              if     (isset($NM_val_form) && isset($NM_val_form['vendor_lead_code'])) { $this->vendor_lead_code = $NM_val_form['vendor_lead_code']; }
              elseif (isset($this->vendor_lead_code)) { $this->nm_limpa_alfa($this->vendor_lead_code); }
              if     (isset($NM_val_form) && isset($NM_val_form['source_id'])) { $this->source_id = $NM_val_form['source_id']; }
              elseif (isset($this->source_id)) { $this->nm_limpa_alfa($this->source_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['phone_number'])) { $this->phone_number = $NM_val_form['phone_number']; }
              elseif (isset($this->phone_number)) { $this->nm_limpa_alfa($this->phone_number); }
              if     (isset($NM_val_form) && isset($NM_val_form['title'])) { $this->title = $NM_val_form['title']; }
              elseif (isset($this->title)) { $this->nm_limpa_alfa($this->title); }
              if     (isset($NM_val_form) && isset($NM_val_form['first_name'])) { $this->first_name = $NM_val_form['first_name']; }
              elseif (isset($this->first_name)) { $this->nm_limpa_alfa($this->first_name); }
              if     (isset($NM_val_form) && isset($NM_val_form['middle_initial'])) { $this->middle_initial = $NM_val_form['middle_initial']; }
              elseif (isset($this->middle_initial)) { $this->nm_limpa_alfa($this->middle_initial); }
              if     (isset($NM_val_form) && isset($NM_val_form['address1'])) { $this->address1 = $NM_val_form['address1']; }
              elseif (isset($this->address1)) { $this->nm_limpa_alfa($this->address1); }
              if     (isset($NM_val_form) && isset($NM_val_form['address2'])) { $this->address2 = $NM_val_form['address2']; }
              elseif (isset($this->address2)) { $this->nm_limpa_alfa($this->address2); }
              if     (isset($NM_val_form) && isset($NM_val_form['address3'])) { $this->address3 = $NM_val_form['address3']; }
              elseif (isset($this->address3)) { $this->nm_limpa_alfa($this->address3); }
              if     (isset($NM_val_form) && isset($NM_val_form['city'])) { $this->city = $NM_val_form['city']; }
              elseif (isset($this->city)) { $this->nm_limpa_alfa($this->city); }
              if     (isset($NM_val_form) && isset($NM_val_form['state'])) { $this->state = $NM_val_form['state']; }
              elseif (isset($this->state)) { $this->nm_limpa_alfa($this->state); }
              if     (isset($NM_val_form) && isset($NM_val_form['province'])) { $this->province = $NM_val_form['province']; }
              elseif (isset($this->province)) { $this->nm_limpa_alfa($this->province); }
              if     (isset($NM_val_form) && isset($NM_val_form['postal_code'])) { $this->postal_code = $NM_val_form['postal_code']; }
              elseif (isset($this->postal_code)) { $this->nm_limpa_alfa($this->postal_code); }
              if     (isset($NM_val_form) && isset($NM_val_form['country_code'])) { $this->country_code = $NM_val_form['country_code']; }
              elseif (isset($this->country_code)) { $this->nm_limpa_alfa($this->country_code); }
              if     (isset($NM_val_form) && isset($NM_val_form['alt_phone'])) { $this->alt_phone = $NM_val_form['alt_phone']; }
              elseif (isset($this->alt_phone)) { $this->nm_limpa_alfa($this->alt_phone); }
              if     (isset($NM_val_form) && isset($NM_val_form['email'])) { $this->email = $NM_val_form['email']; }
              elseif (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
              if     (isset($NM_val_form) && isset($NM_val_form['comments'])) { $this->comments = $NM_val_form['comments']; }
              elseif (isset($this->comments)) { $this->nm_limpa_alfa($this->comments); }
              if     (isset($NM_val_form) && isset($NM_val_form['owner'])) { $this->owner = $NM_val_form['owner']; }
              elseif (isset($this->owner)) { $this->nm_limpa_alfa($this->owner); }
              if     (isset($NM_val_form) && isset($NM_val_form['sc_field_1'])) { $this->sc_field_1 = $NM_val_form['sc_field_1']; }
              elseif (isset($this->sc_field_1)) { $this->nm_limpa_alfa($this->sc_field_1); }

              $this->nm_formatar_campos();

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('comments', 'modify_date', 'user', 'phone_number', 'alt_phone', 'email', 'sc_field_1', 'status', 'gender', 'first_name', 'postal_code', 'address1', 'middle_initial', 'address2', 'address3', 'source_id', 'city', 'state', 'country_code', 'owner', 'vendor_lead_code', 'province', 'date_of_birth', 'title'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "lead_id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_vicidial_list_auditoria_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->modify_date != "")
                  { 
                       $compl_insert     .= ", modify_date";
                       $compl_insert_val .= ", '$this->modify_date'";
                  } 
                  if ($this->gmt_offset_now != "")
                  { 
                       $compl_insert     .= ", gmt_offset_now";
                       $compl_insert_val .= ", $this->gmt_offset_now";
                  } 
                  if ($this->called_since_last_reset != "")
                  { 
                       $compl_insert     .= ", called_since_last_reset";
                       $compl_insert_val .= ", '$this->called_since_last_reset'";
                  } 
                  if ($this->gender != "")
                  { 
                       $compl_insert     .= ", gender";
                       $compl_insert_val .= ", '$this->gender'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "entry_date, status, user, vendor_lead_code, source_id, list_id, phone_code, phone_number, title, first_name, middle_initial, last_name, address1, address2, address3, city, state, province, postal_code, country_code, date_of_birth, alt_phone, email, security_phrase, comments, called_count, last_local_call_time, rank, owner, entry_list_id $compl_insert) VALUES (" . $NM_seq_auto . "" . $this->Ini->date_delim . $this->entry_date . $this->Ini->date_delim1 . ", '$this->status', '$this->user', '$this->vendor_lead_code', '$this->source_id', $this->list_id, '$this->phone_code', '$this->phone_number', '$this->title', '$this->first_name', '$this->middle_initial', '$this->last_name', '$this->address1', '$this->address2', '$this->address3', '$this->city', '$this->state', '$this->province', '$this->postal_code', '$this->country_code', " . $this->Ini->date_delim . $this->date_of_birth . $this->Ini->date_delim1 . ", '$this->alt_phone', '$this->email', '$this->security_phrase', '$this->comments', $this->called_count, " . $this->Ini->date_delim . $this->last_local_call_time . $this->Ini->date_delim1 . ", $this->rank, '$this->owner', $this->entry_list_id $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->modify_date != "")
                  { 
                       $compl_insert     .= ", modify_date";
                       $compl_insert_val .= ", '$this->modify_date'";
                  } 
                  if ($this->gmt_offset_now != "")
                  { 
                       $compl_insert     .= ", gmt_offset_now";
                       $compl_insert_val .= ", $this->gmt_offset_now";
                  } 
                  if ($this->called_since_last_reset != "")
                  { 
                       $compl_insert     .= ", called_since_last_reset";
                       $compl_insert_val .= ", '$this->called_since_last_reset'";
                  } 
                  if ($this->gender != "")
                  { 
                       $compl_insert     .= ", gender";
                       $compl_insert_val .= ", '$this->gender'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "entry_date, status, user, vendor_lead_code, source_id, list_id, phone_code, phone_number, title, first_name, middle_initial, last_name, address1, address2, address3, city, state, province, postal_code, country_code, date_of_birth, alt_phone, email, security_phrase, comments, called_count, last_local_call_time, rank, owner, entry_list_id $compl_insert) VALUES (" . $NM_seq_auto . "" . $this->Ini->date_delim . $this->entry_date . $this->Ini->date_delim1 . ", '$this->status', '$this->user', '$this->vendor_lead_code', '$this->source_id', $this->list_id, '$this->phone_code', '$this->phone_number', '$this->title', '$this->first_name', '$this->middle_initial', '$this->last_name', '$this->address1', '$this->address2', '$this->address3', '$this->city', '$this->state', '$this->province', '$this->postal_code', '$this->country_code', " . $this->Ini->date_delim . $this->date_of_birth . $this->Ini->date_delim1 . ", '$this->alt_phone', '$this->email', '$this->security_phrase', '$this->comments', $this->called_count, " . $this->Ini->date_delim . $this->last_local_call_time . $this->Ini->date_delim1 . ", $this->rank, '$this->owner', $this->entry_list_id $compl_insert_val)"; 
              }
              else
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->modify_date != "")
                  { 
                       $compl_insert     .= ", modify_date";
                       $compl_insert_val .= ", '$this->modify_date'";
                  } 
                  if ($this->gmt_offset_now != "")
                  { 
                       $compl_insert     .= ", gmt_offset_now";
                       $compl_insert_val .= ", $this->gmt_offset_now";
                  } 
                  if ($this->called_since_last_reset != "")
                  { 
                       $compl_insert     .= ", called_since_last_reset";
                       $compl_insert_val .= ", '$this->called_since_last_reset'";
                  } 
                  if ($this->gender != "")
                  { 
                       $compl_insert     .= ", gender";
                       $compl_insert_val .= ", '$this->gender'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "entry_date, status, user, vendor_lead_code, source_id, list_id, phone_code, phone_number, title, first_name, middle_initial, last_name, address1, address2, address3, city, state, province, postal_code, country_code, date_of_birth, alt_phone, email, security_phrase, comments, called_count, last_local_call_time, rank, owner, entry_list_id $compl_insert) VALUES (" . $NM_seq_auto . "" . $this->Ini->date_delim . $this->entry_date . $this->Ini->date_delim1 . ", '$this->status', '$this->user', '$this->vendor_lead_code', '$this->source_id', $this->list_id, '$this->phone_code', '$this->phone_number', '$this->title', '$this->first_name', '$this->middle_initial', '$this->last_name', '$this->address1', '$this->address2', '$this->address3', '$this->city', '$this->state', '$this->province', '$this->postal_code', '$this->country_code', " . $this->Ini->date_delim . $this->date_of_birth . $this->Ini->date_delim1 . ", '$this->alt_phone', '$this->email', '$this->security_phrase', '$this->comments', $this->called_count, " . $this->Ini->date_delim . $this->last_local_call_time . $this->Ini->date_delim1 . ", $this->rank, '$this->owner', $this->entry_list_id $compl_insert_val)"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $dbErrorMessage = $this->Db->ErrorMsg();
                      $dbErrorCode = $this->Db->ErrorNo();
                      $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                      { 
                          $this->sc_erro_insert = $dbErrorMessage;
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_vicidial_list_auditoria_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->lead_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->lead_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->status = $this->status_before_qstr;
              $this->user = $this->user_before_qstr;
              $this->vendor_lead_code = $this->vendor_lead_code_before_qstr;
              $this->source_id = $this->source_id_before_qstr;
              $this->phone_code = $this->phone_code_before_qstr;
              $this->phone_number = $this->phone_number_before_qstr;
              $this->title = $this->title_before_qstr;
              $this->first_name = $this->first_name_before_qstr;
              $this->middle_initial = $this->middle_initial_before_qstr;
              $this->last_name = $this->last_name_before_qstr;
              $this->address1 = $this->address1_before_qstr;
              $this->address2 = $this->address2_before_qstr;
              $this->address3 = $this->address3_before_qstr;
              $this->city = $this->city_before_qstr;
              $this->state = $this->state_before_qstr;
              $this->province = $this->province_before_qstr;
              $this->postal_code = $this->postal_code_before_qstr;
              $this->country_code = $this->country_code_before_qstr;
              $this->alt_phone = $this->alt_phone_before_qstr;
              $this->email = $this->email_before_qstr;
              $this->security_phrase = $this->security_phrase_before_qstr;
              $this->comments = $this->comments_before_qstr;
              $this->owner = $this->owner_before_qstr;
              $this->sc_field_1 = $this->sc_field_1_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->lead_id = substr($this->Db->qstr($this->lead_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lead_id = $this->lead_id"; 
          $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lead_id = $this->lead_id "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where lead_id = $this->lead_id "; 
              $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where lead_id = $this->lead_id "); 
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_vicidial_list_auditoria_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              if (empty($this->sc_erro_delete)) {
                  $this->record_delete_ok = true;
              }
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
    if ("update" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['decimal_db'] == ",")
        {
           $this->nm_troca_decimal(",", ".");
        }
        $_SESSION['scriptcase']['form_vicidial_list_auditoria']['contr_erro'] = 'on';
 $javascript_title   = 'Atualizado';      
$javascript_message = 'O cadastro foi atualizado com sucesso!';  


$this->sc_ajax_message($javascript_message, $javascript_title);


$redir_app    = 'menu_auditoria';  
$redir_test   = true;  
$redir_target = '_parent';  
$redir_param  = "";

if ($redir_test)
{
     if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($redir_app, $this->nm_location, $redir_param, "$redir_target", "ret_self", 440, 630);
 };
}
$_SESSION['scriptcase']['form_vicidial_list_auditoria']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $salva_opcao ; 
          if ($salva_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->sc_evento = ""; 
          $this->NM_rollback_db(); 
          return; 
      }
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['decimal_db'] == ",")
   {
       $this->nm_troca_decimal(".", ",");
   }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['parms'] = "lead_id?#?$this->lead_id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->lead_id = null === $this->lead_id ? null : substr($this->Db->qstr($this->lead_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter'] . ")";
          }
      }
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "inicio")
      { 
          $this->nmgp_opcao = "igual"; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['parms'] = ""; 
          $nmgp_select = "SELECT lead_id, entry_date, modify_date, status, user, vendor_lead_code, source_id, list_id, gmt_offset_now, called_since_last_reset, phone_code, phone_number, title, first_name, middle_initial, last_name, address1, address2, address3, city, state, province, postal_code, country_code, gender, date_of_birth, alt_phone, email, security_phrase, comments, called_count, last_local_call_time, rank, owner, entry_list_id from " . $this->Ini->nm_tabela ; 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              $aWhere[] = "lead_id = $this->lead_id"; 
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "lead_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['select'] = ""; 
              } 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              $this->NM_ajax_info['navSummary']['reg_ini'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes['update'] = "off";
              $this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes['delete'] = "off";
              return; 
          } 
          else 
          { 
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 1; 
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->lead_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['lead_id'] = $this->lead_id;
              $this->entry_date = $rs->fields[1] ; 
              if (substr($this->entry_date, 10, 1) == "-") 
              { 
                 $this->entry_date = substr($this->entry_date, 0, 10) . " " . substr($this->entry_date, 11);
              } 
              if (substr($this->entry_date, 13, 1) == ".") 
              { 
                 $this->entry_date = substr($this->entry_date, 0, 13) . ":" . substr($this->entry_date, 14, 2) . ":" . substr($this->entry_date, 17);
              } 
              $this->nmgp_dados_select['entry_date'] = $this->entry_date;
              $this->modify_date = $rs->fields[2] ; 
              if (substr($this->modify_date, 10, 1) == "-") 
              { 
                 $this->modify_date = substr($this->modify_date, 0, 10) . " " . substr($this->modify_date, 11);
              } 
              if (substr($this->modify_date, 13, 1) == ".") 
              { 
                 $this->modify_date = substr($this->modify_date, 0, 13) . ":" . substr($this->modify_date, 14, 2) . ":" . substr($this->modify_date, 17);
              } 
              $this->nmgp_dados_select['modify_date'] = $this->modify_date;
              $this->status = $rs->fields[3] ; 
              $this->nmgp_dados_select['status'] = $this->status;
              $this->user = $rs->fields[4] ; 
              $this->nmgp_dados_select['user'] = $this->user;
              $this->vendor_lead_code = $rs->fields[5] ; 
              $this->nmgp_dados_select['vendor_lead_code'] = $this->vendor_lead_code;
              $this->source_id = $rs->fields[6] ; 
              $this->nmgp_dados_select['source_id'] = $this->source_id;
              $this->list_id = $rs->fields[7] ; 
              $this->nmgp_dados_select['list_id'] = $this->list_id;
              $this->gmt_offset_now = $rs->fields[8] ; 
              $this->nmgp_dados_select['gmt_offset_now'] = $this->gmt_offset_now;
              $this->called_since_last_reset = $rs->fields[9] ; 
              $this->nmgp_dados_select['called_since_last_reset'] = $this->called_since_last_reset;
              $this->phone_code = $rs->fields[10] ; 
              $this->nmgp_dados_select['phone_code'] = $this->phone_code;
              $this->phone_number = $rs->fields[11] ; 
              $this->nmgp_dados_select['phone_number'] = $this->phone_number;
              $this->title = $rs->fields[12] ; 
              $this->nmgp_dados_select['title'] = $this->title;
              $this->first_name = $rs->fields[13] ; 
              $this->nmgp_dados_select['first_name'] = $this->first_name;
              $this->middle_initial = $rs->fields[14] ; 
              $this->nmgp_dados_select['middle_initial'] = $this->middle_initial;
              $this->last_name = $rs->fields[15] ; 
              $this->nmgp_dados_select['last_name'] = $this->last_name;
              $this->address1 = $rs->fields[16] ; 
              $this->nmgp_dados_select['address1'] = $this->address1;
              $this->address2 = $rs->fields[17] ; 
              $this->nmgp_dados_select['address2'] = $this->address2;
              $this->address3 = $rs->fields[18] ; 
              $this->nmgp_dados_select['address3'] = $this->address3;
              $this->city = $rs->fields[19] ; 
              $this->nmgp_dados_select['city'] = $this->city;
              $this->state = $rs->fields[20] ; 
              $this->nmgp_dados_select['state'] = $this->state;
              $this->province = $rs->fields[21] ; 
              $this->nmgp_dados_select['province'] = $this->province;
              $this->postal_code = $rs->fields[22] ; 
              $this->nmgp_dados_select['postal_code'] = $this->postal_code;
              $this->country_code = $rs->fields[23] ; 
              $this->nmgp_dados_select['country_code'] = $this->country_code;
              $this->gender = $rs->fields[24] ; 
              $this->nmgp_dados_select['gender'] = $this->gender;
              $this->date_of_birth = $rs->fields[25] ; 
              $this->nmgp_dados_select['date_of_birth'] = $this->date_of_birth;
              $this->alt_phone = $rs->fields[26] ; 
              $this->nmgp_dados_select['alt_phone'] = $this->alt_phone;
              $this->email = $rs->fields[27] ; 
              $this->nmgp_dados_select['email'] = $this->email;
              $this->security_phrase = $rs->fields[28] ; 
              $this->nmgp_dados_select['security_phrase'] = $this->security_phrase;
              $this->comments = $rs->fields[29] ; 
              $this->nmgp_dados_select['comments'] = $this->comments;
              $this->called_count = $rs->fields[30] ; 
              $this->nmgp_dados_select['called_count'] = $this->called_count;
              $this->last_local_call_time = $rs->fields[31] ; 
              if (substr($this->last_local_call_time, 10, 1) == "-") 
              { 
                 $this->last_local_call_time = substr($this->last_local_call_time, 0, 10) . " " . substr($this->last_local_call_time, 11);
              } 
              if (substr($this->last_local_call_time, 13, 1) == ".") 
              { 
                 $this->last_local_call_time = substr($this->last_local_call_time, 0, 13) . ":" . substr($this->last_local_call_time, 14, 2) . ":" . substr($this->last_local_call_time, 17);
              } 
              $this->nmgp_dados_select['last_local_call_time'] = $this->last_local_call_time;
              $this->rank = $rs->fields[32] ; 
              $this->nmgp_dados_select['rank'] = $this->rank;
              $this->owner = $rs->fields[33] ; 
              $this->nmgp_dados_select['owner'] = $this->owner;
              $this->entry_list_id = $rs->fields[34] ; 
              $this->nmgp_dados_select['entry_list_id'] = $this->entry_list_id;
              $this->sc_field_1 = $rs->fields[35] ; 
              $this->nmgp_dados_select['sc_field_1'] = $this->sc_field_1;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->lead_id = (string)$this->lead_id; 
              $this->list_id = (string)$this->list_id; 
              $this->gmt_offset_now = (string)$this->gmt_offset_now; 
              $this->called_count = (string)$this->called_count; 
              $this->rank = (string)$this->rank; 
              $this->entry_list_id = (string)$this->entry_list_id; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['parms'] = "lead_id?#?$this->lead_id?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->controle_navegacao();
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->lead_id = "";  
              $this->nmgp_dados_form["lead_id"] = $this->lead_id;
              $this->entry_date = "";  
              $this->entry_date_hora = "" ;  
              $this->nmgp_dados_form["entry_date"] = $this->entry_date;
              $this->modify_date = "";  
              $this->modify_date_hora = "" ;  
              $this->nmgp_dados_form["modify_date"] = $this->modify_date;
              $this->status = "";  
              $this->nmgp_dados_form["status"] = $this->status;
              $this->user = "";  
              $this->nmgp_dados_form["user"] = $this->user;
              $this->vendor_lead_code = "";  
              $this->nmgp_dados_form["vendor_lead_code"] = $this->vendor_lead_code;
              $this->source_id = "";  
              $this->nmgp_dados_form["source_id"] = $this->source_id;
              $this->list_id = "";  
              $this->nmgp_dados_form["list_id"] = $this->list_id;
              $this->gmt_offset_now = "";  
              $this->nmgp_dados_form["gmt_offset_now"] = $this->gmt_offset_now;
              $this->called_since_last_reset = "";  
              $this->nmgp_dados_form["called_since_last_reset"] = $this->called_since_last_reset;
              $this->phone_code = "";  
              $this->nmgp_dados_form["phone_code"] = $this->phone_code;
              $this->phone_number = "";  
              $this->nmgp_dados_form["phone_number"] = $this->phone_number;
              $this->title = "";  
              $this->nmgp_dados_form["title"] = $this->title;
              $this->first_name = "";  
              $this->nmgp_dados_form["first_name"] = $this->first_name;
              $this->middle_initial = "";  
              $this->nmgp_dados_form["middle_initial"] = $this->middle_initial;
              $this->last_name = "";  
              $this->nmgp_dados_form["last_name"] = $this->last_name;
              $this->address1 = "";  
              $this->nmgp_dados_form["address1"] = $this->address1;
              $this->address2 = "";  
              $this->nmgp_dados_form["address2"] = $this->address2;
              $this->address3 = "";  
              $this->nmgp_dados_form["address3"] = $this->address3;
              $this->city = "";  
              $this->nmgp_dados_form["city"] = $this->city;
              $this->state = "";  
              $this->nmgp_dados_form["state"] = $this->state;
              $this->province = "";  
              $this->nmgp_dados_form["province"] = $this->province;
              $this->postal_code = "";  
              $this->nmgp_dados_form["postal_code"] = $this->postal_code;
              $this->country_code = "";  
              $this->nmgp_dados_form["country_code"] = $this->country_code;
              $this->gender = "";  
              $this->nmgp_dados_form["gender"] = $this->gender;
              $this->date_of_birth = "";  
              $this->date_of_birth_hora = "" ;  
              $this->nmgp_dados_form["date_of_birth"] = $this->date_of_birth;
              $this->alt_phone = "";  
              $this->nmgp_dados_form["alt_phone"] = $this->alt_phone;
              $this->email = "";  
              $this->nmgp_dados_form["email"] = $this->email;
              $this->security_phrase = "";  
              $this->nmgp_dados_form["security_phrase"] = $this->security_phrase;
              $this->comments = "";  
              $this->nmgp_dados_form["comments"] = $this->comments;
              $this->called_count = "";  
              $this->nmgp_dados_form["called_count"] = $this->called_count;
              $this->last_local_call_time = "";  
              $this->last_local_call_time_hora = "" ;  
              $this->nmgp_dados_form["last_local_call_time"] = $this->last_local_call_time;
              $this->rank = "";  
              $this->nmgp_dados_form["rank"] = $this->rank;
              $this->owner = "";  
              $this->nmgp_dados_form["owner"] = $this->owner;
              $this->entry_list_id = "";  
              $this->nmgp_dados_form["entry_list_id"] = $this->entry_list_id;
              $this->telefone = "";  
              $this->nmgp_dados_form["telefone"] = $this->telefone;
              $this->celular = "";  
              $this->nmgp_dados_form["celular"] = $this->celular;
              $this->whatsapp = "";  
              $this->nmgp_dados_form["whatsapp"] = $this->whatsapp;
              $this->sc_field_0 = "";  
              $this->nmgp_dados_form["sc_field_0"] = $this->sc_field_0;
              $this->ouvir = "";  
              $this->nmgp_dados_form["ouvir"] = $this->ouvir;
              $this->nmgp_dados_form["audio"] = $this->audio;
              $this->sc_field_1 = "";  
              $this->nmgp_dados_form["sc_field_1"] = $this->sc_field_1;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['grid_goautodial_recordings_views_script_case_init'] ]['grid_goautodial_recordings_views']['embutida_parms'] = "lead_id*scin" . $this->nmgp_dados_form['lead_id'] . "*scoutcall_date*scin" . $this->nmgp_dados_form['modify_date'] . "*scoutuser*scin" . $this->nmgp_dados_form['user'] . "*scoutNMSC_inicial*scininicio*scout";
  }
// 
   function NM_gera_log_key($evt) 
   {
       $this->SC_log_arr = array();
       $this->SC_log_atv = true;
       if ($evt == "incluir")
       {
           $this->SC_log_evt = "insert";
       }
       if ($evt == "alterar")
       {
           $this->SC_log_evt = "update";
       }
       if ($evt == "excluir")
       {
           $this->SC_log_evt = "delete";
       }
       $this->SC_log_arr['keys']['lead_id'] =  $this->lead_id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dados_select'];
           $this->SC_log_arr['fields']['entry_date']['0'] =  $nmgp_dados_select['entry_date'];
           $this->SC_log_arr['fields']['modify_date']['0'] =  $nmgp_dados_select['modify_date'];
           $this->SC_log_arr['fields']['status']['0'] =  $nmgp_dados_select['status'];
           $this->SC_log_arr['fields']['user']['0'] =  $nmgp_dados_select['user'];
           $this->SC_log_arr['fields']['vendor_lead_code']['0'] =  $nmgp_dados_select['vendor_lead_code'];
           $this->SC_log_arr['fields']['source_id']['0'] =  $nmgp_dados_select['source_id'];
           $this->SC_log_arr['fields']['list_id']['0'] =  $nmgp_dados_select['list_id'];
           $this->SC_log_arr['fields']['gmt_offset_now']['0'] =  $nmgp_dados_select['gmt_offset_now'];
           $this->SC_log_arr['fields']['called_since_last_reset']['0'] =  $nmgp_dados_select['called_since_last_reset'];
           $this->SC_log_arr['fields']['phone_code']['0'] =  $nmgp_dados_select['phone_code'];
           $this->SC_log_arr['fields']['phone_number']['0'] =  $nmgp_dados_select['phone_number'];
           $this->SC_log_arr['fields']['title']['0'] =  $nmgp_dados_select['title'];
           $this->SC_log_arr['fields']['first_name']['0'] =  $nmgp_dados_select['first_name'];
           $this->SC_log_arr['fields']['middle_initial']['0'] =  $nmgp_dados_select['middle_initial'];
           $this->SC_log_arr['fields']['last_name']['0'] =  $nmgp_dados_select['last_name'];
           $this->SC_log_arr['fields']['address1']['0'] =  $nmgp_dados_select['address1'];
           $this->SC_log_arr['fields']['address2']['0'] =  $nmgp_dados_select['address2'];
           $this->SC_log_arr['fields']['address3']['0'] =  $nmgp_dados_select['address3'];
           $this->SC_log_arr['fields']['city']['0'] =  $nmgp_dados_select['city'];
           $this->SC_log_arr['fields']['state']['0'] =  $nmgp_dados_select['state'];
           $this->SC_log_arr['fields']['province']['0'] =  $nmgp_dados_select['province'];
           $this->SC_log_arr['fields']['postal_code']['0'] =  $nmgp_dados_select['postal_code'];
           $this->SC_log_arr['fields']['country_code']['0'] =  $nmgp_dados_select['country_code'];
           $this->SC_log_arr['fields']['gender']['0'] =  $nmgp_dados_select['gender'];
           $this->SC_log_arr['fields']['date_of_birth']['0'] =  $nmgp_dados_select['date_of_birth'];
           $this->SC_log_arr['fields']['alt_phone']['0'] =  $nmgp_dados_select['alt_phone'];
           $this->SC_log_arr['fields']['email']['0'] =  $nmgp_dados_select['email'];
           $this->SC_log_arr['fields']['security_phrase']['0'] =  $nmgp_dados_select['security_phrase'];
           $this->SC_log_arr['fields']['comments']['0'] =  $nmgp_dados_select['comments'];
           $this->SC_log_arr['fields']['called_count']['0'] =  $nmgp_dados_select['called_count'];
           $this->SC_log_arr['fields']['last_local_call_time']['0'] =  $nmgp_dados_select['last_local_call_time'];
           $this->SC_log_arr['fields']['rank']['0'] =  $nmgp_dados_select['rank'];
           $this->SC_log_arr['fields']['owner']['0'] =  $nmgp_dados_select['owner'];
           $this->SC_log_arr['fields']['entry_list_id']['0'] =  $nmgp_dados_select['entry_list_id'];
           $this->SC_log_arr['fields']['Aúdios']['0'] =  $nmgp_dados_select['sc_field_1'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['entry_date']['1'] =  $this->entry_date;
       $this->SC_log_arr['fields']['modify_date']['1'] =  $this->modify_date;
       $this->SC_log_arr['fields']['status']['1'] =  $this->status;
       $this->SC_log_arr['fields']['user']['1'] =  $this->user;
       $this->SC_log_arr['fields']['vendor_lead_code']['1'] =  $this->vendor_lead_code;
       $this->SC_log_arr['fields']['source_id']['1'] =  $this->source_id;
       $this->SC_log_arr['fields']['list_id']['1'] =  $this->list_id;
       $this->SC_log_arr['fields']['gmt_offset_now']['1'] =  $this->gmt_offset_now;
       $this->SC_log_arr['fields']['called_since_last_reset']['1'] =  $this->called_since_last_reset;
       $this->SC_log_arr['fields']['phone_code']['1'] =  $this->phone_code;
       $this->SC_log_arr['fields']['phone_number']['1'] =  $this->phone_number;
       $this->SC_log_arr['fields']['title']['1'] =  $this->title;
       $this->SC_log_arr['fields']['first_name']['1'] =  $this->first_name;
       $this->SC_log_arr['fields']['middle_initial']['1'] =  $this->middle_initial;
       $this->SC_log_arr['fields']['last_name']['1'] =  $this->last_name;
       $this->SC_log_arr['fields']['address1']['1'] =  $this->address1;
       $this->SC_log_arr['fields']['address2']['1'] =  $this->address2;
       $this->SC_log_arr['fields']['address3']['1'] =  $this->address3;
       $this->SC_log_arr['fields']['city']['1'] =  $this->city;
       $this->SC_log_arr['fields']['state']['1'] =  $this->state;
       $this->SC_log_arr['fields']['province']['1'] =  $this->province;
       $this->SC_log_arr['fields']['postal_code']['1'] =  $this->postal_code;
       $this->SC_log_arr['fields']['country_code']['1'] =  $this->country_code;
       $this->SC_log_arr['fields']['gender']['1'] =  $this->gender;
       $this->SC_log_arr['fields']['date_of_birth']['1'] =  $this->date_of_birth;
       $this->SC_log_arr['fields']['alt_phone']['1'] =  $this->alt_phone;
       $this->SC_log_arr['fields']['email']['1'] =  $this->email;
       $this->SC_log_arr['fields']['security_phrase']['1'] =  $this->security_phrase;
       $this->SC_log_arr['fields']['comments']['1'] =  $this->comments;
       $this->SC_log_arr['fields']['called_count']['1'] =  $this->called_count;
       $this->SC_log_arr['fields']['last_local_call_time']['1'] =  $this->last_local_call_time;
       $this->SC_log_arr['fields']['rank']['1'] =  $this->rank;
       $this->SC_log_arr['fields']['owner']['1'] =  $this->owner;
       $this->SC_log_arr['fields']['entry_list_id']['1'] =  $this->entry_list_id;
       $this->SC_log_arr['fields']['Aúdios']['1'] =  $this->sc_field_1;
   }
// 
   function NM_gera_log_compress() 
   {
       foreach ($this->SC_log_arr['fields'] as $fild => $data_f)
       {
           if ($data_f[0] == $data_f[1] || ($data_f[0] == "" && $data_f[1] == "null"))
           {
               unset($this->SC_log_arr['fields'][$fild]);
           }
       }
   }
// 
   function NM_gera_log_output() 
   {
       $Log_output = "";
       $prim_delim = "";
       foreach ($this->SC_log_arr as $type => $dats)
       {
           if ($type == "keys")
           {
               $Log_output .= "--> keys <-- ";
               foreach ($dats as $key => $data)
               {
                   $Log_output .=  $prim_delim . $key . " : " . $data;
                   $prim_delim  = "||";
               }
           }
           if ($type == "fields")
           {
               $Log_output .= $prim_delim . "--> fields <-- ";
               $prim_delim = "";
               if (empty($dats) && $this->SC_log_evt == "update")
               {
                   return;
               }
               foreach ($dats as $key => $data)
               {
                   foreach ($data as $tp => $val)
                   {
                      $tpok = ($tp == 0) ? " (old) " : " (new) ";
                      $Log_output .= $prim_delim . $key . $tpok . " : " . $val;
                      $prim_delim  = "||";
                   }
               }
           }
       }
       $this->NM_gera_log_insert("Scriptcase", $this->SC_log_evt, $Log_output);
   }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_vicidial_list_auditoria_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_vicidial_list_auditoria_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       $sImage = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalendario']['display'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalculadora']['display'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return '' == $sImage ? '' : $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile

   function jqueryFAFile($sModule)
   {
       $sFA = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
           {
               $sFA = $this->arr_buttons['bcalendario']['fontawesomeicon'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
           {
               $sFA = $this->arr_buttons['bcalculadora']['fontawesomeicon'];
           }
       }

       return '' == $sFA ? '' : "<span class='scButton_fontawesome " . $sFA . "'></span>";
   } // jqueryFAFile

   function jqueryButtonText($sModule)
   {
       $sClass = '';
       $sText  = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalendario']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalendario']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalendario']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i>";
                   }
               }
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalculadora']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalculadora']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalculadora']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> ";
                   }
               }
           }
       }

       return '' == $sText ? array('', '') : array($sText, $sClass);
   } // jqueryButtonText


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_status()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_status'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_gender()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Masculino?#?M?#??@?";
       $nmgp_def_dados .= "Feminino?#?F?#??@?";
       $nmgp_def_dados .= "Não se aplica?#?N?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_country_code()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_country_code'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_owner()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['Lookup_owner'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_vendor_lead_code()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Agendado?#?1?#??@?";
       $nmgp_def_dados .= "Realizado?#?2?#??@?";
       $nmgp_def_dados .= "Descartado?#?3?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_title()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Sim?#?S?#??@?";
       $nmgp_def_dados .= "Não?#?N?#?S?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function SC_fast_search($field, $arg_search, $data_search)
   {
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_vicidial_list_auditoria_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "lead_id", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "entry_date", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "modify_date", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_status($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "status", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "user", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_vendor_lead_code($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "vendor_lead_code", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "source_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "list_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "gmt_offset_now", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "called_since_last_reset", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "phone_code", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "phone_number", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_title($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "title", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "first_name", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "middle_initial", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "last_name", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "address1", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "address2", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "address3", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "city", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "state", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "province", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "postal_code", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_country_code($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "country_code", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_gender($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "gender", $arg_search, $data_lookup);
          }
      }
      {
          $this->SC_monta_condicao($comando, "date_of_birth", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "alt_phone", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "security_phrase", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "comments", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "called_count", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "last_local_call_time", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rank", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_owner($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "owner", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "entry_list_id", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_vicidial_list_auditoria = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['total'] = $qt_geral_reg_form_vicidial_list_auditoria;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_vicidial_list_auditoria_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_vicidial_list_auditoria_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "lead_id";$nm_numeric[] = "list_id";$nm_numeric[] = "gmt_offset_now";$nm_numeric[] = "called_count";$nm_numeric[] = "rank";$nm_numeric[] = "entry_list_id";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
      $Nm_datas['entry_date'] = "datetime";$Nm_datas['modify_date'] = "timestamp";$Nm_datas['date_of_birth'] = "date";$Nm_datas['last_local_call_time'] = "datetime";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_ini_lower . $nm_aspas . $Cmp . $nm_aspas1 . $nm_fim_lower;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $cond_tst = strtoupper($condicao);
         if ($cond_tst == "II" || $cond_tst == "QP" || $cond_tst == "NP")
         {
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
             {
                 $op_like      = " ilike ";
                 $nm_ini_lower = "";
                 $nm_fim_lower = "";
             }
             else
             {
                 $op_like = " like ";
             }
         }
         switch ($cond_tst)
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . $op_like . $nm_ini_lower . "'" . $campo . "%'" . $nm_fim_lower;
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . $op_like . $nm_ini_lower . "'%" . $campo . "%'" . $nm_fim_lower;
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " not" . $op_like . $nm_ini_lower . "'%" . $campo . "%'" . $nm_fim_lower;
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
         }
   }
   function SC_lookup_status($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT status_name, status FROM vicidial_statuses WHERE (status_name LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_vendor_lead_code($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['1'] = "Agendado";
       $data_look['2'] = "Realizado";
       $data_look['3'] = "Descartado";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
   function SC_lookup_title($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['S'] = "Sim";
       $data_look['N'] = "Não";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
   function SC_lookup_country_code($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT Descricao, CodigoSetor FROM setor WHERE (Descricao LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Ini->nm_db_unicep->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Ini->nm_db_unicep->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_gender($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['M'] = "Masculino";
       $data_look['F'] = "Feminino";
       $data_look['N'] = "Não se aplica";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
   function SC_lookup_owner($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT Nome, CodigoOperador FROM operador WHERE (Nome LIKE '%$campo%') AND (Tipo = 'C') AND (Inativo = 0)" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Ini->nm_db_unicep->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Ini->nm_db_unicep->ErrorMsg()); 
           exit; 
       } 
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_vicidial_list_auditoria_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_vicidial_list_auditoria_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_vicidial_list_auditoria_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/usr__NM__ico__NM__iconfinder_voicecall_6235.png">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_list_auditoria']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_vicidial_list_auditoria_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . SC_dir_app_name($nm_apl_dest) . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", NM_charset_to_utf8($nm_apl_parms));
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
           $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       }
       form_vicidial_list_auditoria_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
   }
   if ($nm_target == "_blank")
   {
?>
<form name="Fredir" method="post" target="_blank" action="<?php echo $nm_apl_dest; ?>">
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
</form>
<script type="text/javascript">
setTimeout(function() { document.Fredir.submit(); }, 250);
</script>
<?php
    return;
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/usr__NM__ico__NM__iconfinder_voicecall_6235.png">
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
   </HEAD>
   <BODY>
<?php
   }
?>
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&script_case_session=<?php echo session_id() ?> &nmgp_url_saida=modal&nmgp_parms=<?php echo $this->form_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
    $(function() {
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
    });
<?php
   }
?>
   </SCRIPT>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
   </BODY>
   </HTML>
<?php
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       if ($this->Ini->nm_db_unicep)
       {
           $this->Ini->nm_db_unicep->Close();
       }
       exit;
   }
}
    function sc_ajax_message($sMessage, $sTitle = '', $sParam = '', $sRedirPar = '')
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxMessage'] = array();
            if ('' != $sParam)
            {
                $aParamList = explode('&', $sParam);
                foreach ($aParamList as $sParamItem)
                {
                    $aParamData = explode('=', $sParamItem);
                    if (2 == sizeof($aParamData) &&
                        in_array($aParamData[0], array('modal', 'timeout', 'button', 'button_label', 'top', 'left', 'width', 'height', 'redir', 'redir_target', 'show_close', 'body_icon', 'toast', 'toast_pos', 'type')))
                    {
                        $this->NM_ajax_info['ajaxMessage'][$aParamData[0]] = NM_charset_to_utf8($aParamData[1]);
                    }
                }
            }
            if (isset($this->NM_ajax_info['ajaxMessage']['redir']) && '' != $this->NM_ajax_info['ajaxMessage']['redir'] && '.php' == substr($this->NM_ajax_info['ajaxMessage']['redir'], -4) && 'http' != substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, 4))
            {
                $this->NM_ajax_info['ajaxMessage']['redir'] = $this->Ini->path_link . SC_dir_app_name(substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, -4)) . '/' . $this->NM_ajax_info['ajaxMessage']['redir'];
            }
            if ('' != $sRedirPar)
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = str_replace('=', '?#?', str_replace(';', '?@?', $sRedirPar));
            }
            else
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = '';
            }
            $this->NM_ajax_info['ajaxMessage']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxMessage']['title']   = NM_charset_to_utf8($sTitle);
            if (!isset($this->NM_ajax_info['ajaxMessage']['button']))
            {
                $this->NM_ajax_info['ajaxMessage']['button'] = 'Y';
            }
        }
    } // sc_ajax_message
}
?>
