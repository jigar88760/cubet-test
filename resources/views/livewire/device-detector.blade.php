<div x-data="{ isMobile: window.innerWidth <= 768 }">
    <span x-text="isMobile ? 'Mobile View' : 'Desktop View'"></span>
</div>

<div x-data="{ isMobile: window.innerWidth <= 768 }">
    <h1 class="text-2xl font-bold" :class="{ 'hidden': isMobile }">Display Data</h1>
</div>
