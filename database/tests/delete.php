<?php
$deleteResult = $empcollection->deleteOne(
    ['_id' => '4']
);
printf("Deleted %d documents", $deleteResult->getDeletedCount());

/*
$deleteResult = $empcollection->deleteMany(
    ['name' => 'Ethan']
);
printf("Deleted %d documents", $deleteResult->getDeletedCount());
*/
?>