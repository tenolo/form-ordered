<?php

/*
 * This file is part of the Ivory Ordered Form package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Tenolo\FormOrdered\Tests;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $exception
     */
    public function expectException($exception)
    {
        if (is_callable('parent::expectException')) {
            return parent::expectException($exception);
        }

        return $this->setExpectedException($exception);
    }

    /**
     * @param string $originalClassName
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function createMock($originalClassName)
    {
        if (is_callable('parent::createMock')) {
            return parent::createMock($originalClassName);
        }

        return $this->getMock($originalClassName);
    }
}
