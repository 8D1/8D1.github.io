<?php

use PHPUnit\Framework\TestCase;

final class ParseTest extends TestCase {
    public function testParse(): void {
        $files = glob("{*.php,**/*.php}", GLOB_BRACE);
        foreach ($files as $file) {
            $result = exec("php -l $file");
            // Check for failure
            self::assertStringNotContainsStringIgnoringCase("fail", $result);
            self::assertStringNotContainsStringIgnoringCase("errors parsing", $result);
            self::assertStringNotContainsStringIgnoringCase("error:", $result);
            self::assertStringNotContainsStringIgnoringCase("warning:", $result);
            // Check for success
            self::assertStringContainsString("No syntax errors detected in ", $result);
        }
    }
}
