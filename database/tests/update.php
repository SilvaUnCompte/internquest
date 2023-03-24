<?php
$updateResult = $empcollection->updateOne(
    ['name' => 'Andrew'],
    ['$set' => ['age' => '29']]
);
printf("Matched %d documents \n", $updateResult->getMatchedCount());
printf("Modified %d documents \n", $updateResult->getModifiedCount());
?>