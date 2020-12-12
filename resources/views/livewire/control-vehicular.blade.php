<div>
    <x-slot name="header">
        <div class="flex">
            <div class="flex-1">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    {{ __('Control Vehicular') }}
                </h2>
            </div>
            <div class="items-end justify-end">
                <div class="m-5">
                    <button class="bg-green-100 text-green-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-4 inline-flex items-center">
                        <i class="fas fa-car-side"></i>
                        <span class="pl-2 mr-2 hidden md:flex">
                            {{ __('Registrar') }}
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="py-6">
        <div class="container grid mx-auto">
            <div class="w-full mb-8 mt-9 overflow-hidden rounded-lg shadow-xs">


                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <link href="{{ asset('fullCalendar/main.css') }}" rel="stylesheet">
                <script src="{{ asset('fullCalendar/main.js') }}"></script>
                <script src="{{ asset('/fullCalendar/locales/es.js') }}"></script> 

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                    var calendarEl = document.getElementById('calendar');

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,listMonth'
                    },

                    locale: 'es',
                    firstDay: 1,
                    navLinks: true, // can click day/week names to navigate views
                    selectable: true,
                    selectMirror: true,
                    select: function (arg) {
                    var title = prompt('Agregar evento:');
                    if (title) {
                    calendar.addEvent({
                    title: title,
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay
                    })
                    }
                    calendar.unselect()
                    },
                    eventClick: function (arg) {
                    if (confirm('Are you sure you want to delete this event?')) {
                    arg.event.remove()
                    }
                    },
                    editable: true,
                    dayMaxEvents: true, // allow "more" link when too many events
                    events: [{
                    title: 'All Day Event',
                    start: '2020-12-01'
                    },
                    {
                    title: 'Long Event',
                    start: '2020-12-07',
                    end: '2020-12-10'
                    },
                    {
                    groupId: 999,
                    title: 'Repeating Event',
                    start: '2020-12-09T16:00:00'
                    },
                    {
                    groupId: 999,
                    title: 'Repeating Event',
                    start: '2020-12-16T16:00:00'
                    },
                    {
                    title: 'Conference',
                    start: '2020-12-11',
                    end: '2020-12-13'
                    },
                    {
                    title: 'Meeting',
                    start: '2020-12-12T10:30:00',
                    end: '2020-12-12T12:30:00'
                    },
                    {
                    title: 'Lunch',
                    start: '2020-12-12T12:00:00'
                    },
                    {
                    title: 'Meeting',
                    start: '2020-12-12T14:30:00'
                    },
                    {
                    title: 'Happy Hour',
                    start: '2020-12-12T17:30:00'
                    },
                    {
                    title: 'Dinner',
                    start: '2020-12-12T20:00:00'
                    },
                    {
                    title: 'Birthday Party',
                    start: '2020-12-13T07:00:00'
                    },
                    {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2020-12-28'
                    }
                    ]
                    });

                    calendar.render();
                    });

                </script>

                <div class="bg-white" id='calendar'></div>

            </div>
        </div>
    </div>
</div>