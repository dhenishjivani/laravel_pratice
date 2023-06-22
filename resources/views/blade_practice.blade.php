<a href={{ route('aboutPage') }}>about</a>

<h1>  Hello Word!! I am system oprator and below I mention user's details </h1>
{{-- <h1>  Hello {{$id}}  </h1> --}}
{{-- <h1> {{10*10}} </h1> --}}
{{-- <h2> {{count($id)}} </h2> --}}


{{-- If else condition --}}
{{-- <h2> {{$id}} is accessing this file right now.</h2>
@if($id=='Dhenish')
<h1>Hello {{$id}}</h1>
@elseif($id=='Deni')
<h1>Hello {{$id}}</h1>
@else
<h1>Wait a minute who are you??</h1> --}}
{{-- @endif --}}


{{-- For Loop  --}}
{{-- @for($i=0; $i<=10 ; $i++)
{{$i}}
@endfor --}}


{{-- For Each lOOP --}}
@foreach($names as $name)
@if(in_array($name , ["Dhenish" , "Helly"]))
<h1> Hello {{$name}} You are valid user</h1>
@else
<h1>Invalid User {{$name}}</h1>
@endif
@endforeach

{{-- @csrf --}}
{{json_encode($names)}}
@json("        <h3>hsdlf</h3>           ")
<br><br>
{{Js::from("          <h3>hsdlf</h3>             ")}}
<br><br>
@json(($names));      
{{-- aa je che ne ae mast array j apse matlab che su blade j che je apne html ma php use karvu hoy to m @ no use thay ae vadu j che to aeto apvanu j che result mast ready  --}}
<br><br>
{{Js::from(json_encode($names))}}
{{-- have aa su che ae ke value to ape che array ni but JSON.parse('[\u0022Dhenish\u0022,\u0022Denish\u0022,\u0022Denisha\u0022,\u0022Deni\u0022,\u0022Helly\u0022]')  aavi rite ape che
Matlab aam samji ne ke Js::from means ke java script madhi kayk ave che aevu thayu to apane vyavare aene script ma j mukvu pade ne --}}

<script>
    // var data = @json($names);
    var data = {{Js::from($names)}}     
    // console.log($names);  
    console.log(data)
    // console.log(data.length)
</script>