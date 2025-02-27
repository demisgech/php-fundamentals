<?php
// Simple array
$items = ["Apple","Mango","Lemon","Pinaple","Mango"];
echo $items[0];
print_r($items);

if(isset($items[5])){
  echo ($items[5]);
}else {
  echo "Item doesn't exits";
}
# Associative array ['key' => ,"Value" ]
$associative_array = [
  'id'=> 1,
  'name'=>"Demis",
  'email'=> "demisgech@gmail.com"
];
echo("<br>");
print_r($associative_array);
echo("<br>");
print_r("{ id: {$associative_array['id']},
           name: {$associative_array["name"]} ,
           email: {$associative_array['email']} }");

?>

<style>
  ul {
    margin-top: 1rem;
    background:darkcyan;
    padding:1rem;
    border-radius:10px;
  }
  
  li {
    padding:2px;
    color:#fff;
    font-size:1.8rem;
    list-style:inline;
  }

</style>
<ul>
  <?php foreach ($items as $item): ?>
  <li>
    <?php echo $item ?>
  </li>
  <?php endforeach ?>
</ul>
