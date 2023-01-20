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

</style>

<body>
    
    <div class="topo">

        <div class="logo">
            <img src="{{asset('img/te.png')}}">
        </div>
        
        <div class="menu">
            <ul>
                <li><a>Inicio</a></li>
                <li><a href="{{route('paginas.recompensa')}}">Procurados</a></li>
                <li><a>Rank Mais Procurados</a></li>
            </ul>
        </div>
    </div>



    <div class="conteudo-destaque">

        

        <div class="direita">
           
            <div class="formulario">
               
                <h1 class ="titulo">Recompensa</h1>
                <form action="{{ route('paginas.dados') }}" method="POST" >

                    @csrf
                    {{-- metodo old faz com que o valor do campo persista, mesmo se for preenchido errado --}}
                    <input name="nome" type="text" placeholder="Nome" >
                    @if ($errors->has('nome'))
                        <div style="color: red">{{$errors->first('nome')}} </div>
                     @endif
                        
                    
                    {{-- pega apenas a mensagem de erro do nome --}}
                
                    <input name="apelido" type="text" placeholder="apelido" style="color: azure" >
                    @if ($errors->has('apelido'))
                     <div style="color: red">{{$errors->first('apelido')}} </div>
                    @endif
                    
                     <input name="recompensa" type="text"  placeholder="digite o valor da recompensa"> 
                     @if ($errors->has('recompensa'))
                     <div style="color: red">{{$errors->first('recompensa')}} </div>
                    @endif
                    {{-- <input type="image" src="" alt="Coloque a foto do individuo"> --}}

                    <textarea name="descricao"  cols="30" rows="10">
                    Digite o porque esta colocando a recompensa no individuo
                    </textarea>
                    
                
                    <button type="submit" class="">ENVIAR</button>
                </form>
    
            </div>
          

        </div>

        


    </div>

    <div>

        {{print_r($errors)}}

    </div>


</body>
</html>