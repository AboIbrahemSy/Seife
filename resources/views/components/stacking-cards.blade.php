@props(['cards'])

<ul x-data="stackCards()" x-init="init()" class="stack-cards">
    @foreach ($cards as $card)
    <li class="card-item h-80 sticky top-[200px] my-12 bg-white p-6 rounded-lg shadow-lg transform origin-top flex items-start justify-between">
            <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="w-1/2 h-full rounded-md">
            <div class="{{ app()->getLocale() == 'ar' ? 'text-right rtl' : 'text-left' }}">
                <h3 class="mt-4 text-xl font-semibold text-brand-500">{{ $card['title'] }}</h3>
                <p class="mt-2 text-gray-600">{!! $card['description'] !!}</p>
            </div>
    </li>
    @endforeach
</ul>

<script>
function stackCards() {
    return {
        items: [],         // card elements
        cardHeight: 0,     // height of a card
        marginY: 16,       // gap between stacked cards (in px)
        cardTop: 0,        // original top offset of container
        init() {
            // Cache card items and dimensions
            this.items = Array.from(this.$el.querySelectorAll('.card-item'));
            if (this.items.length) {
                this.cardHeight = this.items[0].offsetHeight;
            }
            // Record initial top position of the container
            this.cardTop = this.$el.getBoundingClientRect().top;
            // Listen to scroll events
            window.addEventListener('scroll', () => this.onScroll());
        },
        onScroll() {
            const top = this.$el.getBoundingClientRect().top;
            this.items.forEach((item, i) => {
                const scrollOffset = this.cardTop - top - i * (this.cardHeight + this.marginY);
                if (scrollOffset > 0) {
                    let scale = (this.cardHeight - scrollOffset * 0.05) / this.cardHeight;
                    scale = Math.max(scale, 0); // never go below 0
                    item.style.transform = `translateY(${this.marginY * i}px) scale(${scale})`;
                } else {
                    item.style.transform = '';
                }
            });
        }
    }
}
</script>

<noscript>
    <p class="text-sm text-gray-500">Enable JavaScript to see the stacking animation.</p>
</noscript>
