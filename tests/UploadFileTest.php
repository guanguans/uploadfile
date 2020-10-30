<?php

/*
 * This file is part of the guanguans/uploadfile.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Tests;

use Guanguans\UploadFile;
use PHPUnit\Framework\TestCase;

class UploadFileTest extends TestCase
{
    protected $UploadFile;

    public function setUp()
    {
        $this->UploadFile = new UploadFile();
    }

    public function testGetErrorMsg()
    {
        $this->assertNotEmpty('this is a test');
    }
}
