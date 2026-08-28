<?php
/**
 * Tests for ThriveSway
 */

use PHPUnit\Framework\TestCase;
use Thrivesway\Thrivesway;

class ThriveswayTest extends TestCase {
    private Thrivesway $instance;

    protected function setUp(): void {
        $this->instance = new Thrivesway(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Thrivesway::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
