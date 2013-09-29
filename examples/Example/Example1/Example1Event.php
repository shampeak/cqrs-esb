<?php
/*
 * This file is part of the Cqrs package.
 * (c) Manfred Weber <crafics@php.net> and Alexander Miertsch <kontakt@codeliner.ws>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Example\Example1;

use Cqrs\Event\EventInterface;
use Cqrs\Message;

/**
 * Class Example1Event
 *
 * @author Manfred Weber <crafics@php.net>
 * @package Example1
 */
class Example1Event extends Message implements EventInterface
{
    /**
     * @var bool
     */
    protected $edited = false;

    /**
     *
     */
    public function edit()
    {
        $this->edited = true;
    }

    /**
     * @return bool
     */
    public function isEdited()
    {
        return $this->edited;
    }
}
