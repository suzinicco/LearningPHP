<?php
class Entree {
    public $name;
    public $ingredients = array();

    //생성자
    public function __contruct($name, $ingredients) {
        
        if (is_array($ingredients)) {            
            # code...
            throw new Exception('$ingredients가 배열이 아닙니다.');            
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }

    public static function getSizes() {
        return array('소','중','대');
    }
}

// 객체를 생성하고 $soup에 할당
$soup = new Entree;
//$soup 속성 설정
$soup->name = '닭고기 수프';
$soup->ingredients = array('닭고기', '물');

//또 다른 인스턴스를 생성하고 $sandwich에 할당
$sandwich = new Entree;
//$sandwich 속성 설정
$sandwich->name = '닭고기 샌드위치';
$sandwich->ingredients = array('닭고기', '빵');

$drink = new Entree('우유 한 잔','우유','','','');

if($drink->hasIngredient('우유')) {
    print '$drink->name';
    print "맛있어!";
}

foreach(['닭고기','레몬','빵','물'] as $ing) {
    if($soup->hasIngredient($ing)) {
        print nl2br("수프의 재료 : $ing.\n");
    }
    if($sandwich->hasIngredient($ing)) {
        print nl2br("샌드위치의 재료 : $ing.\n");
    }
}



?>

