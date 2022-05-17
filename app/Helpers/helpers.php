<?php
// funcoes que estão disponiveis em todo o sistema.

// $Permission = [
//   "isSuperAdmin"   => fn($valuePermission)  =>   in_array('Super Admin',$valuePermission),
//   "isAdmin"        => fn($valuePermission)  =>   in_array('Admin',$valuePermission),
//   "isGerente"      => fn($valuePermission)  =>   in_array('Gerente',$valuePermission),
//   "isCoordenador"  => fn($valuePermission)  =>   in_array('Coordenador',$valuePermission),
//   "isSupervisor"   => fn($valuePermission)  =>   in_array('Supervisor',$valuePermission),
//   "isComercial"    => fn($valuePermission)  =>   in_array('Comercial',$valuePermission),
//   "isFinanceiro"   => fn($valuePermission)  =>   in_array('Financeiro',$valuePermission),
//   "isSuporte"      => fn($valuePermission)  =>   in_array('Suporte',$valuePermission),
//   "isTecnico"      => fn($valuePermission)  =>   in_array('Tecnico',$valuePermission)
// ];

function isSuperAdmin ($value) { return in_array('Super Admin',$value); }
function isAdmin ($value) { return in_array('Admin',$value); } 
function isGerente ($value) { return in_array('Gerente',$value); }
function isCoordenador ($value) { return in_array('Coordenador',$value); }
function isSupervisor ($value) { return in_array('Supervisor',$value); } 
function isComercial ($value) { return in_array('Comercial',$value); }
function isFinanceiro ($value) { return in_array('Financeiro',$value); }
function isSuporte ($value) { return in_array('Suporte',$value); } 
function isTecnico ($value) { return in_array('Tecnico',$value); }
