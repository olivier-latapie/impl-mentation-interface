<?php

interface LightableInterface
{
public function switchon(bool $switchon): bool;
public function switchoff(bool $switchoff): bool;



}