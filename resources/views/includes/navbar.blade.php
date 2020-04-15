<nav class="navbar navbar-inverse ">
 
<div class="container">


  <a class="navbar-brand" href="/">TodoList</a>
  <div class="navbar" id="collapse navbar-collapse">
  
      <ul class="nav navbar-nav">
          <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
          <li class="{{Request::is('/todo/create') ? 'active' : ''}}"> <a href="/todo/create">Create todo</a></li>
    </ul>
   
   </div>
  </div>
</nav>