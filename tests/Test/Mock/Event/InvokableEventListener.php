<?php
/*
 * This file is part of the Cqrs package.
 * (c) Manfred Weber <manfred.weber@gmail.com> and Alexander Miertsch <kontakt@codeliner.ws>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Test\Mock\Event;

class InvokableEventListener
{
    protected $mockEventMessage;
    
    /**
     * Listen on MockEvents
     * 
     * @param Test\Mock\Event\MockEvent $event
     */
    public function __invoke(MockEvent $event)
    {
        $this->mockEventMessage = $event->getArguments()['message'];
    }
    
    public function getMockEventMessage() {
        return $this->mockEventMessage;
    }
}
