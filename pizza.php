<?php
			$newpie = "";

			$commonPies = array(" cheese", " pepperoni", " sausage", " all-meat", " hawaiian", " margherita", " veggie"
			);

			$uncommonPies = array(" chicago-style deep dish", " breakfast", " buffalo chicken", " feta cheese and salami", " pineapple pepperoni"
			);

			$rarePies = array(" BBQ chicken", " chicken alfredo", " loaded baked-potato", " chocolate chip cookie",  " verde chicken enchilada", " taco quesadilla"
			);

			$legendaryPies = array(" boneless", " hotpocket™️");

			$randomNum = rand(1, 100);

			switch (true) {
				case ($randomNum < 55):
					$newPie = $commonPies[rand(1, count($commonPies)) - 1];
					break;
				case ($randomNum < 95):
					$newPie = $uncommonPies[rand(1, count($uncommonPies)) - 1];
					break;
				case ($randomNum < 100):
					$newPie = $rarePies[rand(1, count($rarePies)) - 1];
					break;
				case ($randomNum == 100):
					$newPie = $legendaryPies[rand(1, count($legendaryPies)) - 1];
					break;
				default:
					$newPie = $commonPies[rand(1, count($commonPies)) - 1];
			}

			$adjectives = array(" delicious", " tasty", " scrumptious", " heavenly", " delectable", " delightful", " yummy");
			
			$negAdjectives = array(" day-old", "n overcooked", " frozen");
			
			$adjNum = rand(1, 100);
			
			$pizzaAdj = ($adjNum > 10) ? $adjectives[rand(1, count($adjectives)) - 1] : $negAdjectives[rand(1, count($negAdjectives)) - 1];
			
			$crusts = array(" deep dish ", " thin crust ", " stuffed crust ");
			
			$crustType = "";
            if($newPie != "chicago-style deep dish" && $newPie != "breakfast" && $newPie != "chocolate chip cookie" && $newPie != "hotpocket™️") {
                $crustRandom = rand(1, 100);
                if($crustRandom > 85) {
                    $crustType = $crusts[rand(1, count($crusts)) - 1];
                }
            }
			
			echo $pizzaAdj . $crustType . $newPie;
			
?>

