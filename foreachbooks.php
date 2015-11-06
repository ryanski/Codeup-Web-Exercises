<?php
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach($books as $title => $book){
	foreach($book as $key => $info){
	echo "$title's $key is $info\n";
	}
}
echo PHP_EOL;

foreach($books as $title => $book) {
echo "$title was written by {$book['author']}, published in {$book['published']} and has {$book['pages']} pages.\n";
}

echo PHP_EOL;

foreach($books as $title => $book){
	foreach($book as $key => $info){
			if($book['published']>=1950){
		echo "$title's $key is $info\n";
		}
	}
}