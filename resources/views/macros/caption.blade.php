{% macro caption(title, text, button=None, button2=None) %}
<div class='container-fluid container1'>
    <div class='container  '>
        <div class="row">
            <div class="col-md-12">
                <h1 class='container1-title'>{{ $title }}</h1>
                <div class='mb-2'>
                    <span>{{ text }}</span>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            {% if button %}
                            <div class="col-12 col-md-6 mb-3">
                                <a href="{{ button['url'] }}" class="w-100">
                                    <div class='btn btn-primary col-12'>{{ button['text'] }}</div>
                                </a>
                            </div>
                            {% endif %}
                            {% if button2 %}
                            <div class="col-12 col-md-6">
                                <a href="{{ button2['url'] }}">
                                    <div class="btn btn-primary col-12">{{ button2['text'] }}</div>
                                </a>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endmacro %}
