<?php
if(!empty($_POST['nombre_n']) &&
!empty($_POST['apellido_n']) &&
!empty($_POST['fecha_nac_n']) &&
!empty($_POST['direccion_n']) &&
!empty($_POST['contacto_n']) &&
!empty($_POST['fecha_ing_n']) &&
!empty($_POST['edad_n']) &&
!empty($_POST['niv_academico_n']) &&
!empty($_POST['nombre_m']) &&
!empty($_POST['fecha_nac_m']) &&
!empty($_POST['cedula_m']) &&
!empty($_POST['trabajo_m']) &&
!empty($_POST['act_des_m']) &&
!empty($_POST['niv_aca_m']) &&
!empty($_POST['prof_m']) &&
!empty($_POST['direccion_m']) &&
!empty($_POST['tel_m']) &&
!empty($_POST['cel_m']) &&
!empty($_POST['nombre_p']) &&
!empty($_POST['apellido_p']) &&
!empty($_POST['fecha_nac_p']) &&
!empty($_POST['trabajo_p']) &&
!empty($_POST['act_des_p']) &&
!empty($_POST['niv_aca_p']) &&
!empty($_POST['prof_p']) &&
!empty($_POST['direccion_p']) &&
!empty($_POST['tel_p']) &&
!empty($_POST['cel_p']) &&
!empty($_POST['est_civ_p']) &&
!empty($_POST['dif_par']) &&
!empty($_POST['cat_par']) &&
!empty($_POST['est_nac_n']) &&
!empty($_POST['h_s_g_o_c']) &&
!empty($_POST['e_p_a_e']) &&
!empty($_POST['s_a_m_a']) &&
!empty($_POST['e_c_a_m_n_p_e_d']) &&
!empty($_POST['u_a_c_p']) &&
!empty($_POST['p_t_s']) &&
!empty($_POST['l_f']) &&
!empty($_POST['mas_dat_n1']) &&
!empty($_POST['mas_dat_n2']) &&
!empty($_POST['h_a_a_a_c_c_j_i']) &&
!empty($_POST['num_emergencia']) &&
!empty($_POST['nombre_doc_emergencia']) &&
!empty($_POST['tipo_sangre']) &&
!empty($_POST['males_n']) &&
!empty($_POST['num_per_emergencia']) &&
!empty($_POST['nom_clinica']) &&
!empty($_POST['dir_clinica']) &&
!empty($_POST['med_auto']) &&
!empty($_POST['per_emer']) &&
!empty($_POST['mas_info'])){
    $dominio = "localhost";
    $usuariodeweb = "root";
    $contraseña = "";
    $db = "persefone";
    $conexion = new mysqli($dominio, $usuariodeweb, $contraseña, $db);
    if($conexion -> connect_error){
        die("Conexion fallida: ". $conexion-> connect_error);
    }
    if($conexion->){}
}
?>