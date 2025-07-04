<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.events_title') }}" />


    <div class="container mx-auto my-24 ">
        <div class="w-3/4 mx-auto mb-16 text-center md:w-1/2">
            <h1 data-aos="zoom-out-left" class="mb-8 font-sans text-4xl antialiased font-bold md:text-5xl text-brand-500">
                اكتشف المستقبل!</h1>
            <p data-aos="zoom-out-up" class="font-sans text-base antialiased text-current text-end">معــرض دمشــق الدولــي
                أكثــر مــن مجــرد معــرض – إنــه مركــز لألفــكار والتعــاون والنمــو والسـلام واإلســتثمار مــن خــل
                ورش العمــل التفاعليــة، والمناقشــات الجماعيــة، وفعاليــات التواصــل، نوفــر منصــة لإللهــام وتطويــر
                األعمــال.</p>
        </div>


        <h1 data-aos="zoom-out-left"
            class="my-8 mt-24 font-sans text-4xl antialiased font-bold text-center md:text-5xl text-brand-500">اكتشف أحدث
            التقنيات في جميع المجالات</h1>

        <div class="grid grid-cols-3 gap-6 my-24">
            @forelse ($events as $event)
                <x-full-card image="{{ $event['image'] }}" title="{{ $event['title'] }}"
                    subTitle="{{ $event['subTitle'] }}" description="{{ $event['description'] }}"
                    url="{{ $event['url'] }}" />
            @empty
                <div class="mb-8 font-sans text-4xl antialiased font-bold text-center md:text-5xl text-brand-200">
                    No Events
                </div>
            @endforelse
        </div>


        <div class="w-full p-4 rounded h-max">
            <div id="calendar"></div>
        </div>

        <div id="event-modal"
            class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black/40 {{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">
            <div class="relative w-full max-w-md p-6 bg-white shadow-2xl rounded-xl">
                <button id="close-modal"
                    class="absolute text-2xl font-bold text-gray-400 top-3 {{ app()->getLocale() == 'ar' ? 'left-4' : 'right-4' }} hover:text-red-500">&times;</button>
                <h2 class="mb-4 text-2xl font-bold" id="modal-title"></h2>
                <div class="mb-2 text-stone-700" id="modal-time"></div>
                <div class="mb-2" id="modal-desc"></div>
                <div class="text-end">
                    <a id="modal-url"
                        class=" inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-2 px-4 shadow-sm hover:shadow-md bg-green-500 hover:bg-success-light relative bg-gradient-to-b from-green-500 to-green-600 border-green-600 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-green-600 hover:to-green-600 hover:border-green-600 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-2px_0px_rgba(0,0,0,0.18)] after:pointer-events-none transition antialiased"
                        href="">{{ __('pages.show') }}</a>
                </div>
            </div>
        </div>


        <div
            class="flex justify-start items-center flex-col w-1/3 mx-auto mt-24 {{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">
            @foreach ($calendarEvents as $item)
                <div class="relative flex gap-4 min-w-[300px] w-full" data-aos="fade-right"
             data-aos-delay="100"
             data-aos-duration="700">
                    <div class="relative">
                        @if (!$loop->last)
                            <div class="absolute left-1/2 top-5 h-full w-0.5 -translate-x-1/2 bg-green-200"></div>
                        @endif
                        <span
                            class="relative grid w-10 h-10 text-green-700 bg-green-200 rounded-full place-items-center">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" fill="none" class="w-5 h-5">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                                <path d="M12 8v4l3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 mb-10">
                        <p class="text-base font-bold md:text-xl text-stone-800 dark:text-white">{{ $item['title'] }}
                        </p>
                        <small
                            class="block mt-2 text-sm md:text-xl text-stone-600">{{ $item['description'] ?? '' }}</small>
                        @if (isset($item['start']))
                            <div class="mt-2 text-xs text-green-700 md:text-xl">
                                <span>{{ \Carbon\Carbon::parse($item['start'])->translatedFormat('Y-m-d H:i') }}</span>
                                @if (isset($item['end']))
                                    &mdash;
                                    <span>{{ \Carbon\Carbon::parse($item['end'])->translatedFormat('H:i') }}</span>
                                @endif
                            </div>
                        @endif
                        @if (isset($item['url']) && $item['url'])
                            <div class="text-end">


                                <a href="{{ $item['url'] }}"
                                    class=" inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1 px-2 shadow-sm hover:shadow-md bg-green-500 hover:bg-success-light relative bg-gradient-to-b from-green-500 to-green-600 border-green-600 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-green-600 hover:to-green-600 hover:border-green-600 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-2px_0px_rgba(0,0,0,0.18)] after:pointer-events-none transition antialiased">{{ __('pages.show') }}</a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>



    </div>





    <style>
        /* Extra Styling for FullCalendar to match the Design System using Tailwind CSS Colors */
        .fc {
            --fc-border-color: #A5D6A7;
            /* green-200 */
            --fc-button-bg-color: #2E7D32;
            /* green-800 */
            --fc-button-border-color: #A5D6A7;
            /* green-200 */
            --fc-button-hover-bg-color: #2E7D32;
            /* green-800 */
            --fc-button-hover-border-color: #81C784;
            /* green-300 */
            --fc-button-active-bg-color: #43A047;
            /* green-600 */
            --fc-button-active-border-color: #66BB6A;
            /* green-400 */
            --fc-event-bg-color: #43A047;
            /* green-600 */
            --fc-event-border-color: #43A047;
            /* green-600 */
            --fc-today-bg-color: #E8F5E9;
            /* green-50 */

        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Load FullCalendar script dynamically
            const script = document.createElement("script");
            const laravelEvents = @json($calendarEvents);
            const lang = @json(app()->getLocale());
            const ar_sa = {
                    direction: 'rtl',
                    buttonText: {
                        prev: 'السابق',
                        next: 'التالي',
                        today: 'اليوم',
                        year: 'سنة',
                        month: 'شهر',
                        week: 'أسبوع',
                        day: 'يوم',
                        list: 'أجندة',
                    },
                    weekText: 'أسبوع',
                    allDayText: 'اليوم كله',
                    moreLinkText: 'أخرى',
                    noEventsText: 'أي أحداث لعرض',
            }
            let config = {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    selectable: true,
                    editable: true,
                    events: laravelEvents,
                    height: 'auto',
                    eventClick: function(info) {
                        // Prevent default click
                        info.jsEvent.preventDefault();

                        // Get event data
                        document.getElementById('modal-title').innerText = info.event.title;
                        document.getElementById('modal-time').innerText =
                            (info.event.start ? info.event.start.toLocaleString() : '') +
                            (info.event.end ? ' - ' + info.event.end.toLocaleString() : '');
                        document.getElementById('modal-desc').innerText = info.event.extendedProps
                            .description || '';
                        document.getElementById('modal-url').href = info.event.extendedProps
                            .url || '';
                        if (info.event.extendedProps.url) document.getElementById('modal-url')
                            .classList.remove('hidden');
                        else document.getElementById('modal-url').classList.add('hidden');

                        // Show the modal
                        document.getElementById('event-modal').classList.remove('hidden');
                    },
                }
            script.src = "https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js";
            script.async = true;
            script.onload = () => {
                const calendarEl = document.getElementById('calendar');
                if (!calendarEl) return;

                if(lang == 'ar') {
                    config = { ...config, ...ar_sa };
                }

                const calendar = new FullCalendar.Calendar(calendarEl, config);
                calendar.render();
            };
            document.body.appendChild(script);
        });

        document.getElementById('close-modal').onclick = function() {
            document.getElementById('event-modal').classList.add('hidden');
        };
        // Optional: close when clicking outside modal content
        document.getElementById('event-modal').onclick = function(e) {
            if (e.target === this) this.classList.add('hidden');
        };
    </script>
</x-guest-layout>
