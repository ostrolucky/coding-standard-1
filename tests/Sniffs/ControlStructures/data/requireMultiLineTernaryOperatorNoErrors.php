<?php

$a = $b ?: true;

$a = $b
	? true
	: false;

$a = $b === 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb' ? 'bbbb' : 'ccccccccccccc';

$array[$b === 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb' ? 'bbbb' : 'ccccccc'] = 'b';

doSomething($b === 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb' ? 'bbbb' : 'ccccccc');
