<?php

use Tod2a\Stats\Functions\Average;

test("peux calculer la moyenne d'une liste", function () {
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});

it("Que se passe-t-il si on donne une liste vide", function () {
    $list = [];

    Average::calculate($list);
})->throws(DivisionByZeroError::class);

test("liste composée que de string", function () {
    $list = ["e", "r", "t", "y", "y"];

    expect(Average::calculate($list))->toBe(0.0);
});

test("list mixte", function () {
    $list = ["e", 4, "t", 4];

    expect(Average::calculate($list))->toBe(2.0);
});