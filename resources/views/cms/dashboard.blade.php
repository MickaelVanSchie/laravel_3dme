{% extends 'cms/master.html' %}

{% macro statusbutton(status) %}
<div class="badge text-white text-center col-md-12
    {% if status in ['paid', 'completed', 'shipped'] %}text-bg-success
    {% elif status in ['new', 'hold'] %}text-bg-warning
    {% elif status in ['cancelled'] %}text-bg-danger{% endif %}
">
    {{ status }}
</div>
{% endmacro %}

{% macro sort_button(text, sort_property) %}
{% if sort_property == sorting %}
{% set _direction = 'asc' if direction == 'desc' else 'desc' %}
{% endif %}
<a href="{{ url("cms.dashboard", sorting=sort_property, direction=_direction, page=page) }}">{{ text }}</a>
{% endmacro %}

{% macro page_button(page_num) %}
{% if page_num > 0 and page_num < total_orders / 35 %}
<a href="{{ url('cms.dashboard', page=page_num, sorting=sorting, direction=direction) }}"
   class="btn btn-primary col-1">{{ page_num }}</a>
{% endif %}
{% endmacro %}

@section('pagecontent')
    <div class="row">
        {% if page > 1 %}
        <a href="{{ url('cms.dashboard', $page=page - 1, sorting=sorting, direction=direction) }}"
           class="btn btn-primary col-2"><</a>
        {% endif %}
        {{ page_button(page - 3) }}
        {{ page_button(page - 2) }}
        {{ page_button(page - 1) }}
        <div class="col-1 btn btn-secondary">{{ page }}</div>
        {{ page_button(page + 1) }}
        {{ page_button(page + 2) }}
        {{ page_button(page + 3) }}
        {% if page < total_orders / 35 %}
        <a href="{{ url_for('cms.dashboard', page=page + 1, sorting=sorting, direction=direction) }}"
           class="btn btn-primary col-2">></a>
        {% endif %}
    </div>
    <div class="row ">
        <div class="col-1">
            {{ sort_button("OrderID", "id") }}
        </div>
        <div class="col-2">
            {{ sort_button("Status", "status") }}
        </div>
        <div class="col-4">
            {{ sort_button("Email", "email") }}
        </div>
        <div class="col-2">
            {{ sort_button("Orderdatum", "order_date") }}
        </div>
        <div class="col-2">
            Prijs
        </div>
    </div>
    {% if g.user.admin_level >= 2 %}
    {% for basket_order in basket_orders %}
    <a href="/cms/order_details/{{ basket_order.id }}">
        <div class="row   {{ loop.cycle('bg-lightgray', '') }}">
            <div class="col-1">
                {{ basket_order.id }}
            </div>
            <div class="col-2">
                {{ statusbutton(basket_order.status) }}
            </div>
            <div class="col-4">
                {{ basket_order.email }}
            </div>
            <div class="col-2">
                {{ basket_order.order_date.strftime('%d-%m-%Y') }}
            </div>
            <div class="col-2">
                {{ basket_order.price_list.total_cost_cents | euro }}
            </div>
        </div>
    </a>
    {% endfor %}
    {% endif %}
@endsection
