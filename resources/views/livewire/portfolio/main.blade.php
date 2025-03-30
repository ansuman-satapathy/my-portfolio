<div class="pt-20">
    @if ($section === 'home')
        @livewire('hero')
    @elseif($section === 'project')
        @livewire('project')
    @elseif($section === 'blog')
        @livewire('blog')
    @elseif($section === 'certificate')
        @livewire('certificate')
    @elseif($section === 'contact')
        @livewire('contact')
    @endif
</div>
