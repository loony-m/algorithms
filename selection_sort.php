<?

/**
*   Сортировка выбором
*   - проходимся по списку и находим первый самый минимальный элемент
*   - потом проходимся по оставшимся элементам и среди них ищет самый минимальный элементы 
*   и перемещает его после нашего первого элемента в отсортированной части
*   Время выполнения O(N^2)
*   https://www.youtube.com/watch?v=uCbV2xHxalk
*/

$count = count($arr);
for($i = 0; $i < $count - 1; $i++){
    $min = $i;

    for($e = $i + 1; $e < $count; $e++){
        if($arr[$e] < $arr[$min]){
            $min = $e
        }
    }

    $temp = $arr[$i];
    $arr[$i] = $arr[$min];
    $arr[$min] = $temp;
}