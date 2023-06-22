<?php
class Football
{
    // function __construct() {
//     return "Football";
// }
}
class Game
{
    public $football;
    function __construct(Football $football)
    {
        $this->football = $football;
    }
}
// app()->bind('Playgame', function () {
//     return new Game(new Football());
// });
// dd(app()->make('Playgame'));

// dd(resolve("Game"));

// app()->instance('Game', function() {
//     return 'Instance';
// });

// dd(app());

// app()->bind('random' , function() {
//     return Str::random();
// });

app()->singleton('random' , function() {
    return Str::random();
});
dump(app()->make('random'));
dd(app()->make('random'));
 
?>
