<?php

namespace Tests;

use Bnder\Factory;
use Mocks\SampleEntity;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testFactoryCreate(): void
    {
        $properties = ['email' => 'sample@email.local'];
        $factory = Factory::create(SampleEntity::class, $properties);

        $this->assertEquals($factory->getProperties(), $properties);
        $this->assertEquals(SampleEntity::class, $factory->getClass());
    }
}