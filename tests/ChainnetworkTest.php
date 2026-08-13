<?php
/**
 * Tests for ChainNetwork
 */

use PHPUnit\Framework\TestCase;
use Chainnetwork\Chainnetwork;

class ChainnetworkTest extends TestCase {
    private Chainnetwork $instance;

    protected function setUp(): void {
        $this->instance = new Chainnetwork(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainnetwork::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
