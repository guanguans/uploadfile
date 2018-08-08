<?php

namespace Guanguans\Tests;

use PHPUnit\Framework\TestCase;
use Guanguans\UploadFile;

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