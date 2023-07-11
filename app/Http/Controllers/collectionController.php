<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collectionController extends Controller
{
    //
    public function collections()
    {
        $collect = collect([10, 20, 30, 40, 50, 60, 70, 80, 90]);
        // dd($collect)->all();     // object apse akho
        // $data = $collect->all();
        // dd($data);      // only array apse
        // $data = $collect->avg();
        // $data = $collect->chunk(4);
        // $data = $collect->reverse();
        // $data = $collect->map(function($item , $key) {
        //     return $item * 10;
        // })->reverse()->all();
        // dd($data);

        // $average = collect([
        //     ['foo' => 10],
        //     ['fooo' => 10],
        //     ['foo' => 20],
        //     ['fooo' => 40]
        // ])->avg('foo');     // avg('fooo') kari to ae pramaen avse
        // dd($average);

        // $collection = collect([
        //     [1, 2, 3],
        //     [4, 5, 6],
        //     [7, 8, 9],
        // ]);
        // $collapsed = $collection->collapse();
        // dd($collapsed->all());

        // $collection = collect(['name', 'age']);
        // $combined = $collection->combine(['George', 29]);
        // dd($combined->all());

        // $collection = collect([1, 2, 3, 4, 5]);
        // $collection->contains(function (int $value, int $key) {
        //     return $value > 5;
        // });
        // // false
        // check karse condition kee avu kay che ke nyy collection ma m
        // $collection = collect(['name' => 'Desk', 'price' => 100]);
        // $collection->contains('Desk');
        // // true
        // $collection->contains('New York');
        // // false
        // containsOneItem()   -->> one item j hase to true baki false
        // doesntContain()  -->> onu reverse

        // concat  -->> add karse last ma

        // count() ma badha no totel avse countBy()  ma aek aek digists no
        // $collection = collect([1, 2, 2, 2, 3]);
        // $counted = $collection->countBy();
        // $counted->all();
        // // [1 => 1, 2 => 3, 3 => 1]

        // crossJoin() --> normal j Cartesian product

        // The diff method compares the collection against another collection or a plain PHP array based on its values.
        // diffAssoc()
        // diffKeys()

        // The dot method flattens a multi-dimensional collection into a single level collection that uses "dot" notation to indicate depth:
        // $collection = collect(['products' => ['desk' => ['price' => 100]]]);
        // $flattened = $collection->dot();
        // $flattened->all();
        // // ['products.desk.price' => 100]

        // The duplicates method retrieves and returns duplicate values from the collection:
        // $collection = collect(['a', 'b', 'a', 'c', 'b']);
        // 0   1    2    3     4
        // $collection->duplicates();
        // [2 => 'a', 4 => 'b']

        // duplicatesStrict()

        // The each method iterates over the items in the collection and passes each item to a closure:

        //         eachSpread()
        // The eachSpread method iterates over the collection's items, passing each nested item value into the given callback:
        // $collection = collect([['John Doe', 35], ['Jane Doe', 33]]);
        // $collection->eachSpread(function (string $name, int $age) {
        //     // ...
        // });

        // every()      // eany and all jevo
        // The every method may be used to verify that all elements of a collection pass a given truth test:
        // collect([1, 2, 3, 4])->every(function (int $value, int $key) {
        //     return $value > 2;
        // });
        // false

        // The except method returns all items in the collection except for those with the specified keys:

        // filter()
        //         If no callback is supplied, all entries of the collection that are equivalent to false will be removed:
        // $collection = collect([1, 2, 3, null, false, '', 0, []]);
        // $collection->filter()->all();
        // // [1, 2, 3]


        // first()       // condition lagu padse pachi je peli value hase ae return karse
        // The first method returns the first element in the collection that passes a given truth test:
        // collect([1, 2, 3, 4])->first(function (int $value, int $key) {
        // return $value > 2;
        // });

        // firstOrFail()
        // You may also call the firstOrFail() method with no arguments to get the first element in the collection. If the collection is empty, an Illuminate\Support\ItemNotFoundException exception will be thrown:

        // firstWhere()     // pelu ke jya aa condition lagu pade che ae apo apane

        // flatMap()
        // $collection = collect([
        //     ['name' => 'Sally'],
        //     ['school' => 'Arkansas'],
        //     ['age' => 28]
        // ]);
        // $flattened = $collection->flatMap(function (array $values) {
        //     return array_map('strtoupper', $values);
        // });
        // $flattened->all();
        // ['name' => 'SALLY', 'school' => 'ARKANSAS', 'age' => '28'];

        //         flatten()
        // The flatten method flattens a multi-dimensional collection into a single dimension:
        // $collection = collect([
        //     'Apple' => [
        //         [
        //             'name' => 'iPhone 6S',
        //             'brand' => 'Apple'
        //         ],
        //     ],
        //     'Samsung' => [
        //         [
        //             'name' => 'Galaxy S7',
        //             'brand' => 'Samsung'
        //         ],
        //     ],
        // ]);
        // $products = $collection->flatten(1);
        // $products->values()->all();
        /*
            [
                ['name' => 'iPhone 6S', 'brand' => 'Apple'],
                ['name' => 'Galaxy S7', 'brand' => 'Samsung'],
            ]
        */

        // The flip method swaps the collection's keys with their corresponding values:

        // The forget method removes an item from the collection by its key:

        // forPage()
        // The forPage method returns a new collection containing the items that would be present on a given page number. The method accepts the page number as its first argument and the number of items to show per page as its second argument:
        // $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        // $chunk = $collection->forPage(2, 3);
        // $chunk->all();
        // // [4, 5, 6]

        // The get method returns the item at a given key. If the key does not exist, null is returned:
        // You may optionally pass a default value as the second argument:      // jo key nyy male yo default kamnu baki ae nyy ave

        // The groupBy method groups the collection's items by a given key:

        // The hasAny method determines whether any of the given keys exist in the collection:

        // intersect()      // diff()  nu oltu
        // The intersect method removes any values from the original collection that are not present in the given array or collection. The resulting collection will preserve the original collection's keys:

        // The isEmpty method returns true if the collection is empty; otherwise, false is returned

        // collect(['a', 'b', 'c'])->join(', '); // 'a, b, c'
        // collect(['a', 'b', 'c'])->join(', ', ', and '); // 'a, b, and c'
        // collect(['a', 'b'])->join(', ', ' and '); // 'a and b'
        // collect(['a'])->join(', ', ' and '); // 'a'
        // collect([])->join(', ', ' and '); // ''

        // The keyBy method keys the collection by the given key. If multiple items have the same key, only the last one will appear in the new collection:

        // The keys method returns all of the collection's keys:

        // The last method returns the last element in the collection that passes a given truth test:

        // The push method appends an item to the end of the collection:
        // The put method sets the given key and value in the collection:

        // $collection = collect()->range(3, 6);    // [3, 4, 5, 6]

        // The reduce method reduces the collection to a single value, passing the result of each iteration into the subsequent iteration:

        // The reject method filters the collection using the given closure. The closure should return true if the item should be removed from the resulting collection:
        // $collection = collect([1, 2, 3, 4]);
        // $filtered = $collection->reject(function (int $value, int $key) {
        //     return $value > 2;
        // });
        // $filtered->all();   // [1, 2]
        // For the inverse of the reject method, see the filter method.

        // The replace method behaves similarly to merge; however, in addition to overwriting matching items that have string keys, the replace method will also overwrite items in the collection that have matching numeric keys:
        // $collection = collect(['Taylor', 'Abigail', 'James']);
        // $replaced = $collection->replace([1 => 'Victoria', 3 => 'Finn']);
        // $replaced->all();
        // // ['Taylor', 'Victoria', 'James', 'Finn']

        // The reverse method reverses the order of the collection's items, preserving the original keys:

        // The search method searches the collection for the given value and returns its key if found. If the item is not found, false is returned:

        // $collection = collect([1, 2, 3, 4, 5]);
        // $collection->shift(3);   // jetala delete karva hoy aetala digits pan api sakay che default 1 one
        // // collect([1, 2, 3])
        // $collection->all();
        // // [4, 5]

        // The shuffle method randomly shuffles the items in the collection:

        // The skip method returns a new collection, with the given number of elements removed from the beginning of the collection:

        // $collection = collect([1, 2, 3, 4]);
        // $subset = $collection->skipUntil(function (int $item) {
        //     return $item >= 3;       // ->skipUntil(3)   aam pan api saki
        // });
        // $subset->all();
        // // [3, 4]

        // skipWhile()

        // The slice method returns a slice of the collection starting at the given index:

        // The sliding method returns a new collection of chunks representing a "sliding window" view of the items in the collection:
        //         $collection = collect([1, 2, 3, 4, 5]);
        // $chunks = $collection->sliding(2);
        // $chunks->toArray();
        // [[1, 2], [2, 3], [3, 4], [4, 5]]
        //         $collection = collect([1, 2, 3, 4, 5]);
        // $chunks = $collection->sliding(3, step: 2);
        // $chunks->toArray();
        // // [[1, 2, 3], [3, 4, 5]]

        // some()      Alias for the contains method.

        // sort()
        // sortBy()
        // sortByDesc()
        // sortDesc()
        // sortKeys()
        // sortKeysDesc()
        // sortKeysUsing()

        // The splice method removes and returns a slice of items starting at the specified index:

        // The split method breaks a collection into the given number of groups:
        // $collection = collect([1, 2, 3, 4, 5]);
        // $groups = $collection->split(3);
        // $groups->all();
        // // [[1, 2], [3, 4], [5]]

        // $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        // $groups = $collection->splitIn(3);
        // $groups->all();
        // // [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10]]

        // sum()

        // The take method returns a new collection with the specified number of items:
        //     $collection = collect([0, 1, 2, 3, 4, 5]);
        //     $chunk = $collection->take(3);       ->take(-2);     ->takeUntil(3)
        //     $chunk->all();
        //     // [0, 1, 2]
        // The takeUntil method returns items in the collection until the given callback returns true:
        // The takeWhile method returns items in the collection until the given callback returns false:

        // The tap method passes the collection to the given callback, allowing you to "tap" into the collection at a specific point and do something with the items while not affecting the collection itself. The collection is then returned by the tap method:
        //             collect([2, 4, 3, 1, 5])
        //     ->sort()
        //     ->tap(function (Collection $collection) {
        //         Log::debug('Values after sorting', $collection->values()->all());
        //     })
        //     ->shift();
        // // 1

        // The static times method creates a new collection by invoking the given closure a specified number of times:
        //     $collection = Collection::times(10, function (int $number) {
        //         return $number * 9;
        //     });
        //     $collection->all();
        //     // [9, 18, 27, 36, 45, 54, 63, 72, 81, 90]

        // toArray()
        // toJson()

        //         transform()
        // The transform method iterates over the collection and calls the given callback with each item in the collection. The items in the collection will be replaced by the values returned by the callback:
        // $collection = collect([1, 2, 3, 4, 5]);
        // $collection->transform(function (int $item, int $key) {
        //     return $item * 2;
        // });
        // $collection->all();
        // // [2, 4, 6, 8, 10]

        // The undot method expands a single-dimensional collection that uses "dot" notation into a multi-dimensional collection:

        //         The union method adds the given array to the collection. If the given array contains keys that are already in the original collection, the original collection's values will be preferred:
        // $collection = collect([1 => ['a'], 2 => ['b']]);
        // $union = $collection->union([3 => ['c'], 1 => ['d']]);
        // $union->all();
        // // [1 => ['a'], 2 => ['b'], 3 => ['c']]

        //         unique()
        // The unique method returns all of the unique items in the collection. The returned collection keeps the original array keys, so in the following example we will use the values method to reset the keys to consecutively numbered indexes:
        // $collection = collect([1, 1, 2, 2, 3, 4, 2]);
        // $unique = $collection->unique();
        // $unique->values()->all();
        // // [1, 2, 3, 4]

        // The value method retrieves a given value from the first element of the collection:

        //         The zip method merges together the values of the given array with the values of the original collection at their corresponding index:
        // $collection = collect(['Chair', 'Desk']);
        // $zipped = $collection->zip([100, 200]);
        // $zipped->all();
        // // [['Chair', 100], ['Desk', 200]]
    }
}
