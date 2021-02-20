<?
/**
 *  Бинарный(двоичный) поиск
 *  ! работает только с отсортированным массивом
 *  - основная суть алгоритма - дробление массива на половины
 *  - 
 * 
 *  Время выполнения O(logn)
 *  
 */

function binary_search($arr, $item, $start = 0, $final = null){
    if($final === null){
        $final = count($arr) - 1;
    }

    if($start > $final){
        return "Число не найдено";
    }

    $half = (int)(($start + $final) / 2);
    
    if($arr[$half] !== $item){
        if($arr[$half] < $item){
            $start = $half + 1;
        }else{
            $final = $half - 1;
        }        
        
        return binary_search($arr, $item, $start, $final);
    }

    return "Индекс числа ".$arr[$half].": ".$half;
}

echo binary_search([1,2,3,4,5,6,7], 3);
echo "\n";
print_r([1,2,3,4,5,6,7]);