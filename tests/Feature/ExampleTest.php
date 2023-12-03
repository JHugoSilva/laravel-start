<?php

test('Test PHP Pest.', function(){
    $reponse = $this->get('/');

    $reponse->assertStatus(200);
});