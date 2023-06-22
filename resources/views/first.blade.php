<x-header returnData="First" returnname="Dhenish"/>
<h1> Hello Word!! </h1>

<a href={{ route('aboutPage') }}>Go to About Page</a>
<a href="{{URL::to('/contact')}}">Go to Contact Page</a>

<br><br><hr><br>
<h1>{{__('userlocale.heading')}}</h1>
<ul>
    <li>
        <a href="">{{__('userlocale.hindi')}}</a>
    </li>
    <li>
        <a href="">{{__('userlocale.english')}}</a>
    </li>
    <li>
        <a href="">{{__('userlocale.list')}}</a>
    </li>
</ul>


