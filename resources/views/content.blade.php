

@if(5>10)
<P>5 is lawer than 10 </p> 
@elseif(5==10)
<p>5 is indeed lawer than 10 </p> 
@else
<h1>all condition are wrong</h1>
@endif

@unless(empty($name))
<h2>Name isn’t empty </h2>
@endunless

@empty($name)
<h2>Name is empty </h2>
@endempty
  
@isset($name)
<h2>Name has been set</h2>
@endisset

<!----
comparing

---->

@switch($type)
@case(1)

   @break
@case(2)
   @break
@case(3)
   @break

@endswitch


