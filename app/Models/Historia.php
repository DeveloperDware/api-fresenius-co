<?php

namespace App\Models;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Historia extends Model
{
    use HasFactory;
    protected $table = "historia";
    protected $fillable = [
        "id_historia",
        "fecha_historia",
        "id_paciente",
        "tipo",
        "edad_m",
        "edad_a",
        "motivo",
        "enf_pre",
        "enf_pre_otros",
        "nombre_aco",
        "paren_aco",
        "apetito",
        "nauseas",
        "vomito",
        "otros",
        "intestinal",
        "intes_texto",
        "fuma",
        "fuma_texto",
        "alcohol",
        "alco_texto",
        "actividad",
        "act_texto",
        "ketos",
        "fecha_ketos",
        "dosis",
        "dosis_prescrita",
        "dosis_entregada",
        "dosis_consumida",
        "motivo_ketos",
        "peso_us",
        "talla",
        "peso_id",
        "circ_abdo",
        "carpo",
        "imc",
        "peso_ac",
        "evaluacion_nut",
        "spa",
        "spa_texto",
        "habitos",
        "med_actuales",
        "med_actuales_otros",
        "masa_grasa",
        "masag_kg",
        "indice_masag",
        "masa_magra",
        "masam_kg",
        "indice_masam",
        "musculo_kg",
        "aguac",
        "aguac_kg",
        "aguae",
        "aguae_kg",
        "indice_h",
        "grasa_v",
        "ang_fase",
        "resistencia",
        "reactancia",
        "ta_ps",
        "ta_pd",
        "v_urea",
        "eva_imc",
        "reserva_g",
        "reserva_m",
        "aguac_total",
        "eva_grasav",
        "dx_nutricional",
        "dx_con",
        "dx_desgaste",
        "dinamometria",
        "vr_dinamometria",
        "impedancio",
        "fecha_examen",
        "rechazos",
        "intolerancias",
        "sal",
        "sal_texto",
        "liquidos",
        "liq_texto",
        "desayuno",
        "nueves",
        "almuerzo",
        "onces",
        "cena",
        "noche",
        "total_energia",
        "total_prot",
        "total_chos",
        "total_grasa",
        "total_sat",
        "total_mono",
        "total_poli",
        "total_col",
        "total_na",
        "total_k",
        "total_ca",
        "total_p",
        "total_agua",
        "inter_lacteos",
        "inter_semidescremada",
        "inter_queso",
        "inter_hortalizas",
        "inter_frutas",
        "inter_harinas",
        "inter_cereales",
        "inter_pan_galletas",
        "inter_leguminosas",
        "inter_tuberculos",
        "inter_clara_huevo",
        "inter_huevo",
        "inter_proteina_bl_100",
        "inter_proteina_bl_80",
        "inter_proteina_bl_60",
        "inter_grasas",
        "inter_aceite",
        "inter_aceite_oliva",
        "inter_margarina",
        "inter_mantequilla",
        "inter_aguacate",
        "inter_semillas",
        "inter_azucares",
        "inter_sal",
        "inter_bedidas_veg",
        "inter_arroz",
        "inter_almendras",
        "inter_fresubin",
        "inter_prowhey_renal",
        "inter_nepro",
        "inter_prowhey_prot",
        "inter_ensoy",
        "inter_ketosteril",
        "analisis_rec",
        "otros_hallazgos",
        "fecha_bio",
        "hb",
        "bun",
        "crs",
        "ca",
        "p",
        "k",
        "glic",
        "alb",
        "col",
        "tg",
        "hdl",
        "ldl",
        "hba",
        "ferri",
        "pth",
        "tsh",
        "na",
        "orina",
        "orina_glu",
        "nuu",
        "orina_vol",
        "exa_1",
        "valor_1",
        "exa_2",
        "valor_2",
        "proteinuria",
        "tfg_co",
        "tfg_ck",
        "cloro",
        "acido_urico",
        "album_creat",
        "creatinuria",
        "estadio",
        "bio_observaciones",
        "calorias_t",
        "proteina_kg",
        "grasa_kg",
        "chos_kg",
        "liq_dia",
        "proteina_tgr",
        "grasa_tgr",
        "chos_tgr",
        "sal_dia",
        "vct_p",
        "vct_g",
        "vct_chos",
        "plan",
        "riesgo",
        "plan_evo",
        "cita",
        "justifica",
        "plan_evo_obs",
        "calorias_pipa",
        "pipa",
        "dx_1",
        "tiempo_1",
        "dx_2",
        "tiempo_2",
        "dx_3",
        "tiempo_3",
        "dx_4",
        "tiempo_4",
        "dx_5",
        "tiempo_5",
        "dx_6",
        "tiempo_6",
        "sede",
        "id_usuario",
        "hc_estado",
        "imc_min",
        "imc_max",
        "imc_unidad",
        "talla_min",
        "talla_max",
        "talla_unidad",
        "peso_ac_min",
        "peso_ac_max",
        "peso_ac_unidad",
        "ta_ps_min",
        "ta_ps_max",
        "ta_ps_unidad",
        "ta_pd_min",
        "ta_pd_max",
        "ta_pd_unidad",
        "glic_min",
        "glic_max",
        "glic_unidad",
        "crs_min",
        "crs_max",
        "crs_unidad",
        "v_urea_min",
        "v_urea_max",
        "v_urea_unidad",
        "p_min",
        "p_max",
        "p_unidad",
        "k_min",
        "k_max",
        "k_unidad",
    ];

    public function paciente(){
        return $this->belongsTo(Paciente::class,"id_paciente","id");

    }
}
