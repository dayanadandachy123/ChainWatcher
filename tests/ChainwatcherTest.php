<?php
/**
 * Tests for ChainWatcher
 */

use PHPUnit\Framework\TestCase;
use Chainwatcher\Chainwatcher;

class ChainwatcherTest extends TestCase {
    private Chainwatcher $instance;

    protected function setUp(): void {
        $this->instance = new Chainwatcher(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainwatcher::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
