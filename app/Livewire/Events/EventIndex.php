<?php

namespace App\Livewire\Events;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class EventIndex extends Component
{
    public $sortedEvents;

    public function mount(int $year = null)
    {
        $year = $year ?? Carbon::now()->year;
        $this->sortedEvents = $this->getSortedEvents($year);
    }

    public function render()
    {
        return view('livewire.events.event-index');
    }

    protected function getSortedEvents(int $year): array
    {
        $events = [];
        $eventCollection = Event::whereYear('start', $year)
            ->with('group')
            ->get();
        foreach ($eventCollection as $event) {
            $events[$event->start->format('Y')][$event->start->format('F')][] = $event;
        }

        return $events;
    }
}
