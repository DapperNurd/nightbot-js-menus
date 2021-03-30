<!DOCTYPE html>
<html>
<body>
<?php
			$newpie = "";

			$commonPies = array(" pumpkin pie", " coconut cream pie", " banana cream pie", " strawberry rhubarb pie", " chocolate cream pie", " blueberry pie", " ice cream pie", " peach pie", " pear pie", " chicken pot pie", " cranberry pie", " pineapple pie", " turtle pie", " chocolate hazelnut pie", " mixed berry pie", " chestnut pie"
			);

			$uncommonPies = array(" apple pie", " cherry pie", " key lime pie", " lemon meringue pie", " blackberry pie", " raspberry pie", " pecan pie", " strawberry pie", " french silk pie", " custard pie", " chocolate peanut butter pie", " butterscotch pie", " mississippi mud pie", " caramel apple pie", " pizza pie", " cookies and cream pie", " boysenberry pie", " shepherd's pie", " mincemeat pie", " Boston cream pie"
			);

			$rarePies = array(" cheesecake", " prickly pear pie", " apple pie à la mode", " blackberry pie à la mode", " cherry pie à la mode", " raspberry pie à la mode", " boysenberry pie à la mode"
			);

			$legendaryPies = array(" creampie", " cow pie", " cutie pie");

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
			
			$negAdjectives = array(" day-old", " overcooked", " frozen");
			
			$adjNum = rand(1, 100);
			
			$pieAdj = ($adjNum > 10) ? $adjectives[rand(1, count($adjectives)) - 1] : $negAdjectives[rand(1, count($negAdjectives)) - 1];
			
			echo $pieAdj . $newPie;
			
?>
</body>
</html>
