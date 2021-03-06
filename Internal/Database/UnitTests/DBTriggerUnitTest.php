<?php namespace ZN\Database;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

class DBTriggerUnitTest extends \UnitTestController
{
    const unit =
    [
        'class'   => 'DBTrigger',
        'methods' =>
        [
            'user'          => ['p1'],
            'when'          => ['p1'],
            'event'         => ['p1'],
            'order'         => ['p1', 'p2'],
            'body'          => ['p1', 'p2', 'pn'],
            'createTrigger' => ['p1'],
            'dropTrigger'   => ['p1']
        ]
    ];
}
