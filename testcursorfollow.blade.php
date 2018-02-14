<head>
<style>
#divoverpage {position:absolute;display:none;color:white;background-color:black; transition: 0.2s;}
#onme {width:100%;height:100%;background-color:white;cursor:pointer}
</style>
<script type="text/javascript">
var divFollow = 'divoverpage'; // div that is to follow the mouse (must be position:absolute)
var offX = 20;          // X offset from mouse position
var offY = 20;          // Y offset from mouse position

function mouseX(evt) {if (!evt) evt = window.event; if (evt.pageX) return evt.pageX; else if (evt.clientX)return evt.clientX + (document.documentElement.scrollLeft ?  document.documentElement.scrollLeft : document.body.scrollLeft); else return 0;}
function mouseY(evt) {if (!evt) evt = window.event; if (evt.pageY) return evt.pageY; else if (evt.clientY)return evt.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop); else return 0;}

function follow(evt) {
    var obj = document.getElementById(divFollow).style;
    obj.left = (parseInt(mouseX(evt))+offX) + 'px';
    obj.top = (parseInt(mouseY(evt))+offY) + 'px';
    }
document.onmousemove = follow;
</script>
</head>
<body>
<div id="divoverpage" onMouseover= ''><a href="www.google.co.uk">test</a></div>
<br><br>
<div id='onme' onMouseover='document.getElementById(divFollow).style.display="block"' onMouseout='document.getElementById(divFollow).style.display="none"'>When hover over this area there will be object following the mouse



<table style="border: 1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
  </tr>
  @foreach ($tests as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->col1}}</td>
    <td>{{$user->col2}}</td>
    <td>{{$user->col3}}</td>
    <td>{{$user->col4}}</td>
    <td>{{$user->col5}}</td>
  </tr>

@endforeach
</table>

<table style="border: 1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
  </tr>
  @foreach ($checks as $check)
  <tr>
    <td>{{$check->id}}</td>
    <td>{{$check->col1}}</td>
    <td>{{$check->col2}}</td>
    <td>{{$check->col3}}</td>
    <td>{{$check->col4}}</td>
    <td>{{$check->col5}}</td>
  </tr>

@endforeach
</table>

</tr>
</div>
</body>
