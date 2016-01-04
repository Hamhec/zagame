<?php

use Illuminate\Database\Seeder;

class ConceptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      $concept_id = 1;
      $domain_id = 1;
      // Cats domain
      //  --> cat
      DB::table('concepts')->insert([
       'name' => 'Cat',
       'description' => 'a cat.',
       'image' => 'http://rack.1.mshcdn.com/media/ZgkyMDEyLzEyLzA0L2QwL2NhdC5jNEEKcAl0aHVtYgkxNTB4MTUwIwplCWpwZw/4d610ee3/6a7/cat.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;
      //  --> cat food
      DB::table('concepts')->insert([
       'name' => 'Cat Food',
       'description' => 'The food that is specifically made for cats.',
       'image' => 'https://nodogaboutit.files.wordpress.com/2010/10/j0430956.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      //  --> Siamese Cat Breed
      DB::table('concepts')->insert([
       'name' => 'Siamese Cat Breed',
       'description' => 'a kind of cat.',
       'image' => 'https://i.ytimg.com/vi/1QtWKHogLxQ/hqdefault.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      //  --> Cat Owner
      DB::table('concepts')->insert([
       'name' => 'Cat owner',
       'description' => 'A person who owns a cat.',
       'image' => 'http://dykn.com/wp-content/uploads/2012/07/dailyworldfacts.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // DurDur
      // General
      $domain_id++;
      //  pedo-climatic condition
      DB::table('concepts')->insert([
       'name' => 'Pedoclimatic conditions',
       'description' => 'Conditions pédoclimatiques.',
       'image' => 'http://www.pediacognac.com/wp-content/uploads/2009/04/image34.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      //  protein quality
      DB::table('concepts')->insert([
       'name' => 'Protein quality',
       'description' => 'La qualité protéique.',
       'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/31/Protein_S100B_PDB_1b4c.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      //  process management
      DB::table('concepts')->insert([
       'name' => 'Process management',
       'description' => 'Gestion des procédé.',
       'image' => 'http://www.microc.com/images/childpage/icn-nitrate.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      //  Climate change
      DB::table('concepts')->insert([
       'name' => 'Climate change',
       'description' => 'Changements climatiques.',
       'image' => 'http://www.microc.com/images/childpage/icn-nitrate.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Regulation evolution
      DB::table('concepts')->insert([
       'name' => 'Regulation evolution',
       'description' => 'l\'évolution de la réglementation.',
       'image' => 'http://www.microc.com/images/childpage/icn-nitrate.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // EU nitrate directive
      DB::table('concepts')->insert([
       'name' => 'EU nitrate directive',
       'description' => 'Directive nitrates Européenne.',
       'image' => 'http://www.artisanfoodlaw.co.uk/sites/artisanfoodlaw.co.uk/files/eu_logo_01.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Pasta consumption
      DB::table('concepts')->insert([
       'name' => 'Pasta consumption',
       'description' => 'Consommation de pâtes alimentaires.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Agro
      $domain_id++;
      // Nitrogen Fertiliser
      DB::table('concepts')->insert([
       'name' => 'Nitrogen Fertilization',
       'description' => 'Fertilisation azotée.',
       'image' => 'http://www.australianmanufacturing.com.au/wp-content/uploads/2013/07/blue-fertilizer-2.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // cropping systems
      DB::table('concepts')->insert([
       'name' => 'Cropping Systems',
       'description' => 'Systèmes de culture.',
       'image' => 'http://www.spacedaily.com/images-lg/biofuel-cropping-system-lg.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Gain protein content
      DB::table('concepts')->insert([
       'name' => 'Grain protein content',
       'description' => 'Teneur en protéines des grains.',
       'image' => 'http://previewcf.turbosquid.com/Preview/2014/07/06__16_05_21/protein-3.jpg57eb1785-ca8f-4483-ad75-021ec49706e0Large.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // leguminous preceeding crop
      DB::table('concepts')->insert([
       'name' => 'Leguminous as previous crop',
       'description' => 'Précédent légumineuse.',
       'image' => 'http://agritech.tnau.ac.in/org_farm/images/inputs/crop-rotation-cnt.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // reduction of mycotoxin contamination
      DB::table('concepts')->insert([
       'name' => 'Reduction of mycotoxin contamination',
       'description' => 'Réduction de la contamination par les mycotoxines.',
       'image' => 'http://agritech.tnau.ac.in/org_farm/images/inputs/crop-rotation-cnt.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;
      // Grain quality`
      DB::table('concepts')->insert([
       'name' => 'Grain Quality',
       'description' => 'Qualité des grains.',
       'image' => 'http://agritech.tnau.ac.in/org_farm/images/inputs/crop-rotation-cnt.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Grain yield`
      DB::table('concepts')->insert([
       'name' => 'Grain yield',
       'description' => 'Rendement en grains.',
       'image' => 'http://agritech.tnau.ac.in/org_farm/images/inputs/crop-rotation-cnt.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;
      // Wheat Production`
      DB::table('concepts')->insert([
       'name' => 'Wheat Production',
       'description' => 'La production de blé.',
       'image' => 'http://agritech.tnau.ac.in/org_farm/images/inputs/crop-rotation-cnt.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Profile Transformation
      $domain_id++;
      // semolina yield
      DB::table('concepts')->insert([
       'name' => 'Semolina yield',
       'description' => 'Rendement semoulier.',
       'image' => 'http://www.kingarthurflour.com/item-img/3429_07_17_2012__10_53_49_700',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // pasta cooking quality
      DB::table('concepts')->insert([
       'name' => 'Pasta cooking quality',
       'description' => 'Qualité culinaire des pâtes alimentaires.',
       'image' => 'http://www.crissa.ca/images/Pasta-Dish.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;


      // protein content
      DB::table('concepts')->insert([
       'name' => 'Protein content',
       'description' => 'Teneur en protéines.',
       'image' => 'http://previewcf.turbosquid.com/Preview/2014/07/06__16_05_21/protein-3.jpg57eb1785-ca8f-4483-ad75-021ec49706e0Large.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // gluten tzenacity
      DB::table('concepts')->insert([
       'name' => 'Gluten quality',
       'description' => 'Qualité du gluten.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // debranning prior grain milling
      DB::table('concepts')->insert([
       'name' => 'Debranning prior grain milling',
       'description' => 'élimination des sons avant mouture.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // couscous processing
      DB::table('concepts')->insert([
       'name' => 'Couscous Processing',
       'description' => 'Fabrication de Couscous.',
       'image' => 'http://realfood.tesco.com/media/images/couscous-HERO-6e599284-1faa-40c1-9ba0-9575f190e509-0-472x310.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Pasta processing
      DB::table('concepts')->insert([
       'name' => 'Pasta Processing',
       'description' => 'Fabrication des pates.',
       'image' => 'http://realfood.tesco.com/media/images/couscous-HERO-6e599284-1faa-40c1-9ba0-9575f190e509-0-472x310.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Milling
      DB::table('concepts')->insert([
       'name' => 'Milling',
       'description' => 'Mouture.',
       'image' => 'http://realfood.tesco.com/media/images/couscous-HERO-6e599284-1faa-40c1-9ba0-9575f190e509-0-472x310.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;



      // Profile Socio-economic
      $domain_id++;

      // management risk
      DB::table('concepts')->insert([
       'name' => 'Risk management',
       'description' => 'Gestion du risque',
       'image' =>
       'www.dreamengine.com.au/wp-content/uploads/2012/11/video-production-risk.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // quality traceability
      DB::table('concepts')->insert([
       'name' => 'Traceability',
       'description' => 'Traçabilité.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Consumer behavior
      DB::table('concepts')->insert([
       'name' => 'Consumer behavior',
       'description' => 'Comportement du consommateur.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // sustainability
      DB::table('concepts')->insert([
       'name' => 'Sustainability',
       'description' => 'Durabilité.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Logistics
      DB::table('concepts')->insert([
       'name' => 'Logistics energy consumption',
       'description' => 'Consommation énergétique liée à la logistique.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;



      // Profile ACV
      $domain_id++;
      // reduction of mycotoxin contamination
      DB::table('concepts')->insert([
       'name' => 'Semolina production environmental impact',
       'description' => 'L\'impact environnemental de la production de semoule.',
       'image' => 'http://www.augustinc.com/fabrics/images/Drift%20mom/drift-semolina.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
      $concept_id++;

      // Recycling organic product
      DB::table('concepts')->insert([
       'name' => 'Stakeholder conflicts',
       'description' => 'Conflits entre parties prenantes.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => $domain_id,
          'concept_id' => $concept_id,
      ]);
    }
}
