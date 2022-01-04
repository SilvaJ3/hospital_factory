<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            [
            "name" => "Alzheimer",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Anémie",
            "curable" => true,
            "treatment" => "Complément alimentaire"
            ],
            [
            "name" => "Appendicite",
            "curable" => true,
            "treatment" => "Ablation complète"
            ],
            [
            "name" => "Bruxisme",
            "curable" => true,
            "treatment" => "Consultation auprès d'un kinésithérapeute pour atténuer les grincements"
            ],
            [
            "name" => "Burn-out",
            "curable" => true,
            "treatment" => "gestion du stress et repos"
            ],
            [
            "name" => "Calculs biliaires",
            "curable" => true,
            "treatment" => "Colonoscopie"
            ],
            [
            "name" => "Cancer de la peau (ou mélanome)",
            "curable" => true,
            "treatment" => "intervention chirurgicale"
            ],
            [
            "name" => "Cancer du col de l'utérus",
            "curable" => true,
            "treatment" => "Cryochirurgie"
            ],
            [
            "name" => "Chlamydia",
            "curable" => true,
            "treatment" => "Prescription d'antibiotiques"
            ],
            [
            "name" => "Constipation",
            "curable" => true,
            "treatment" => "Activité physique et alimentation équilibrée"
            ],
            [
            "name" => "Diabète",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Endométriose",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Enurésie nocturne",
            "curable" => true,
            "treatment" => "la tenue d'un calendrier mictionnel et de prise de boissons ainsi que l'utilisation d'une alarme de mouillage."
            ],
            [
            "name" => "Fièvre",
            "curable" => true,
            "treatment" => "Repos, boire beaucoup et antidouleur"
            ],
            [
            "name" => "Gonorrhée",
            "curable" => true,
            "treatment" => "antibiotiques"
            ],
            [
            "name" => "Hernie discale",
            "curable" => true,
            "treatment" => "se gueri par elle-même"
            ],
            [
            "name" => "Infection par le VIH ",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Intolérance au gluten (coeliaquie)",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Intolérance au lactose",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Ménopause",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Perte d'audition",
            "curable" => true,
            "treatment" => "Prescription de gouttes"
            ],
            [
            "name" => "Poux du pubis",
            "curable" => true,
            "treatment" => "raser les zones affectées."
            ],
            [
            "name" => "Ronflements",
            "curable" => true,
            "treatment" => "Régime, diminution de la consommation d'alcool"
            ],
            [
            "name" => "syndrome de Gougerot-Sjögren",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Syphilis",
            "curable" => true,
            "treatment" => "antibiotiques"
            ],
            [
            "name" => "Tuberculose",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Tétanos",
            "curable" => false,
            "treatment" => "",
            ],
            [
            "name" => "Varicelle",
            "curable" => true,
            "treatment" => "Eviter de gratter et se vacciner"
            ],
            [
            "name" => "Verrues génitales",
            "curable" => true,
            "treatment" => "Disparaissent spontanément"
            ],
        ]);
    }
}
