@if($g->user->role >= 2)
    <x-category-header name="Dashboard"></x-category-header>
    <x-category-url name="Bestellingen" url="dashboard"></x-category-url>
    <x-category-url name="Track&Trace mails" url="trackandtrace"></x-category-url>
    <x-category-url name="Instellingen verzending" url="shipment-settings"></x-category-url>
    <x-category-url name="Offerte aanvragen" url="quotations"></x-category-url>
@endif

@if($g->user->role >= 2)
    <x-category-header name="Producten"></x-category-header>
    <x-category-url name="Alle producten" url="products"></x-category-url>
@endif

@if($g->user->role >= 2)
    {{-- This category is mainly to prevent spam filling up the contact form and emails --}}
    {{-- Basic things like pr0n, crypto and financial related messages will automatically be filtered with these settings  --}}
    <x-category-header name="Spam preventie"></x-category-header>
    <x-category-url name="Verbannen woorden" url="banned-word-list"></x-category-url>
    <x-category-url name="Verbannen ip's" url="banned-ip-list"></x-category-url>
    <x-category-url name="Verbannen berichten" url="banned-message-list"></x-category-url>
    <x-category-url name="Verbannen woorden" url="banned-word-list"></x-category-url>
@endif

@if($g->user->role >= 2)
    <x-category-header name="Gebruikers"></x-category-header>
    <x-category-url name="Alle gebruikers" url="all-users"></x-category-url>
@endif

@if($g->user->role >= 2)
    <x-category-header name="Reviews"></x-category-header>
    <x-category-url name="Manage reviews" url="reviews"></x-category-url>
@endif

@if($g->user->role >= 1)
    <x-category-header name="Blog"></x-category-header>
    <x-category-url name="Blog posts" url="blogposts"></x-category-url>
@endif

@if($g->user->role >= 1)
    <x-category-header name="Emails"></x-category-header>
    <x-category-url name="Email queue" url="emails"></x-category-url>
@endif

