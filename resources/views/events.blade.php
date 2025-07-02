<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="أجندة الفعاليات" />


    <div class="container mx-auto my-24 ">
        <div class="w-3/4 mx-auto mb-16 text-center md:w-1/2">
            <h1 data-aos="zoom-out-left" class="mb-8 font-sans text-4xl antialiased font-bold md:text-5xl text-brand-500">
                اكتشف المستقبل!</h1>
            <p data-aos="zoom-out-up" class="font-sans text-base antialiased text-current text-end">معــرض دمشــق الدولــي
                أكثــر مــن مجــرد معــرض – إنــه مركــز لألفــكار والتعــاون والنمــو والسـلام واإلســتثمار مــن خــل
                ورش العمــل التفاعليــة، والمناقشــات الجماعيــة، وفعاليــات التواصــل، نوفــر منصــة لإللهــام وتطويــر
                األعمــال.</p>
        </div>


        <h1 data-aos="zoom-out-left" class="my-8 mt-24 font-sans text-4xl antialiased font-bold text-center md:text-5xl text-brand-500">اكتشف أحدث التقنيات في جميع المجالات</h1>

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

        <div id="event-modal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black/40">
    <div class="relative w-full max-w-md p-6 bg-white shadow-2xl rounded-xl">
        <button id="close-modal" class="absolute text-xl text-gray-400 top-3 right-3 hover:text-red-500">&times;</button>
        <h2 class="mb-4 text-2xl font-bold" id="modal-title"></h2>
        <div class="mb-2 text-stone-700" id="modal-time"></div>
        <div class="mb-2" id="modal-desc"></div>
        <!-- You can add more fields as needed -->
    </div>
</div>

    </div>





<style>
  /* Extra Styling for FullCalendar to match the Design System using Tailwind CSS Colors */
  .fc {
--fc-border-color: #A5D6A7;           /* green-200 */
--fc-button-bg-color: #2E7D32;        /* green-800 */
--fc-button-border-color: #A5D6A7;    /* green-200 */
--fc-button-hover-bg-color: #2E7D32;  /* green-800 */
--fc-button-hover-border-color: #81C784; /* green-300 */
--fc-button-active-bg-color: #43A047; /* green-600 */
--fc-button-active-border-color: #66BB6A; /* green-400 */
--fc-event-bg-color: #43A047;         /* green-600 */
--fc-event-border-color: #43A047;     /* green-600 */
--fc-today-bg-color: #E8F5E9;         /* green-50 */

  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Load FullCalendar script dynamically
  const script = document.createElement("script");
    const laravelEvents = @json($calendarEvents);
  script.src = "https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js";
  script.async = true;
  script.onload = () => {
    const calendarEl = document.getElementById('calendar');
    if (!calendarEl) return;

    const calendar = new FullCalendar.Calendar(calendarEl, {
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
    document.getElementById('modal-desc').innerText = info.event.extendedProps.description || '';

    // Show the modal
    document.getElementById('event-modal').classList.remove('hidden');
  },
    });
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
