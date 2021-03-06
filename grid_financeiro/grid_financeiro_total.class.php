<?php

class grid_financeiro_total
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;

   var $nm_data;

   //----- 
   function __construct($sc_page)
   {
      $this->sc_page = $sc_page;
      $this->nm_data = new nm_data("pt_br");
      if (isset($_SESSION['sc_session'][$this->sc_page]['grid_financeiro']['campos_busca']) && !empty($_SESSION['sc_session'][$this->sc_page]['grid_financeiro']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_financeiro']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->codigo = $Busca_temp['codigo']; 
          $tmp_pos = strpos($this->codigo, "##@@");
          if ($tmp_pos !== false && !is_array($this->codigo))
          {
              $this->codigo = substr($this->codigo, 0, $tmp_pos);
          }
          $this->numerorecibo = $Busca_temp['numerorecibo']; 
          $tmp_pos = strpos($this->numerorecibo, "##@@");
          if ($tmp_pos !== false && !is_array($this->numerorecibo))
          {
              $this->numerorecibo = substr($this->numerorecibo, 0, $tmp_pos);
          }
          $this->numeroserie = $Busca_temp['numeroserie']; 
          $tmp_pos = strpos($this->numeroserie, "##@@");
          if ($tmp_pos !== false && !is_array($this->numeroserie))
          {
              $this->numeroserie = substr($this->numeroserie, 0, $tmp_pos);
          }
          $this->nomerecibo = $Busca_temp['nomerecibo']; 
          $tmp_pos = strpos($this->nomerecibo, "##@@");
          if ($tmp_pos !== false && !is_array($this->nomerecibo))
          {
              $this->nomerecibo = substr($this->nomerecibo, 0, $tmp_pos);
          }
          $this->status = $Busca_temp['status']; 
          $tmp_pos = strpos($this->status, "##@@");
          if ($tmp_pos !== false && !is_array($this->status))
          {
              $this->status = substr($this->status, 0, $tmp_pos);
          }
          $this->datavencimento = $Busca_temp['datavencimento']; 
          $tmp_pos = strpos($this->datavencimento, "##@@");
          if ($tmp_pos !== false && !is_array($this->datavencimento))
          {
              $this->datavencimento = substr($this->datavencimento, 0, $tmp_pos);
          }
          $datavencimento_2 = $Busca_temp['datavencimento_input_2']; 
          $this->datavencimento_2 = $Busca_temp['datavencimento_input_2']; 
          $this->dataemissao = $Busca_temp['dataemissao']; 
          $tmp_pos = strpos($this->dataemissao, "##@@");
          if ($tmp_pos !== false && !is_array($this->dataemissao))
          {
              $this->dataemissao = substr($this->dataemissao, 0, $tmp_pos);
          }
          $dataemissao_2 = $Busca_temp['dataemissao_input_2']; 
          $this->dataemissao_2 = $Busca_temp['dataemissao_input_2']; 
          $this->cobrador = $Busca_temp['cobrador']; 
          $tmp_pos = strpos($this->cobrador, "##@@");
          if ($tmp_pos !== false && !is_array($this->cobrador))
          {
              $this->cobrador = substr($this->cobrador, 0, $tmp_pos);
          }
          $this->operadoravulso = $Busca_temp['operadoravulso']; 
          $tmp_pos = strpos($this->operadoravulso, "##@@");
          if ($tmp_pos !== false && !is_array($this->operadoravulso))
          {
              $this->operadoravulso = substr($this->operadoravulso, 0, $tmp_pos);
          }
          $this->operadormensal = $Busca_temp['operadormensal']; 
          $tmp_pos = strpos($this->operadormensal, "##@@");
          if ($tmp_pos !== false && !is_array($this->operadormensal))
          {
              $this->operadormensal = substr($this->operadormensal, 0, $tmp_pos);
          }
      } 
   }

   //---- 
   function quebra_geral_sc_free_total($res_limit=false)
   {
      global $nada, $nm_lang ;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_financeiro']['contr_total_geral'] == "OK") 
      { 
          return; 
      } 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_financeiro']['tot_geral'] = array() ;  
      $nm_comando = "select count(*) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_financeiro']['where_pesq']; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_financeiro']['tot_geral'][0] = "" . $this->Ini->Nm_lang['lang_msgs_totl'] . ""; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_financeiro']['tot_geral'][1] = $rt->fields[0] ; 
      $rt->Close(); 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_financeiro']['contr_total_geral'] = "OK";
   } 

   function nm_conv_data_db($dt_in, $form_in, $form_out)
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
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
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
              if ($cont2 >= $tam_campo)
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
}

?>
