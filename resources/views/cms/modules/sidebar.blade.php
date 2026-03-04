{% macro category_header(name) %}
<div class="row text-white bg-lightblue mt-1 p-1 pl-3">
    <span class="font-weight-bold">{{ name }}</span>
</div>
{% endmacro %}
{% macro url(name, url) %}
<div class="row bg-disabled bg-dark p-1 pl-3">
    <a class="cms-url" href="/cms/{{ url }}">{{ name }}</a>
</div>
{% endmacro %}
{{ category_header('Dashboard') }}
{% if g.user.admin_level >= 2 %}
{{ url('Bestellingen', 'dashboard') }}
{{ url('Track&Trace mails', 'trackandtrace') }}
{{ url('Instellingen verzending', 'shipment_settings') }}
{{ url('Offerte aanvragen', 'quotations') }}
{% endif %}

{% if g.user.admin_level >= 2 %}
{{ category_header('Producten') }}
{{ url('Alle producten', 'products') }}
{% endif %}

{% if g.user.admin_level >= 2 %}
{{ category_header('Gebruikers') }}
{{ url('Alle gebruikers', 'users') }}
{% endif %}

{% if g.user.admin_level >= 2 %}
{{ category_header('Verbannen items') }}
{{ url('Verbannen woorden', 'banned_words_list') }}
{{ url('Verbannen ip\'s', 'banned_ip_list') }}
{{ url('Verbannen berichten', 'banned_message_list') }}
{% endif %}

{% if g.user.admin_level >= 2 %}
{{ category_header('Reviews') }}
{{ url('Reviews', 'reviews') }}
{% endif %}

{% if g.user.admin_level >= 1 %}
{{ category_header('Blog') }}
{{ url('Blog Posts', 'blogposts') }}
{% endif %}


{%  if g.user.admin_level >= 1 %}
{{ category_header("Emails") }}
{{ url("Email Queue", "emails") }}
{% endif %}
