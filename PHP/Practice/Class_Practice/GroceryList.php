<?php


// class GroceryList {
    
//     public $list = [] ;
    
//     public function addItem($newItem) {
//         $this->list[] = $newItem;
//     }

//     public function getList() {
//         return implode('<br>', $this->list);
//     }

//     public function buy($item) {
//         // if(($item = array_search($item, $this->list)) !== false) {
//             // unset($this->list[$item]);
//         unset($this->list[array_search($item, $this->list)]);
//     }
// }

// $grocery_list = new GroceryList();

// $grocery_list->addItem('cereal');

// $grocery_list->addItem('oranges');

// $grocery_list->addItem('apples');

// $grocery_list->addItem('meat');

// $grocery_list->addItem('cheese');

// $grocery_list->addItem('milk');

// // print_r($grocery_list->list);

// // echo '<br>';

// $grocery_list->buy('cereal');

// $grocery_list->buy('milk');

// $grocery_list->buy('meat');

// // print_r($grocery_list->list);

// echo $grocery_list->getList();