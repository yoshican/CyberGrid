<?php
/**
 * Tests for CyberGrid
 */

use PHPUnit\Framework\TestCase;
use Cybergrid\Cybergrid;

class CybergridTest extends TestCase {
    private Cybergrid $instance;

    protected function setUp(): void {
        $this->instance = new Cybergrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cybergrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
