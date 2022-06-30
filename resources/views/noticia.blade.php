<table border="1" cellspacing="1" cellpadding="1">
    <thead>
        <tr>
            <th>Título</th>
            <th>Notícia</th>
        </tr>
    </thead>
    <tbody>
        @foreach($noticias as $noticia)
            <tr>
                <td>{{$noticia->titulo}}</td>
                <td>{{$noticia->noticia}}</td>
            </tr>
        @endforeach
    </tbody>
</table>