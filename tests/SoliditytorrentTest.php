<?php
/**
 * Tests for SolidityTorrent
 */

use PHPUnit\Framework\TestCase;
use Soliditytorrent\Soliditytorrent;

class SoliditytorrentTest extends TestCase {
    private Soliditytorrent $instance;

    protected function setUp(): void {
        $this->instance = new Soliditytorrent(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditytorrent::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
