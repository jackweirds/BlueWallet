<?php
/**
 * Tests for BlueWallet
 */

use PHPUnit\Framework\TestCase;
use Bluewallet\Bluewallet;

class BluewalletTest extends TestCase {
    private Bluewallet $instance;

    protected function setUp(): void {
        $this->instance = new Bluewallet(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bluewallet::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
