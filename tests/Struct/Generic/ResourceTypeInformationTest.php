<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ResourceTypeInformationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ResourceTypeInformationTest extends StructTestCase
{
    /**
     * @var ResourceTypeInformation
     */
    private $subject;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->subject = new ResourceTypeInformation(
            1235,
            'some description'
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(1235, $this->subject->getId());
    }

    public function testGetDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getDescription());
    }
}
