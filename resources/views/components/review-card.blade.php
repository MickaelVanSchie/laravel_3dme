<div class='card'>
    <div class='card-body bg-gray'
         style='min-height: 350px; display: flex; flex-direction: column; box-shadow: 0 0 12px #444'>
        <div class='template-demo'>
            <h3 class='card-title text-left h4'><i class='fas fa-quote-left testimonail-quote'></i>
                {{$title}}</h3>
            <p>{{$text}}</p>
        </div>
        <div class='text-center' style='margin-top: auto;'>
            @for($i = 0; $i < $stars; $i++)
                <i class="fas fa-star" style="font-size: 1rem; color: #FFD700;"></i>
            @endfor
            <div class='col-12'>
                <p>{{$author}}</p>
            </div>
        </div>
    </div>
</div>
