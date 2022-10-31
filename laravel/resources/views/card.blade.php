<div style="display: flex">
@foreach($numberOfCard as $card)
    <div class="card" style="border: 1px red solid; width: 300px; padding: 20px">
        <div class="card-header" style="font-weight: bold; text-align: center">{{$card}}</div>
    </div>
@endforeach
</div>



