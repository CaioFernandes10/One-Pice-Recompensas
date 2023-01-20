<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<style>
.direita {
   
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   background-repeat:no-repeat;
   background-image: url({{url('img/mar3.jpg')}});
   
   
}
table{
    background-color: rgb(81, 81, 81);
    border-radius: 10px;
    border-bottom-width: 5px;
    border-bottom-color: rgb(255, 255, 255);
   
    

}
thead{
    font-size: 25px;
    
}
td{
    color: white;
    padding: 20px;
    font-size: 25px
}
</style>

<body>
    
    <div class="topo">

        <div class="logo">
            <img src="{{asset('img/te.png')}}">
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="{{route('paginas.home')}}">Inicio</a></li>
                <li><a >Procurados</a></li>
                <li><a>Rank Mais Procurados</a></li>
            </ul>
        </div>
    </div>



    <div class="direita">

        <h1 style="color: black">recompensas</h1>
       
            
        <table border="1"> 

            <thead>
                <th>id</th>
                <th>nome</th>
                <th>apelido</th>
                <th>recompensa</th>
                <th>descricao</th>
                
            </thead>
            @foreach ($dados as $dado => $valor)
            <tbody>
               <tr>
                <td>{{$valor->id}}</td>
                <td>{{$valor->nome}}</td>
                <td>{{$valor->apelido}}</td>
                <td>{{$valor->recompensa}}</td>
                <td>{{$valor->descricao}}</td>
              </tr>
            </tbody>
            @endforeach
        </table>

     
    
    <div>
        
      

    </div>


</body>
</html>