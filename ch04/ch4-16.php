
<?php
	// 배열 원소 중 특정 값이 있는지 확인하기
	$meals = array('Walnut Bun' => 1,
					'Cashew Nuts and White Mushrooms' => 4.95,
					'Dried Mulberries' => 3.00,
					'Eggplant with Chili Sauce' => 6.50,
					'Shrimp Puffs' => 0);
	$books = array("이용객을 위한 A급 중국어 안내",
					'중국의 요리 방식과 식사 문화');
					
	if(in_array(3, $meals)) {
		print '가격이 $3 인 메뉴가 있습니다.';
	}
	
	if(in_array('중국의 요리 방식과 식사 문화', $books)) {
		print " 중국의 요리 방식과 식사 문화를 보실 수 있습니다.";
	}
	
	if(in_array("이용객을 위한 a급 중국어 안내",$books)) {
		print " 이용객을 위한 A급 중국어 안내를 보실 수 있습니다.";
	}
?>