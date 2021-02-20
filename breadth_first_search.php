<?

/**
 *  Поиск в ширину (BFS)
 *  - применяется в графах
 *  - поиск в ширину позволяет найти кратчайшее расстояние между двумя обьектами
 *  - суть алгоритма в том, что мы сначала рассматриваем родителя, потом по очереди
 *  рассматриваем его предков, потом рассматриваем предков его предков и тд. http://joxi.ru/v29RRzeCpD4XOA
 * 
 *  Время выполнения O(|V| + |E|)
 */

$graph = [
    'A' => ['B', 'C', 'D', 'Z'],
    'B' => ['A', 'E'],
    'C' => ['A', 'F', 'G'],
    'D' => ['A', 'I'],
    'E' => ['B', 'H'],
    'F' => ['C', 'J'],
    'G' => ['C'],
    'H' => ['E', 'Z'],
    'I' => ['D'],
    'J' => ['J'],
    'Z' => ['A', 'H']
];

function bfs($graph, $startNode = 'A')
{
    $visited = [];
    $queue = [];

    $queue[] = $graph[$startNode];
    $visited[$startNode] = true;

    while (count($queue) > 0) {
        $currentNodeAdj = array_pop($queue);
        echo '<pre>';print_r($currentNodeAdj);echo '</pre>';die();

        foreach ($currentNodeAdj as $vertex) {
            if (!array_key_exists($vertex, $visited)) {
                array_unshift($queue, $graph[$vertex]);
            }

            $visited[$vertex] = true;
        }
    }
}