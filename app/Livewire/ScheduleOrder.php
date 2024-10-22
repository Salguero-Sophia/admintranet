<?php

namespace App\Livewire;

use DateTime;
use DateTimeZone;
use Livewire\Component;

class ScheduleOrder extends Component
{
    public $today;
    public $redirectTo;
    public $slug;
    public $maxDateToSchedule;

    public function mount($redirectTo, $slug)
    {
        $this->redirectTo = $redirectTo;

        $this->slug = $slug;
    }

    public function render()
    {
        $this->today = new DateTime();

        $this->today->setTimezone(new DateTimeZone('America/Chicago'));

        $this->today = $this->today->format('Y-m-d\TH:i:s');

        $maxDate = new DateTime('+5 days');
        $maxDate->setTimezone(new DateTimeZone('America/Chicago'));
        $this->maxDateToSchedule = $maxDate->format('Y-m-d\TH:i:s');

        return view('livewire.schedule-order');
    }
}
