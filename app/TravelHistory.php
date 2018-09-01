<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelHistory extends Model
{
	protected $fillable = [
		"numero",
		"serie",
		"data_emissao",
		"peso_saida",
		"peso_chegada",
		"cpf_cnpj_emitente",
		"inscricao_estadual_emitente",
		"razao_social_emitente",
		"mercadoria",
		"codigo_ibge_cidade_origem",
		"codigo_ibge_cidade_destino",
	];
}
