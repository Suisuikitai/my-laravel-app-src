<?php

$descriptorspec = [
    0 => ["pipe", "r"],
    1 => ["pipe", "w"],
    2 => ["pipe", "w"]
];

$process = proc_open("php",  $descriptorspec, $pipes);

if (is_resource($process)) {
    fwrite($pipes[0], '<?php echo "hello from input!\n";');
    fclose($pipes[0]);

    echo stream_get_contents($pipes[1]);
    fclose($pipes[1]);
    fclose($pipes[2]);

    proc_close($process);
}

function sayHello(string $word): string {
    return "Hello {$word}!";
}

$wordsToSay = sayHello("world");
echo $wordsToSay . "\n";

