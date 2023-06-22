<h1> This is come from contact page used blade here and include this file into about page</h1>
<a href={{ route('aboutPage') }}>about</a>
<br>
<br>
{{URL::full()}}

<h1>You come from: {{URL::previous()}}</h1>