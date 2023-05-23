<?php
class MyMagicClass{

    private $arr = array(); //[];
    public function __set($attribute, $value){
        $this->arr[$attribute] = $value;
    }
    public function __get($attribute){
        if(array_key_exists($attribute, $this->arr)){
            return $this->arr[$attribute];
        }else{
            echo 'Error';
        }
    }
    
    
}
$object = new MyMagicClass();
$object->dynamicAttribute = 'iam magic';//set부르는 방식
echo $object -> dynamicAttribute."<br>";//get부르는 방식

/*
애트리뷰트 오버로딩:
  public __get(string $attribute) : mixed
  public __set(string $attribute, mixed $value)

*/
?>