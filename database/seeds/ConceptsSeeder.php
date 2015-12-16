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
      // Cats domain
      //  --> cat
      DB::table('concepts')->insert([
       'name' => 'Cat',
       'description' => 'a cat.',
       'image' => 'http://rack.1.mshcdn.com/media/ZgkyMDEyLzEyLzA0L2QwL2NhdC5jNEEKcAl0aHVtYgkxNTB4MTUwIwplCWpwZw/4d610ee3/6a7/cat.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 1,
          'concept_id' => 1,
      ]);
      //  --> cat food
      DB::table('concepts')->insert([
       'name' => 'Cat Food',
       'description' => 'The food that is specifically made for cats.',
       'image' => 'https://nodogaboutit.files.wordpress.com/2010/10/j0430956.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 1,
          'concept_id' => 2,
      ]);

      //  --> Siamese Cat Breed
      DB::table('concepts')->insert([
       'name' => 'Siamese Cat Breed',
       'description' => 'a kind of cat.',
       'image' => 'https://i.ytimg.com/vi/1QtWKHogLxQ/hqdefault.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 1,
          'concept_id' => 3,
      ]);

      //  --> Cat Owner
      DB::table('concepts')->insert([
       'name' => 'Cat owner',
       'description' => 'A person who owns a cat.',
       'image' => 'http://dykn.com/wp-content/uploads/2012/07/dailyworldfacts.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 1,
          'concept_id' => 4,
      ]);

      // DurDur
      // General
      //  nitrogen-protein-contaminants
      DB::table('concepts')->insert([
       'name' => 'Nitrogen Protein Contaminants',
       'description' => 'Contaminants d\'azote des protéines.',
       'image' => 'http://www.microc.com/images/childpage/icn-nitrate.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 5,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 5,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 5,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 5,
      ]);

      //  pedo-climatic condition
      DB::table('concepts')->insert([
       'name' => 'Pedo-climatic conditions',
       'description' => 'Conditions pedo-climatiques.',
       'image' => 'http://www.pediacognac.com/wp-content/uploads/2009/04/image34.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 6,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 6,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 6,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 6,
      ]);

      //  protein quality
      DB::table('concepts')->insert([
       'name' => 'Protein quality',
       'description' => 'La qualité des protéines.',
       'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/31/Protein_S100B_PDB_1b4c.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 7,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 7,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 7,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 7,
      ]);

      //  process management
      DB::table('concepts')->insert([
       'name' => 'Process management',
       'description' => 'Process Management.',
       'image' => 'http://www.microc.com/images/childpage/icn-nitrate.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 8,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 8,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 8,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 8,
      ]);

      //  Climate change
      DB::table('concepts')->insert([
       'name' => 'Climate change',
       'description' => 'Changement climatique.',
       'image' => 'http://www.microc.com/images/childpage/icn-nitrate.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 9,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 9,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 9,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 9,
      ]);

      // Regulation evolution
      DB::table('concepts')->insert([
       'name' => 'Regulation evolution',
       'description' => 'l\'évolution de la réglementation.',
       'image' => 'http://www.microc.com/images/childpage/icn-nitrate.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 10,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 10,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 10,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 10,
      ]);

      // EU nitrate directive
      DB::table('concepts')->insert([
       'name' => 'EU nitrate directive',
       'description' => 'Directive de l\'UE sur les nitrates.',
       'image' => 'http://www.artisanfoodlaw.co.uk/sites/artisanfoodlaw.co.uk/files/eu_logo_01.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 11,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 11,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 11,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 11,
      ]);

      // EU nitrate directive
      DB::table('concepts')->insert([
       'name' => 'Pasta consumption',
       'description' => 'La consommation de pâtes.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 12,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 12,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 12,
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 12,
      ]);

      // Agro
      // Nitrogen Fertiliser
      DB::table('concepts')->insert([
       'name' => 'Nitrogen Fertiliser',
       'description' => 'Engrais azoté.',
       'image' => 'http://www.australianmanufacturing.com.au/wp-content/uploads/2013/07/blue-fertilizer-2.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 13,
      ]);
      // cropping systems
      DB::table('concepts')->insert([
       'name' => 'Cropping Systems',
       'description' => 'Systèmes de Culture.',
       'image' => 'http://www.spacedaily.com/images-lg/biofuel-cropping-system-lg.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 14,
      ]);
      // Gain protein content
      DB::table('concepts')->insert([
       'name' => 'Gain protein content',
       'description' => 'Gagner en teneur en protéines.',
       'image' => 'http://previewcf.turbosquid.com/Preview/2014/07/06__16_05_21/protein-3.jpg57eb1785-ca8f-4483-ad75-021ec49706e0Large.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 15,
      ]);
      // leguminous preceeding crop
      DB::table('concepts')->insert([
       'name' => 'Leguminous preceding crop',
       'description' => 'Culture légumineuse précédente.',
       'image' => 'http://agritech.tnau.ac.in/org_farm/images/inputs/crop-rotation-cnt.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 16,
      ]);
      // reduction of mycotoxin contamination
      DB::table('concepts')->insert([
       'name' => 'Reduction of mycotoxin contamination',
       'description' => 'Réduction de la contamination par les mycotoxines.',
       'image' => 'http://agritech.tnau.ac.in/org_farm/images/inputs/crop-rotation-cnt.png',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 17,
      ]);
      // Recycling organic product
      DB::table('concepts')->insert([
       'name' => 'Recycling organic products',
       'description' => 'Recyclage des produits organique.',
       'image' => 'http://www.coulette.ch/wp-content/uploads/2013/04/recycler-sigle.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 2,
          'concept_id' => 18,
      ]);

      // Profile Transformation
      // semolina yield
      DB::table('concepts')->insert([
       'name' => 'Semolina yield',
       'description' => 'Rendement en semoule.',
       'image' => 'http://www.kingarthurflour.com/item-img/3429_07_17_2012__10_53_49_700',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 19,
      ]);
      // pasta cooking quality
      DB::table('concepts')->insert([
       'name' => 'Pasta cooking quality',
       'description' => 'La qualité de cuisson des pâtes.',
       'image' => 'http://www.crissa.ca/images/Pasta-Dish.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 20,
      ]);
      // protein content
      DB::table('concepts')->insert([
       'name' => 'Protein content',
       'description' => 'la teneur en protéines.',
       'image' => 'http://previewcf.turbosquid.com/Preview/2014/07/06__16_05_21/protein-3.jpg57eb1785-ca8f-4483-ad75-021ec49706e0Large.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 21,
      ]);
      // gluten tzenacity
      DB::table('concepts')->insert([
       'name' => 'Gluten tenacity',
       'description' => 'Ténacité en Gluten.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 22,
      ]);
      // debranning prior grain milling
      DB::table('concepts')->insert([
       'name' => 'Debranning prior grain milling',
       'description' => 'Debranning avant mouture des grains.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 23,
      ]);
      // couscous processing
      DB::table('concepts')->insert([
       'name' => 'Couscous Processing',
       'description' => 'Traitement de Couscous.',
       'image' => 'http://realfood.tesco.com/media/images/couscous-HERO-6e599284-1faa-40c1-9ba0-9575f190e509-0-472x310.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 3,
          'concept_id' => 24,
      ]);


      // Profile Socio-economic
      // Production risk
      DB::table('concepts')->insert([
       'name' => 'Production risk',
       'description' => 'Risque de production.',
       'image' => 'http://www.dreamengine.com.au/wp-content/uploads/2012/11/video-production-risk.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 25,
      ]);
      // management risk
      DB::table('concepts')->insert([
       'name' => 'Management risk',
       'description' => 'les risques de gestion.',
       'image' => 'http://www.dreamengine.com.au/wp-content/uploads/2012/11/video-production-risk.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 26,
      ]);
      // quality traceability
      DB::table('concepts')->insert([
       'name' => 'Quality traceability',
       'description' => 'Traçabilité de la qualité.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 27,
      ]);
      // Consumer behavior
      DB::table('concepts')->insert([
       'name' => 'Consumer behavior',
       'description' => 'Comportement du consommateur.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 28,
      ]);
      // sustainability
      DB::table('concepts')->insert([
       'name' => 'Sustainability',
       'description' => 'Durabilité.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 29,
      ]);
      // Logistics
      DB::table('concepts')->insert([
       'name' => 'Logistics',
       'description' => 'Logistiques.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 4,
          'concept_id' => 30,
      ]);


      // Profile ACV
      // reduction of mycotoxin contamination
      DB::table('concepts')->insert([
       'name' => 'Semolina environmental impact',
       'description' => 'L\'impact environnemental de la semoule.',
       'image' => 'http://www.augustinc.com/fabrics/images/Drift%20mom/drift-semolina.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 31,
      ]);
      // Recycling organic product
      DB::table('concepts')->insert([
       'name' => 'Stakeholder conflicts',
       'description' => 'Conflits des parties prenantes.',
       'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 5,
          'concept_id' => 32,
      ]);
    }
}
