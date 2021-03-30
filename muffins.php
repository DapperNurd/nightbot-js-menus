<?php
			$newMuffin = "";
			
			$commonMuffins = array(" banana nut muffin", " blueberry muffin", " lemon poppy seed muffin", " coconut muffin", " oatmeal muffin", " raspberry muffin"
			);

			$uncommonMuffins = array(" chocolate chip muffin", " cornbread muffin", " pumpkin muffin", " coffee cake muffin", " peanut butter muffin", " maple walnut muffin", " pecan muffin"
			);

			$rareMuffins = array(" chocolate chunk muffin", " apple cinnamon muffin", " snickerdoodle muffin"
			);

			$legendaryMuffins = array(" 'special' muffin");

			$randomNum = rand(1, 100);

			switch (true) {
				case ($randomNum < 55):
					$newMuffin = $commonMuffins[rand(1, count($commonMuffins)) - 1];
					break;
				case ($randomNum < 95):
					$newMuffin = $uncommonMuffins[rand(1, count($uncommonMuffins)) - 1];
					break;
				case ($randomNum < 100):
					$newMuffin = $rareMuffins[rand(1, count($rareMuffins)) - 1];
					break;
				case ($randomNum == 100):
					$newMuffin = $legendaryMuffins[rand(1, count($legendaryMuffins)) - 1];
					break;
				default:
					$newMuffin = $commonMuffins[rand(1, count($commonMuffins)) - 1];
			}
			
			$adjectives = array(" delicious", " tasty", " scrumptious", " heavenly", " delectable", " delightful", " yummy");
			
			$negAdjectives = array(" day-old", "n overcooked", " frozen");
			
			$adjNum = rand(1, 100);
			
			$muffinAdj = ($adjNum > 10) ? $adjectives[rand(1, count($adjectives)) - 1] : $negAdjectives[rand(1, count($negAdjectives)) - 1];

			echo $muffinAdj . $newMuffin;
			
?>